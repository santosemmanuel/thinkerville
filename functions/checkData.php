<?php
include "DAO/checkDataDAO.php";

if (isset($_POST["userInputData"]) && is_array($_POST["userInputData"])) {
    $answerData = $_POST["userInputData"];
}

$action = new checkDataDAO();
$action->checkDataFunctions($answerData);
