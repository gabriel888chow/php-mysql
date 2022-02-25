<!-- http://furniturestore.test/ -->
<?php 

// 把stock.php 的資料放入header, stock資料可以每頁用到
include_once 'stock.php'; 
include_once 'dbConnect.php';
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
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