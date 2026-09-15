<?php
$conn = mysqli_connect('localhost', 'root', "", "test");
if($conn){
   
}
else{
    echo "Error : ". mysqli_error($conn);
}
?>