<?php 
  error_reporting(0);
  include("product_data.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothsort</title>
    <link rel="stylesheet" href="navh.css">
    <!-- 連結CSS外部檔案 -->
    <style>
    table {
      border-collapse: collapse;
    }

    table, th, td {
      border: 1px solid #000; /* Default border color */
    }
    
    /* Set line color */
    table {
      border-color: red; /* Replace "red" with the desired color */
    }
  </style>
</head>
<body>
  <?php include("index_header.php"); ?>

  <?php



  $Cart_Data = json_decode($_COOKIE['Cart_Data']);




  echo "<div style='width: 60%; border: 1px solid #333; margin: auto;'>";

  echo "<table style='width: 100%; border-color: gray;'>
    <tr>
      <th>商品名稱</th>
      <th>商品尺寸</th>
      <th>Price</th>
      <th></th>
      <th>數量</th>
      <th>合計</th>
    </tr>

  ";

  for($i=0;$i<count($Cart_Data);$i++){
    echo "
      <tr style='background-color:#e9d0af;'>
        <td>".$Item[$Cart_Data[$i][0]][0]."</td>
        <td>".$Cart_Data[$i][1]."</td>
        <td>$".$Item[$Cart_Data[$i][0]][1]."</td>
        <td><img src='".$Item[$Cart_Data[$i][0]][3]."' width='100px'></td>
        <td>".$Cart_Data[$i][2]."</td>
        <td>$".($Item[$Cart_Data[$i][0]][1] * $Cart_Data[$i][2])."</td>
      </tr>

    ";

    $Amount_Total += ($Item[$Cart_Data[$i][0]][1] * $Cart_Data[$i][2]);
    

  } 


  echo "
    <tr style='background-color:#e9d0af;'>
      <td colspan='4'></td>
      <td>總計</td>
      <td><b>$".$Amount_Total."</b></td>
    </tr>
  ";

  echo "</table>";
  echo "
    <form method='POST' action='cart_remove.php' style='text-align: center;'>
      <button type='button' style='padding: 5px; font-size: 20px;'>結帳 Check out</button>
      <button type='submit' style='padding: 5px; font-size: 20px;'>清空購物車</button>
    </form>
  ";
  echo "</div>";

  ?>
    
</body>
</html>