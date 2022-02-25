<?php
include_once 'dbConnect.php';

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

    global $dbConnection;
    
    // save the order
    $sql = "INSERT INTO `furniture_store`.`order` (
        `client_name`, 
        `client_email`,
         `quantity`, 
         `order_time`, 
         `furn_id`
         ) VALUES (
         '{$_POST['name']}', 
         '{$_POST['email']}',
         {$_POST['quantity']}, 
         '".date('Y-m-d H:i:s')."',
         {$_POST['furn_id']}
         )";


    if(mysqli_query($dbConnection, $sql))
    {
        //你可以在這裡減去gem table的remaining存貨

        // go to order-complated.php
        header("Location: /order-completed.php");
    }
    else {
        // add the order page
    }        
    /* 
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
    */
}

// this function is use on login.php
function checkLogin($email, $password)
{
    global $dbConnection;

    $staffQ = mysqli_query($dbConnection, "SELECT * FROM `staff` WHERE `email`='".$email."'");

    $staff = mysqli_fetch_assoc($staffQ);
    // $staffEmail     =   "chow@gmail.com";
    // $staffPassword  =   "123";

    // check staff 入個login格式有冇錯
    // if($email == $staffEmail && $staffPassword == $password)
    // password_verify is a function to match the encrypted password
    if($email == $staff['email'] && password_verify($password,$staff['password'],))
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