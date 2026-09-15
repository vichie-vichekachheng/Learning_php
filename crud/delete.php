<?php
include ("config.php");
$Product_id = $_GET['Product_id'];
mysqli_query($conn, "DELETE FROM add_new_product WHERE Product_id = $Product_id");
header("Location:index.php");
exit();
?>

