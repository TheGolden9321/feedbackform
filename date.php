<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <h1>Узнайте, какой день будет через определенное количество секунд</h1>
    <form action="date.php" method="post" >
        <input placeholder="Количество секунд" name="time" type="text" class="seconds">
    </form>
    <?php
        $seconds = $_POST["time"];
        echo date('d/m/o', strtotime("+$seconds Second"));
    ?>
</body>
</html>