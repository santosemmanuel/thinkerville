<?php

    include "DAO/display_questionsDAO.php";

    $item_num = "15";

    $action = new displayQuestionsDAO();
    $action->displayQuestions($item_num);