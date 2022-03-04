<?php include_once('header.php'); ?>

<!-- method 我兩個值"get(用於相對公開資料) & post(用於相對私隱資料)" -->
<!-- action="/functions.php?op=createOrder" 連接 function.php -->
<div class="container">
  <div class="row order">

    <div class="col orderL d-flex align-items-center">
      <img src="../images/order.jpg" alt="furniture">
    </div>

    <div class="col orderR">
      <div class="row d-flex align-items-center">
        <form action="/functions.php?op=createOrder" method="post">
          <!-- <label for="furn_name"> Booking Product Items </label> -->
          <h1> Booking Product Items </h1>
          <input type="hidden" id="furn_id" name="furn_id" value="<?php echo $_GET['furn_id'];?>">
          

          
          <!-- $_GET 係Domain 後面會show 的變數; ['furn_id']-1] is index-1 搵位置-->
          <!-- <h3><?php echo $furns[$_GET['furn_id']-1]['name'];?></h3> -->
          
          
          
          <!-- label 用法是方便用戶的Cursor 可以點 text 自動輸入 -->
          <label for="name" class="d-flex justify-content-start">Your Name:</label>
          <input type="text" id="name" name="name" class="form-control" required><br/>

          <label for="email" class="d-flex justify-content-start">Your Email:</label>
          <input type="email" id="email" name="email" class="form-control" require><br/>

          <label for="quantity" class="d-flex justify-content-start">Order Quantity:</label>
          <input type="number" id="quantity" name="quantity" class="form-control" min="1" max="5" value="1">
          
          <br>
          <!-- <input class="buyBtn" type="submit" value="confirm"> -->
          <input type="submit" class="btn" value="Confirm" id="btn">
        </form> 
      </div>
    </div>

  </div>
</div>

<?php include_once('footer.php'); ?>
    