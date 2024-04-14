<?php

$Item_ID = $_GET['id'];

include("product_data.php");
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

    <div style="text-align: center; width: 60%; margin: auto; padding: 20px; border: 1px solid #000;">
        <h3 style="font-size: 45px;"><?php echo $Item[$Item_ID][0]; ?></h3>
        <p style="font-size: 30px;"><?php echo $Item[$Item_ID][2]; ?></p>
        <img src="<?php echo $Item[$Item_ID][3]; ?>" style="width: 500px">
        <p style="font-size: 50px;"><b>Price: <?php echo $Item[$Item_ID][1]; ?></b></p>

        <hr>

        <form method="POST" action="add_cart.php">

            <input type="hidden" name="Item_ID" value="<?php echo $Item_ID; ?>">
            <p><b>SIZE:</b></p>
            <input type="radio" id="Size_S" name="Size" value="S" required><label for="Size_S">Small</label>
            <input type="radio" id="Size_M" name="Size" value="M" required><label for="Size_M">Middle</label>
            <input type="radio" id="Size_L" name="Size" value="L" required><label for="Size_L">Large</label>
            <input type="radio" id="Size_XL" name="Size" value="XL" required><label for="Size_XL">Extra Large</label>
            <br>
            <p><b>Amount:</b></p>
            <select name="Amount" style="font-size: 30px;">
                <?php 
                    for($i=1;$i<=10;$i++){
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
            <br>
            <br>
            <button type="submit" style="font-size:20px; padding: 10px; border: 2px solid blue; border-radius: 5px; background-color: #fff;"><b>Add to Cart</b></button>

        </form>

    </div>
    <br><br>
</body>
</html>