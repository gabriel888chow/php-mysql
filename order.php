<?php include_once('header.php'); ?>

<!-- method 我兩個值"get(用於相對公開資料) & post(用於相對私隱資料)" -->
<!-- action="/functions.php?op=createOrder" 連接 function.php -->
<form action="/functions.php?op=createOrder" method="post">

  <label for="furn_name"> Booking Product Items </label>
  <input type="hidden" id="furn_id" name="furn_id" value="<?php echo $_GET['furn_id'];?>">
  <!-- $_GET 係Domain 後面會show 的變數; ['furn_id']-1] is index-1 搵位置-->
  <h2><?php echo $furns[$_GET['furn_id']-1]['name'];?></h2>

  <!-- label 用法是方便用戶的Cursor 可以點 text 自動輸入 -->
  <label for="name">Your Name:</label>
  <input type="text" id="name" name="name"><br/>

  <label for="email">Your Email:</label>
  <input type="email" id="email" name="email" require><br/>

  <label for="quantity">Order Quantity:</label>
  <input type="number" id="quantity" name="quantity" min="1" max="5" value="1">
  
  <br>
  <input class="buyBtn" type="submit" value="confirm">
</form> 

<?php include_once('footer.php'); ?>
    