<?php
    include "BaseDAO.php";

    class displayQuestionsDAO extends BaseDAO {
        function displayQuestions() {
            $totalQuestions = "5";
            
            $this->openConn();
            $stmt = $this->dbh->prepare("SELECT * FROM tbl_questions ORDER BY RAND() LIMIT ?");
            $stmt->bindParam(1, $totalQuestions,PDO::PARAM_INT);
            $stmt->execute();
            $this->closeConn();

            $iteration = 1;
            echo "<form id='wrap_id'>";
            while($row = $stmt->fetch()){
                $i = $iteration++;
                echo "<div class='card-body2'>";
                echo "<div class='card-title'><h5>Question No. $i of $totalQuestions</h5></div>";
                echo "<p class='card-text lead'><span>".$row[1]."</span></p>";
                
                $row_answer_id = $row[0];
                $this->openConn();
                $stmt_answer = $this->dbh->prepare("SELECT * FROM tbl_answer WHERE exam_question_id = ? ORDER BY RAND()");
                $stmt_answer->bindParam(1, $row_answer_id);
                $stmt_answer->execute();
                $this->closeConn();

                while($row_answer = $stmt_answer->fetch()){
                    echo "<div class='form-check'>";
                    echo "<label class='form-check-label' for='flexRadioDefault'><input class='form-check-input' type='radio' name='question_num_$i' id='answer_id_$i' value='$row_answer[1]'>";
                    echo "$row_answer[1]</label>";
                    echo "</div>";
                }
                echo "</div>";
            }
            echo "</form>";
        }
    }