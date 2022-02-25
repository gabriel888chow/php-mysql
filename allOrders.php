<?php 
include('header.php');
include ('functions.php');

// if the user not login can not check the order
if(!isStaff()) header("Location: /");
?>


<h1>Orders</h1>
<!-- show the user login email -->
<h2>Your login email is <?php echo $_SESSION['email'];?></h2>

<?php
// get customer order data
// 把'data.csv'的data 儲入 $orderData
$orderData = file_get_contents('data.csv');
// str_getcsv 分唔同order
$orders = str_getcsv($orderData, "\r\n");

// show all order
foreach($orders as $order)
{
    // 把每個"," 分行
    $singleOrder = explode(",", $order);

    echo '<div class="order"><p>';
    echo 'Customer Name : '.$singleOrder[1].'<br/>';
    echo 'Customer Email : '.$singleOrder[2].'<br/>';
    echo 'The Orders : '.$furns[$singleOrder[0]-1]['name'].' X '.$singleOrder[3].' piece <br/>';
    echo 'Order Time : '.$singleOrder[4].'<br/>';
    echo '</p></div>';
}
?>


<?php include('footer.php'); ?>
