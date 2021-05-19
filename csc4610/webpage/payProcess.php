<?php

session_start();
$name = $_SESSION['name'];
$ftotal = $_SESSION['ftotal'];

include 'dbconnect.php';

$cardName = $_POST['cardName'];
$cardNum = $_POST['cardNum'];
$cvv = $_POST['cvv'];

$cardCorrect = true;

if((strlen($cardNum)!= 12) || !(is_numeric($cardNum))){
    echo '<script>alert("Invalid Card Number!\nA valid Card Number should be a 12-digit combination!")</script>'; 
    $cardCorrect = false;
}

if((strlen($cvv)!= 3) || !(is_numeric($cvv))){
    echo '<script>alert("Invalid CVV!\nA valid CVV should be a 3-digit combination!")</script>'; 
    $cardCorrect = false;
}

if(!$cardCorrect){
    $_SESSION['cardProblem'] = true;
    header( "Location: checkout.php");
}

$orderID = "O-" . rand(10000,99999);
$num = 1;
while($num == 1){
    $sel = "select * from payment where orderid = '$orderID' ";
    $result = mysqli_query($con, $sel);
    $num = mysqli_num_rows($result);
    $orderID = "O-" . rand(10000,99999);
}

date_default_timezone_set('America/Chicago');
$date = date("Y-m-d");
$time = date("h:i:sa");



$reg = " insert into payment(orderID, username, cardName, cardNum, cvv, time, date, paid) values ('$orderID','$name','$cardName','$cardNum','$cvv','$time','$date','$ftotal')";
mysqli_query($con,$reg);

$sel = "select * from cart, menu where username = '$name' && menu.bevID = cart.bevID";
$result = mysqli_query($con, $sel);

while($data = mysqli_fetch_array($result)){
    $bevID = $data[2];
    $reg2 = " insert into purchase_history(orderID, bevID, username) values ('$orderID','$bevID','$name')";
    mysqli_query($con,$reg2);
            
}   

$rmv = "delete from cart where username = '$name'";
mysqli_query($con,$rmv);
echo '<script>alert("Payment Success!\n")</script>'; 
header( "Location: delivery.php");