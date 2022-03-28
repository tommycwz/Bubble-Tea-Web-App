<?php

session_start();
include 'dbconnect.php';

$name = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];



$sel = "select * from userinfo where username = '$name' ";
$result = mysqli_query($con, $sel);
$num = mysqli_num_rows($result);

if($num == 1){
    echo '<script>alert("Username Already Taken")</script>'; 
    header("Location: signup.html");

}
else{
    $reg= " insert into userinfo(username, password, email, address, role) values ('$name','$password','$email','$address','user')";
    $_SESSION['name'] = $name;
    mysqli_query($con,$reg); 

    echo '<script>alert("Sign Up Success\n")</script>'; 
    header( "Location: login.html");
}

?>