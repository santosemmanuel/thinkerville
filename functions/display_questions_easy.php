<?php

    include "DAO/display_questionsDAO.php";

    $item_num = "5";

    $action = new displayQuestionsDAO();
    $action->displayQuestions($item_num);