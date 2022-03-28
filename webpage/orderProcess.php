<?php
session_start();

include 'dbconnect.php';

$bevID = $_POST['bev'];
$sugar = $_POST['sugar-value'];
$ice = $_POST['ice-value'];
$name = $_SESSION['name'];

$drinkID = "B-" . rand(10000,99999);
$num = 1;
while($num == 1){
    $sel = "select * from cart where drinkId = '$drinkID' ";
    $result = mysqli_query($con, $sel);
    $num = mysqli_num_rows($result);
    $orderID = "B-" . rand(10000,99999);
}

$reg= " insert into cart(drinkID, username, bevID, sugar, ice) values ('$drinkID','$name','$bevID','$sugar','$ice')";
mysqli_query($con,$reg);

$flag = "orderprocess";
$_SESSION['flag'] = $flag;
header( "Location: menu.php", true, 303);
?>
<html>
<style>
body {
    font-family: Arial, Helvetica, sans-serif; 
    background-image: url("../image/bgi.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}  
    
    
</style>
    <body>
    </body>
</html>