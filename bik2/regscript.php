
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


<?php
require_once 'connect.php';
$login = $_POST["login"];
$password = $_POST['password'];
$sql = "INSERT INTO users (login, password) VALUES ('$login','$password')";
$query = $conn->query($sql); 