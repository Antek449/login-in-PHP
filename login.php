<?php

require_once("db.php");

session_start();

if (!empty($_POST['login']) && !empty($_POST['password']))
{
    if ($_POST['login'] == USERNAME)
    {
        password_hash(PASSWORD, PASSWORD_BCRYPT);
        if (password_verify($_POST['password'], PASSWORD))
        {
            $_SESSION['user'] = htmlspecialchars($_POST['login']);
        }
    }
}

header('Location: index.php');