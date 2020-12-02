<?php

session_start();

$con = mysqli_connect("127.0.0.1", "root", "", "teaapp") or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con,'teaapp') or die("Could not open the db '$dbname'");

$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];



$sel = "select * from userinfo where username = '$name' ";
$result = mysqli_query($con, $sel);
$num = mysqli_num_rows($result);

if($num == 1){
    echo '<script>alert("Username Already Taken")</script>'; 
    header( "Refresh:0; url=http://18.191.207.218/csc4610/webpage/signup.html", true, 303);

}
else{
    $reg= " insert into userinfo(username, password, email, address) values ('$name','$password','$email','$address')";
    $_SESSION['name'] = $name;
    mysqli_query($con,$reg); 

    echo '<script>alert("Sign Up Success\n")</script>'; 
    header( "Refresh:0; url=http://18.191.207.218/csc4610/webpage/login.html", true, 303);
}

?>