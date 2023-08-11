<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <h1>Отправка почты</h1>
    <?php
        $message = "I verified the golden let's go";
        $to = "thegolden9321@gmail.com";
        $from = "shampunzhumaysynbaskazhy@gmail.com";
        $theme = "Beat f'ckin bloodlust";
        $theme = "?=utf-8?B?".base64_encode($theme)."?=";
        $titles = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail($to, $theme, $message, $titles);
    ?>
</body>
</html>