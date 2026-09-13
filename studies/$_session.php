<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="session.php" method="post">
        <label for="">Username : </label> 
        <input type="text" name="username" ><br><br>
        <label for="">Password : </label>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
session_start();
if(isset($_POST['login'])){
    if (!empty($_POST['username']) && !empty($_POST['password'])){
        $_SESSION['username']= $_POST['username'];
        $_SESSION['password']= $_POST['password'];
        echo "<br>";
        echo "Username : ".  $_SESSION['username']. "<br>";
        echo "Password : ". $_SESSION['password']. "<br>";
         header("Location:home.php");
    }
    else{
        echo "Password or username is missing.";
    }
   
    }
?>