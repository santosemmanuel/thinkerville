<?php

    include "DAO/display_questionsDAO.php";

    $item_num = "5";
    $item_level = "Easy";

    $action = new displayQuestionsDAO();
    $action->displayQuestions($item_num, $item_level);