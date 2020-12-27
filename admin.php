<?php
session_start();

if(!isset($_SESSION['email'])){
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1 style="text-align:center">Welcome To Admin Panel</h1>
    <p><?php echo $_SESSION['email']?></p>
    <a href="logout.php">Logout</a>
    
</body>
</html>