<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "wqe.css">

    <title>Document</title>
</head>
<img src= "rrrr.png" class = "paint">
<body>
    
</body>
</html>
<a class = "reg">
<?php
session_start();
if (!isset($_SESSION['login'])){
    die('Авторизуйтесь');
}
?>
</a>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "wqe.css">
    <title>Document</title>
</head>

<body>

<div class="prof">
<?php
   echo 'логин:' . $_SESSION['login'];
    echo '<br>';
    echo 'пароль:'. $_SESSION['password'];

?>
</div>
</body>
</html>