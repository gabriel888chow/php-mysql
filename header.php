<!-- http://furniturestore.test/ -->
<?php 

// 把stock.php 的資料放入header, stock資料可以每頁用到
include 'stock.php'; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Store</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav>
        <ul class="clientMenu">
            <li><a href="/">Home Page<a></li>
            <li><a href="/about.php">About Page<a></li>
        </ul>   
        <ul class="clientMenu">
            <?php
            if ($_SESSION)
            {
                echo '
                <li><a href="/allOrders.php">All Orders</a></li>
                <li><a href="/functions.php?op=logout">Logout</a></li>';
            }
            else {
                echo '
                <li><a href="/login.php">Staff Login</a></li>';
            }

            ?>
        </ul>
    </nav>    