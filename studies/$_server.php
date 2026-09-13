<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <label for="">Email : </label>
        <input type="email" placeholder="Enter an email.." name='email' >
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
//Server is using PHP_SELF and REQUEST_METHOD($_POST or $_GET)
// $_SERVER = sgb that contains headers, paths, and script locations.
//the entries in this array are created by the web server.
if($_SERVER['REQUEST_METHOD' == "POST"]){

}
?>