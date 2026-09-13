<?php
$password ="chhengleaphea";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo "Password : ". $hash;
?>