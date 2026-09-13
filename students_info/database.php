<?php
$db_server = "localhost";
$db_user="root";
$db_name="test";
$db_pass="";
$conn="";
try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
} catch (mysqli_mysql_exception){
    echo "Could not connect to this server.";
}
?>