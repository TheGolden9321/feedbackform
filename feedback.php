<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
        session_start();
        $title = "Форма обратной связи"
    ?>
    <div class="wrapper">
        <h1><?=$title?></h1>
        <form action="feedback-check.php" method="post" class="feedback">
            <input type="text" value="<?=$_SESSION['username']?>" class="feedback__username" placeholder="Name" name="username">
            <span class="feedback__error"><?=$_SESSION['error_username']?></span>
            <input type="email" value="<?=$_SESSION['usermail']?>" class="feedback__email" placeholder="Email" name="usermail">
            <span class="feedback__error"><?=$_SESSION['error_usermail']?></span>
            <input type="text" value="<?=$_SESSION['usersubject']?>" class="feedback__subject" placeholder="Subject" name="usersubject">
            <span class="feedback__error"><?=$_SESSION['error_usersubject']?></span>
            <textarea type="text" class="feedback__text" placeholder="Main text" name="usertext"><?=$_SESSION['usertext']?></textarea>
            <span class="feedback__error"><?=$_SESSION['error_usertext']?></span>
            <button type="submit" class="feedback__submit">Send form</button>
        </form>
    </div>
</body>
</html>