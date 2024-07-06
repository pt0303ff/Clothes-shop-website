<?php
include("product_data.php");

$Category = $_GET['a'];

$Title = array(
    "man" => "男裝 Man",
    "woman" => "女裝 Woman"
);

$Product_List['man'] = array(
    "Cloth" => array(1, 2, 3),
    "Top" => array(4, 5, 6),
    "Bottom" => array(7, 8, 9)
);

$Product_List['woman'] = array(
    "Cloth" => array(10, 11, 12),
    "Top" => array(13, 14, 15),
    "Bottom" => array(16, 17, 18)
);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="navh.css">
</head>
<body>
    <?php include("index_header.php"); ?>
    
    <h1 style="text-align: center;"><?php echo $Title[$Category]; ?></h1>
    <hr size="10px" color="#eeeeee"><br>
    <div>
        <div style="width: 50%;  margin:0px auto; text-align: center;">
        
        <?php 
            $temp = array_keys($Product_List[$Category]);

            for($i=0;$i<count($temp);$i++){
                echo "<h2 style=\"background-color: #eeeeee;width: 10%; font-size:30px;\">".$temp[$i]."</h2>";

                for($j=0;$j<count($Product_List[$Category][$temp[$i]]);$j++){
                    echo "
                    
                        <div style=\"display: inline-block; text-align: center;\">
                            <a href=\"product.php?id=".$Product_List[$Category][$temp[$i]][$j]."\">
                                <img src=\"img/".$Item[$Product_List[$Category][$temp[$i]][$j]][3]."\" width=\"200px\"><br>
                            </a>
                            <span style=\"font-size:30px; \">$".$Item[$Product_List[$Category][$temp[$i]][$j]][1]."</span>
                        </div>";
                }
            }


        ?>

</body>
</html>
