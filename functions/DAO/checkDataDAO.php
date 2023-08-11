<?php
    include "BaseDAO.php";
    class checkDataDAO extends BaseDAO {
        function checkDataFunctions($data, $totalNum){
            $user_answer = $data;
            $correct="0";
            $wrong="0";
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

                    while($row_answer_list = $stmt->fetch()){
                        $this->openConn();
                        $stmt_question = $this->dbh->prepare("SELECT * FROM tbl_questions WHERE question_id = ?");
                        $stmt_question->bindParam(1, $row_answer_list[2]);
                        $stmt_question->execute();
                        $this->closeConn();
                        while($row_question_list = $stmt_question->fetch()){
                            $answer_string = $row_question_list[3];
                            
                            if ($answer_string === $row_answer_list[1]){
                                $correct++;
                            }else{
                                $wrong++;
                            }
                        }
                    }
                }
            }
            echo "Correct: ".$correct." Wrong: ".$wrong." Average: ".floatval($correct/$i*100)."%";
        }
    }