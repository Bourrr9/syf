
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
require_once "connect.php";

$login = $_POST['login'];

$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE login ='$login'";

$query = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<a class = "regg">
<?php
if ($row=$query->fetch_assoc()){
    session_start();
    echo "Успешно авторизованы";
    $_SESSION['login']=$login;
    $_SESSION['password']=$password;
}
?>
</a>