<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <?php if (empty($_SESSION['user'])) : ?>
    <form action="login.php" method="post">
    <input type="text" name="login" placeholder="username" />
    <br/>
    <input type="password" name="password" placeholder="password" />
    <br/>
    <button type="submit">log in!</button>
    </form>
    <?php else : ?>
        <p>Hi, <?=$_SESSION['user']?></p>
        <a href="logout.php">logout</a>
    <?php endif; ?>
</body>
</html>