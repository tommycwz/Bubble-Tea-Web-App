<?php
session_start();
$flag = $_SESSION['flag'];
$con = mysqli_connect("127.0.0.1", "root", "", "teaapp") or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con,'teaapp') or die("Could not open the db '$dbname'");

if($flag == "delivery" || $flag == "menu"){
    session_destroy();
    header( "Refresh:0; url=http://18.191.207.218/CSC4610/webpage/login.html", true, 303);
}
else if($flag == "cart"){
    $drinkID = $_POST['drinkID'];
    $rmv = "delete from cart where drinkID = '$drinkID'";
    mysqli_query($con,$rmv);
    header( "Refresh:0; url=http://18.191.207.218/CSC4610/webpage/cart.php", true, 303);
}

?>