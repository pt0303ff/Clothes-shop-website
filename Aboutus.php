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
      p{
        font-size: 20px;
      }
    </style>
</head>
<body>
  
    <?php include("index_header.php"); ?>
    <div style="width: 60vw; margin-left: 20vw; font-weight: bold;">
        <p  >
          資圖3C 409000766沈  徹<br>
          資管3C 409630158魏廷宇<br>
          資管3C 409630570謝承諭<br>
          資管3C 409631537蕭允喆
        </p>
        <hr>

        <h1>網站介紹</h1>
        <p>
          在電子商務的潮流下，生活上無論食衣住行育樂都可以透過網購的管道達成，
          於是我們想做一個專門賣衣物的一個網站讓大家可以挑選自己喜歡的衣物。
        </p>
        <hr>

        <h1>網站地圖</h1>
        <img src="img/sitemap.png" style="border-radius: 15px;">
        <hr>

        <h1>程式運作流程</h1>
        <img src="img/codemap.png" style="border-radius: 15px;">
        <hr>
        
        <h1>頁面介紹</h1>
        <p>
          <span style="padding:10px; border-radius: 15px; background-color: #f2d0a4;">首頁</span><br><br>
          進入到首頁上面有一行目錄列表可以跳轉到各個頁面，下面可以選擇要進去男裝、女裝挑選。<br><br>
          <span style="padding:10px; border-radius: 15px; background-color: #f2d0a4;">About us</span><br><br>
          這個頁面裡面有放關於我們網站的網站地圖以及各個頁面的介紹。<br><br>
          <span style="padding:10px; border-radius: 15px; background-color: #f2d0a4;">Onlin Service</span><br><br>
          當你在選購衣物遇到困難時，可以進來這個頁面填寫表單給我們讓我們知道。<br><br>
          <span style="padding:10px; border-radius: 15px; background-color: #f2d0a4;">購物車</span><br><br>
          購物車頁面可以看到你目前選購商品的款式、尺寸、及數量。<br><br>
          <span style="padding:10px; border-radius: 15px; background-color: #f2d0a4;">男裝、女裝</span><br><br>
          裡面有我們所有的商品，其中又有分類外套、上衣、下身類，可以方便顧客尋找想要的款式。
        </p>
        <hr>

        <h1>期中進度</h1>
        <p>
          目前我們期中的進度是到大致頁面的架構都完成，
          及可以選填想要款式的尺寸數量送出後挑轉到購物車的頁面，
          但如果沒有選擇商品就去購物車的話目前會有bug，
          期中後的進度是修正細節的問題、設計出更美觀的網站。
        </p>
        <hr>

        <h1>期末進度</h1>
        <p>
          我們把加入購物車的功能補上，
          並且把我們的商品改成以陣列的方式做儲存與呼叫，
          這樣只要寫好一個模板修改裡面的變數呼叫不同的商品就好了，
          免去了如果一個地方要修改就要一次改十幾個頁面的困擾，
          購物車的方式使用了cookie來儲存，
          刪除購物車內的商品是直接刪掉cookie的方式來運作，
          整個做完後也學到了更多php的用法，
          也更清處實作網頁的流程架構。

        </p>
        <hr>
        
        <br><br>
    </div>
    

    
</body>
</html>
