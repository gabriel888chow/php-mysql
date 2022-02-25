<?php
// op is operation 操作
$op = 'none';
if(isset($_GET['op'])) $op = $_GET['op'];

if($op=='createOrder')
{
    createOrder();
}
if($op == 'checkLogin')
{
    // this data is from login.php
    checkLogin($_POST['email'],$_POST['password']);
}
if($op == 'logout')
{
    logout();
}

// check it is staff
function isStaff() {
    return isset($_SESSION['email']);
}

// this function is use on order.php
function createOrder(){
    // save the order
    // fopen (file open); a = append 意思可以係後面寫資料, or die 係資料唔正確出 "Can not open"
    $myfile = fopen("data.csv", "a") or die("Can not open");
    // "\r\n" is 換行; date('Y-m-d H:i:s') = (year-month-day hour:minute:second)
    $data = $_POST['furn_id'].','.$_POST['name'].','.$_POST['email'].','.$_POST['quantity'].','.date('Y-m-d H:i:s')."\r\n";
    // fwrite (file write)
    fwrite($myfile, $data);
    // fclose (file close)
    fclose($myfile);

    // 轉變頁面
    header("Location: /order-completed.php");
}

// this function is use on login.php
function checkLogin($email, $password)
{
    
    $staffEmail     =   "hello@leunghoyin.hk";
    $staffPassword  =   "password123";

    // check 個格式有冇錯
    if($email == $staffEmail && $staffPassword == $password)
    {
        //check it is the staff SESSION
        session_start();
        $_SESSION['email'] = $email;

        header("Location: /allOrders.php");
    }
    else
    {
        header("Location: /login.php");
    }
} 

// logout function
function logout() 
{
    session_start();
    // 把全部session del曬
    session_destroy();
    // 之後去返主頁
    header("Location: /");
}