<?php include_once('header.php'); ?>
    <div class="container store">
        <h1>Furniture Store</h1>
        
            
            <?php
             $furnQ = mysqli_query($dbConnection, "SELECT * FROM `furns`");
             while ($furn = mysqli_fetch_assoc($furnQ)) {
               echo '
               <hr class="bar"></hr>
               <div class="row store-card">
                    <div class="col storeL">
                        <img src="/images/'.$furn['image'].'" class="store-img"/>
                    </div>

                    <div class="col storeR d-flex align-items-center">

                        <p>
                            Name: '.$furn['name'].'<br>
                            Width: '.$furn['width'].'cm<br>
                            Height: '.$furn['height'].'cm<br>
                            Depht: '.$furn['depth'].'cm<br>
                            Price:$ '.$furn['price'].'<br> 
                            <a href="/order.php?furn_id='.$furn['furn_id'].'" class="buyBtn">Order '.$furn['name'].'</a> <br>
                        </p> 

                    </div>
                </div>
                ';
              }
            ?>
        
        
        
    </div>

    <div class="flex-grid-mobile">
        <?php 
            // show the stock
            // 把 dbConnect.php 入面的($dbConnection)拎黎用
            // `furns` is in mysql table
            // furnQ 袋住左 mysql 入面的 furns 資料
            $furnQ = mysqli_query($dbConnection, "SELECT * FROM `furns`");

            // 把 mysql frun 的 data show 出黎
            while ($furn = mysqli_fetch_assoc($furnQ)) {
                echo '<div class="col">
                <img src="/images/'.$furn['image'].'"/>
                <p>
                    Name: '.$furn['name'].'<br>
                    Width: '.$furn['width'].'cm<br>
                    Height: '.$furn['height'].'cm<br>
                    Depht: '.$furn['depht'].'cm<br>
                    Price:$ '.$furn['price'].'<br> 
                    <a href="/order.php?furn_id='.$furn['furn_id'].'" class="buyBtn">Order '.$furn['name'].'</a> <br>
                </div>';
            }
        ?>
    </div>

<?php include_once('footer.php'); ?>
    