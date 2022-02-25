<?php include('header.php'); ?>
    <h1>Furniture Store</h1>
    
    <div class="flex-grid">
        <?php 
            // show the stock
            // use foreach function to get data in stock.php (stock.php include in header.php)
            foreach($furns as $key => $furn)
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
            }
        ?>
    </div>

<?php include('footer.php'); ?>
    