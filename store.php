<?php include_once('header.php'); ?>
    <h1>Furniture Store</h1>
    
    <div class="flex-grid">
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
                    Price:$ '.$furn['price'].'<br> 
                    <a href="/order.php?furn_id='.$furn['furn_id'].'" class="buyBtn">Booking'.$furn['name'].'</a> <br>
                </div>';
            }

            // use foreach function to get data in stock.php (stock.php include_once in header.php)
            /* foreach($furns as $key => $furn)
            {
                // show the stock data
                // this <a> link is from order.php
                echo '<div class="col">
                    <img src="/images/'.$furn['image'].'"/>
                        <p>
                            Name: '.$furn['name'].'<br>
                            Price:$ '.$furn['price'].'<br> 
                                <a href="/order.php?furn_id='.$furn['furn_id'].'" class="buyBtn">Booking'.$furn['name'].'</a><br>
                        </p>
                </div>';
            } */
        ?>
    </div>

<?php include_once('footer.php'); ?>
    