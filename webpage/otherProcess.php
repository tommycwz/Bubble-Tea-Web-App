<?php
session_start();

include 'dbconnect.php';

$flag = $_SESSION['flag'];

if($flag == "delivery" || $flag == "menu" || $flag == "databaseUI"){
    session_destroy();
    header( "Location: login.html");
}
else if($flag == "cart"){
    $drinkID = $_POST['drinkID'];
    $rmv = "delete from cart where drinkID = '$drinkID'";
    mysqli_query($con,$rmv);
    header( "Location: cart.php");
}

?>