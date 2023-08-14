<?php
    include "BaseDAO.php";

    class displayQuestionsDAO extends BaseDAO {
        function displayQuestions($item_num) {
            $totalQuestions = $item_num;
            $timer = "";

            if($totalQuestions == 5){
                $timer = "<span class='hr'>00</span>:<span class='min'>15</span>:<span class='sec'>00</span>";
            }else if($totalQuestions == 7){
                $timer = "<span class='hr'>00</span>:<span class='min'>30</span>:<span class='sec'>00</span>";
            }else{
                $timer = "<span class='hr'>01</span>:<span class='min'>00</span>:<span class='sec'>00</span>";
            }
            
            $this->openConn();
            $stmt = $this->dbh->prepare("SELECT * FROM tbl_questions ORDER BY RAND() LIMIT ?");
            $stmt->bindParam(1, $totalQuestions,PDO::PARAM_INT);
            $stmt->execute();
            $this->closeConn();

            $iteration = 1;
            echo "<div class='d-flex justify-content-between'>
                    <h5>1/5</h5>
                    <h5 class='text-muted'>$timer</h5>
                </div>";
            echo"<div class='card'><div class='card-body'>";
            echo "<form id='wrap_id'>";
            
            while($row = $stmt->fetch()){
                $i = $iteration++;
                echo "<div class='card-body2'>";
                echo "<div class='card-title'><h5><strong>Question No. $i of $totalQuestions</strong></h5></div>";
                echo "<p class='card-text lead' style='white-space:pre-wrap;'><span>".$row[1]."</span></p>";
                
                $row_answer_id = $row[0];
                $this->openConn();
                $stmt_answer = $this->dbh->prepare("SELECT * FROM tbl_answer WHERE exam_question_id = ? ORDER BY RAND()");
                $stmt_answer->bindParam(1, $row_answer_id);
                $stmt_answer->execute();
                $this->closeConn();

                while($row_answer = $stmt_answer->fetch()){
                    echo "<div class='form-check'>";
                    echo "<label class='form-check-label' for='flexRadioDefault'><input class='form-check-input' type='radio' name='question_num_$i' value='$row_answer[0]'>";
                    echo "$row_answer[1]</label>";
                    echo "</div>";
                }
                echo "</div>";
            }
            echo "</form>";
            echo "</div></div>";
            echo "<div class='container mt-3'>
                    <div class='row'>
                        <div class='col-12'>
                            <div class='d-flex justify-content-between'>
                                <button class='btn btn-warning mr-2 text-white' onclick='showPrevious()' id='prevButton'>Previous</button>
                                <button class='btn btn-warning text-white' onclick='showNext()' id='nextButton'>Next</button>
                                <button class='btn btn-warning text-white' onclick='checkData()' id='submitButton'>Submit</button>
                            </div>
                        </div>
                    </div>
                </div>";
        }
    }