<?php
//cookie = info about a user stored in user's browser targeted ads, browsing preferences, and other non-sentitve datas.
// setcookie(name,value,expire)
// setcookie ("username", "Vicheka Chheng", time() + (86400 *2))
setcookie ("iphone_17_pro_max", 1999, time()+(86400));
setcookie("lap_top", 770, time() + (86400*2));
echo "<h3>Products:</h3>";
foreach($_COOKIE as $key=>$value){
    echo "$key : ". number_format((float)$value,2). "<br>";
}
?>