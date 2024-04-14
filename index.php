<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloth Sort</title>
    <style>
        body {
            background-color: burlywood;
            margin: 0px;
        }

        ul {
            list-style: none;
            padding: 0;
            background-color: brown;
            overflow: hidden;
        }

        li {
            float: left;
            /* display: inline-block; */
            border-right: 1px solid black;
        }
        /* id就用# class就用. */
        #left {
            border-left: 1px solid black;
        }

        li a {
            display: block;
            padding: 20px;
            text-decoration: none;
            font-size: 30px;
            color: black;
        }

            li a:hover {
                background-color: gray;
                color: antiquewhite;
            }

        form {
            font-size: 30px;
            color: black;
        }

        .comment {
            width: 500px;
            height: 100px;
        }
    </style>
    
    <!-- 連結CSS外部檔案 -->
</head>
<body>
    <?php include("index_header.php"); ?>

    <div style="text-align: center;">
      <a href="product_category.php?a=man"><img src="betterlookman.jpg" width="400px"height="400px"></a>
      <a href="product_category.php?a=woman"><img src="betterlookgirl.jpg" width="400px" height="400px"></a>
    </div>
</body>
</html>