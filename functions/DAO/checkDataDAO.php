<?php
include "BaseDAO.php";
class checkDataDAO extends BaseDAO {
    function checkDataFunctions($data, $totalNum){
        $user_answer = $data;
        $correct = 0;
        $wrong = 0;
        $iteration = 1;
        $score = 0;
        $i=0;
        foreach ($data as $key => $value) {
            $i = $iteration++;
            foreach ($value as $item) {
                $this->openConn();
                $stmt = $this->dbh->prepare("SELECT * FROM tbl_answer WHERE answer_id = ?");
                $stmt->bindParam(1, $item);
                $stmt->execute();
                $this->closeConn();

                while ($row_answer_list = $stmt->fetch()) {
                    $this->openConn();
                    $stmt_question = $this->dbh->prepare("SELECT * FROM tbl_questions WHERE question_id = ?");
                    $stmt_question->bindParam(1, $row_answer_list[2]);
                    $stmt_question->execute();
                    $this->closeConn();
                    while ($row_question_list = $stmt_question->fetch()) {
                        $answer_string = $row_question_list[5];

                        if ($answer_string === $row_answer_list[1]) {
                            $correct++;
                        } else {
                            $wrong++;
                        }
                    }
                }
            }
        }
        $number = $correct / $i * 100;
        if (is_float($number) && floor($number) != $number){
            $ave = number_format($number, 2);
        }else{
            $ave = $number;
        }

        if ($ave <= 75) {
            $message = "<div id='failed' class='my-2'>
                                <h1 class='text-center fw-bold text-danger'>UNFORTUNATELY</h1>
                                <p class='text-center h3'>You did <strong class='text-danger'>NOT PASS</strong> this test &#128543</p>
                                
                                <div class='row my-5'>
                                    <div class='col'>
                                        <h1 class='text-center my-4 fw-bolder' >Percentage</h1>
                                        <h1 class='text-center my-4 fw-bolder text-danger' style='font-size: 70px'>" . $ave . "%</h1>
                                    </div>
                                    <div class='col'>
                                        <h1 class='text-center my-4 fw-bolder'>Score</h1>
                                        <h1 class='text-center my-4 fw-bolder text-danger' style='font-size: 70px'>$correct/$i</h1>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <a href = 'assesment.php' class='btn btn-lg px-5 my-1' type='button' style='background-color: #4084C3; color: #F7D695;'><i class='fa-solid fa-repeat'></i> Try Again</a>
                                <a href='endoresments.php' class='btn btn-lg px-5' type='button' style='background-color: #4084C3; color: #F7D695;'><i class='fa-solid fa-globe'></i> Sentence</a>
                            </center> ";
        } else {
            $message = "<div id='pass' class='mt-4'>
                                <h1 class='text-center fw-bold text-success'>CONGRATULATIONS!</h1>
                                <p class='text-center h3'>Well done! You've <strong class='text-success'>SUCCESSFULLY PASSED</strong> this test &#128522</p>
                                <canva id='confetti'></canva>
                                <div class='row my-5'>
                                    <div class='col'>
                                        <h1 class='text-center my-4 fw-bolder'>Percentage</h1>
                                        <h1 class='text-center my-4 fw-bolder text-success' style='font-size: 70px'>" . $ave . "%</h1>
                                    </div>
                                    <div class='col'>
                                        <h1 class='text-center my-4 fw-bolder'>Score</h1>
                                        <h1 class='text-center my-4 fw-bolder text-success' style='font-size: 70px'>$correct/$i</h1>
                                    </div>
                                </div>
                            </div>
                            <center>
                                <a href = 'assesment.php' class='btn btn-lg px-5 my-1' type='button' style='background-color: #4084C3; color: #F7D695;'><i class='fa-solid fa-repeat'></i> Try Again</a>
                                <a href='endoresments.php' class='btn btn-lg px-5' type='button' style='background-color: #4084C3; color: #F7D695;'><i class='fa-solid fa-globe'></i> Sentence</a>
                            </center>  
                            <script src='assets/js/congratulations.js' type='text/javascript'></script>";
        }
        echo $message;
    }
}
