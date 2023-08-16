<?php
include "BaseDAO.php";

class displayQuestionsDAO extends BaseDAO
{
    function displayQuestions($item_num)
    {
        $totalQuestions = $item_num;
        $timer = "";

        if ($totalQuestions == 5) {
            $timer = "<span class='hr'>00</span>:<span class='min'>15</span>:<span class='sec'>00</span>";
        } else if ($totalQuestions == 7) {
            $timer = "<span class='hr'>00</span>:<span class='min'>30</span>:<span class='sec'>00</span>";
        } else {
            $timer = "<span class='hr'>01</span>:<span class='min'>00</span>:<span class='sec'>00</span>";
        }

        $this->openConn();
        $stmt = $this->dbh->prepare("SELECT * FROM tbl_questions ORDER BY RAND() LIMIT ?");
        $stmt->bindParam(1, $totalQuestions, PDO::PARAM_INT);
        $stmt->execute();
        $this->closeConn();

        $iteration = 1;
        echo "<div class='d-flex justify-content-center'>
                <h5 class='text-muted'>$timer</h5>
            </div>";
        echo "<div class='card'><div class='card-body'>";

        echo "<form id='wrap_id'>";
        while ($row = $stmt->fetch()) {
            $i = $iteration++;
            echo "<div class='card-body2' style='max-height: 300px; padding: 20px'>";
            echo "<div class='card-title mb-3'><h6 class='fw-bold text-primary'>Question No. $i of $totalQuestions</h6></div>";
            echo "<p class='card-text fs-6 mb-4 lead' style='white-space:pre-wrap;'><span>" . $row[1] . "</span></p>";

            $row_answer_id = $row[0];
            $this->openConn();
            $stmt_answer = $this->dbh->prepare("SELECT * FROM tbl_answer WHERE exam_question_id = ? ORDER BY RAND()");
            $stmt_answer->bindParam(1, $row_answer_id);
            $stmt_answer->execute();
            $this->closeConn();

            while ($row_answer = $stmt_answer->fetch()) {
                echo "<div class='form-check'><label class='form-check-label' for='flexRadioDefault_$row_answer[0]'><input class='form-check-input' type='radio' name='question_num_$i' value='$row_answer[0]' id='flexRadioDefault_$row_answer[0]'>$row_answer[1]</label></div>";
            }
            echo "</div>";
        }
        echo "</form>";
        echo "</div></div>";
        echo "<div class='container mt-3'>
                    <div class='row'>
                        <div class='col-12'>
                            <div class='d-flex justify-content-between'>
                                <button class='btn btn-warning btn-lg text-white' onclick='showPrevious()' id='prevButton'><i class='fa-solid fa-arrow-left'></i>&nbsp;Previous</button>
                                <button class='btn btn-warning btn-lg text-white' onclick='showNext()' id='nextButton'>Next&nbsp;<i class='fa-solid fa-arrow-right'></i></button>
                                <button class='btn btn-warning btn-lg text-white' onclick='checkData()' id='submitButton' style='display: none'><i class='fa-solid fa-paper-plane'></i>&nbsp;Submit</button>
                            </div>
                        </div>
                    </div>
                </div>";
    }
}
