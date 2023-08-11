<?php
    include "DAO/checkDataDAO.php";
    $answerData = $_POST["userInputData"];
    $totalNum = $_POST["totalNum"];
    $data = $answerData;

    $action = new checkDataDAO();
    $action->checkDataFunctions($data, $totalNum);