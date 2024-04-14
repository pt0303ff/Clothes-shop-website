<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothsort</title>
    <link rel="stylesheet" href="navh.css">
    <!-- 連結CSS外部檔案 -->
</head>
<body>
  <?php include("index_header.php"); ?>
  <h1 style="text-align: center;">Online Service Survey</h1>
  
  <form method="post" id="survey">
    <div style="text-align: center;">Name:<input style="font-size: 20px;" type="text" name="name" placeholder="enter your name here" required></div></br>
    <div style="text-align: center;">Phone:<input style="font-size: 20px;" type="text" name="nm" placeholder="enter your phone number" required></div></br>
    <div style="text-align: center;">
      What is your Problem?
    </br>
      <select style="font-size: 20px;" name="Question"></br>
        <option value="Price">Price</option>
        <option value="Quality issue">Quality issue</option>
        <option value="Exchange of Cloth">Exchange of Cloth</option>
        <option value="Not mentioned above">Not mentioned above</option>
      </select>
      
    </div>
  </br>
  <div style="text-align: center;">Other Questions</div>
  <div style="text-align: center;">
    <textarea class="comment"style="font-size: 20px;" name="Other" cols="30" rows="10" placeholder="Tell us more About us your question"></textarea>
  </div>  
  <div style="text-align: center;">
    <input style="font-size: 20px;" type="submit" value="Submit">
  </div>
  
  </form>
</body>
</html>