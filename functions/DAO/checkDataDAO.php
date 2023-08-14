<?php
<<<<<<< HEAD
    include "BaseDAO.php";
    class checkDataDAO extends BaseDAO {
        function checkDataFunctions($data, $totalNum){
            $user_answer = $data;
            $correct = floatval(0.0);
            $wrong = floatval(0.0);
            $iteration=1;
            $score=0;
            foreach($data as $key => $value){
                $i=$iteration++;
                foreach($value as $item){
                    $this->openConn();
                    $stmt = $this->dbh->prepare("SELECT * FROM tbl_answer WHERE answer_id = ?");
                    $stmt->bindParam(1, $item);
                    $stmt->execute();
                    $this->closeConn();
=======
include "BaseDAO.php";
class checkDataDAO extends BaseDAO
{
    function checkDataFunctions($data, $totalNum)
    {
        $user_answer = $data;
        $correct = "0";
        $wrong = "0";
        $iteration = 1;
        $score = 0;
        foreach ($data as $key => $value) {
            $i = $iteration++;
            foreach ($value as $item) {
                $this->openConn();
                $stmt = $this->dbh->prepare("SELECT * FROM tbl_answer WHERE answer_id = ?");
                $stmt->bindParam(1, $item);
                $stmt->execute();
                $this->closeConn();
>>>>>>> 2314f0cf67b55d07d66769d21810a7aedb57bdc2

                while ($row_answer_list = $stmt->fetch()) {
                    $this->openConn();
                    $stmt_question = $this->dbh->prepare("SELECT * FROM tbl_questions WHERE question_id = ?");
                    $stmt_question->bindParam(1, $row_answer_list[2]);
                    $stmt_question->execute();
                    $this->closeConn();
                    while ($row_question_list = $stmt_question->fetch()) {
                        $answer_string = $row_question_list[3];

                        if ($answer_string === $row_answer_list[1]) {
                            $correct++;
                        } else {
                            $wrong++;
                        }
                    }
                }
            }
<<<<<<< HEAD
            $ave = floatval(($correct/$i)*100.00);
            $message = "";
            if($ave <= 75){
                $message = "<div id='pass'>
=======
        }
        $ave = floatval($correct / $i * 100);
        $message = "";
        if ($ave <= 75) {
            $message = "<div id='failed'>
>>>>>>> 2314f0cf67b55d07d66769d21810a7aedb57bdc2
                                <h1 class='text-center fw-bold text-danger'>UNFORTUNATELY</h1>
                                <p class='text-center'>You've <strong class='text-danger'>FAILED</strong> the Quiz with an average score of</p>
                                <h1 class='text-center my-4 fw-bolder text-danger' style='font-size: 70px'>" . $ave . "%</h1>
                                <p class='text-center'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo officia facere dolorum? Illo rerum quibusdam
                                    natus dicta eius, sequi eum ipsa iusto officia vero molestias error cum, saepe dolore delectus.
                                </p>
                            </div>
                            <center>
<<<<<<< HEAD
                                <button class='btn btn-warning btn-lg rounded-5 text-white px-5' type='button'><i class='fa-regular fa-circle-play'></i> Retake Quiz</button>
                            </center>";
            }else{
                $message = "<div id='pass'>
=======
                                <a href='levelselection.php' class='btn btn-warning btn-lg rounded-5 text-white px-5' type='button'><i class='fa-regular fa-circle-play'></i> Retake Quiz</a>
                                <button class='btn btn-primary btn-lg rounded-5 text-white px-5' type='button'><i class='fa-solid fa-globe'></i> Visit Site</button>
                            </center>
                       
                            ";
        } else {
            $message = "<canvas id='confetti'></canvas>
                            <div id='pass'>
>>>>>>> 2314f0cf67b55d07d66769d21810a7aedb57bdc2
                                <h1 class='text-center fw-bold text-success'>CONGRATULATIONS!</h1>
                                <p class='text-center'>You've <strong class='text-success'>PASSED</strong> the Quiz with an average score of</p>
                                <h1 class='text-center my-4 fw-bolder text-success' style='font-size: 70px'>" . $ave . "%</h1>
                                <p class='text-center'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo officia facere dolorum? Illo rerum quibusdam
                                    natus dicta eius, sequi eum ipsa iusto officia vero molestias error cum, saepe dolore delectus.
                                </p>
                            </div>
<<<<<<< HEAD
                            <center>
                                <button class='btn btn-warning btn-lg rounded-5 text-white px-5' type='button'><i class='fa-regular fa-circle-play'></i> Return Home</button>
                            </center>";
            }
            echo $message;
=======
                        <center>
                            <button class='btn btn-primary btn-lg rounded-5 text-white px-5' type='button'><i class='fa-solid fa-globe'></i> Visit Site</button>
                        </center>
                        <script src='assets/js/congratulations.js' type='text/javascript'></script>";
>>>>>>> 2314f0cf67b55d07d66769d21810a7aedb57bdc2
        }
        echo $message;
    }
}
