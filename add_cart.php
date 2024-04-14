<?php

include("product_data.php");

print_r($_POST);


// Loading Cookie
if($_COOKIE['Cart_Data']){
    $Cart_Json = $_COOKIE['Cart_Data'];
    $Cart = json_decode($Cart_Json);
}


$Cart[] = array($_POST['Item_ID'], $_POST['Size'], $_POST['Amount']);

$Cart_Json = json_encode($Cart);


setcookie("Cart_Data", $Cart_Json, time()+3600);




header("location: /第5組賣衣服網站/product_category.php?a=".$Item[$_POST['Item_ID']][4]);



?>