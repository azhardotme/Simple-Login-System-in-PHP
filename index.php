<?php
session_start();

if(isset($_SESSION['email'])){
    header('Location: admin.php');
}

if(isset($_POST['login'])){

    define('EMAIL','admin@gmail.com');
    define('PASSWORD','12345');

    $email = $_POST['email'];
    $password = $_POST['password'];     

    if($email == EMAIL){

        if($password == PASSWORD){
            $_SESSION['email'] = $email;

            header("Location: admin.php");
        }
        else{
            echo "Password not match!";
        }
    }
    else{
        echo "Email not match!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="login-box">

<form action="" method="POST">
    <input type="email" name="email" placeholder="Email" required=""><br>
    <input type="password" name="password" placeholder="Password" required=""><br>
    <input type="submit" name="login" value="Login">
</form>

</div>

</body>
</html>




