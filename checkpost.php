
<?php
    $name = $_POST["username"];
    $pass = $_POST["userpass"];
    $email = $_POST["usermail"];
    $info = $_POST["userinfo"];
    if(trim($name) == "" || strlen(trim($name)) <= 1){
        echo "Некорректное имя";
    }
    else if(strlen(trim($pass)) < 6){
        echo "В пароле должно быть минимум 6 символов";
    }
    else if(!strpos($email, "@gmail.com") && !strpos($email, "@mail.ru")){
        echo "Неправильный адрес электронной почты";
    }
    else if(trim($info) == "О вас" || trim($info) == ""){
        echo "Введите информацию о себе";
    }
    else{
        echo "<h1>Все круто<h1>";
    }
?>
