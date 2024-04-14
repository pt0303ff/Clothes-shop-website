<?php

setcookie("Cart_Data", $Cart_Json, time()-3600);

header("location: /第5組賣衣服網站/cart.php");
?>