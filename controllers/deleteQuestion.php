<?php
session_start();

require_once '../inc/bootstrap.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];

    if (Question::delete($id))
    {
        header('Location: ../controllers/browseQuestion.php');

    } else {
        $errorDelete = "Sorry ;'( We can't delete this answer. Try later !";
    }
}

require_once '../resources/views/deleteAnswer.php';