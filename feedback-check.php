<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['usermail']);
    unset($_SESSION['usersubject']);
    unset($_SESSION['usertext']);
    unset($_SESSION['error_usermane']);
    unset($_SESSION['error_usermail']);
    unset($_SESSION['error_usertext']);
    unset($_SESSION['error_usersubject']);
    function redirection () {
        header("Location: feedback.php");
        exit;
    };
    function success () {
        header("Location: success.php");
        exit;
    };
    $username = htmlspecialchars(trim($_POST['username']));
    $usermail = htmlspecialchars(trim($_POST['usermail']));
    $usersubject = htmlspecialchars(trim($_POST['usersubject']));
    $usertext = htmlspecialchars(trim($_POST['usertext']));

    $_SESSION['username'] = $username;
    $_SESSION['usermail'] = $usermail;
    $_SESSION['usersubject'] = $usersubject;
    $_SESSION['usertext'] = $usertext;
    
    if(strlen(trim($username)) < 2){
        $_SESSION['error_usermail'] = "";
        $_SESSION['error_usersubject'] = "";
        $_SESSION['error_usertext'] = "";
        $_SESSION['error_username'] = "incorrect name!";
        redirection();
    }
    else if (!strpos($usermail, "@gmail.com") && !strpos($usermail, "@mail.ru")){
        $_SESSION['error_username'] = "";
        $_SESSION['error_usersubject'] = "";
        $_SESSION['error_usertext'] = "";
        $_SESSION['error_usermail'] = "incorrect email address!";
        redirection();
    }
    else if(strlen(trim($usersubject)) < 2){
        $_SESSION['error_username'] = "";
        $_SESSION['error_usermail'] = "";
        $_SESSION['error_usertext'] = "";
        $_SESSION['error_usersubject'] = "Enter a correct subject!";
        redirection();
    }
    else if(strlen(trim($usertext)) < 10){
        $_SESSION['error_username'] = "";
        $_SESSION['error_usersubject'] = "";
        $_SESSION['error_usermail'] = "";
        $_SESSION['error_usertext'] = "Too short text";
        redirection();
    }
    else {
        $_SESSION['error_usertext'] = "";
        $_SESSION['error_username'] = "";
        $_SESSION['error_usersubject'] = "";
        $_SESSION['error_usermail'] = "";
        $message = "I verified the golden let's go";
        $to = "thegolden9321@gmail.com";
        $from = "shampunzhumaysynbaskazhy@gmail.com";
        $theme = "Beat f'ckin bloodlust";
        $theme = "?=utf-8?B?".base64_encode($theme)."?=";
        $titles = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail($to, $theme, $message, $titles);
        success();
    }
    