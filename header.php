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

    <!-- css link -->
    <link rel="stylesheet" href="/css/css.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Lobster&display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    <nav>
        <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about.php">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/store.php">Store</a>
        </li>
            <li class="navItem">
                
                <?php
                    if ($_SESSION)
                    {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="/allOrders.php">All Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/functions.php?op=logout">Logout</a>
                        </li>';
                    }
                    else {
                        echo '
                        <li class="nav-item">
                            <a class="nav-link" href="/login.php">Staff Login</a>
                        </li>';
                    }
                ?>
                
            </li>
        </ul>
    </nav> 
