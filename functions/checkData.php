<?php
    include "DAO/checkDataDAO.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $answerData = $_POST["userInputData"];
        $totalNum = 5;
        print_r($_POST);
    }else{
        echo "invalid request";
    }
    $action = new checkDataDAO();
    $action->checkDataFunctions($answerData,$totalNum);