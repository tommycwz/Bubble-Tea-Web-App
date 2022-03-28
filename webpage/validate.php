<?php

session_start();
include 'dbconnect.php';

$name = $_POST['username'];
$password = $_POST['password'];

$sel = "select * from userinfo where username = '$name' && password = '$password'";
$result = mysqli_query($con, $sel);
$num = mysqli_num_rows($result);


if($num == 1){ 
    $_SESSION['name'] = $name;
    $flag = FALSE;
    $_SESSION['flag'] = $flag;
    
    $role ="user";
    $data = mysqli_fetch_array($result);
    $role = $data[4];

    
    if($role == "admin"){
        header( "Location: admin/databaseUI.php");
    }
    else{
        header( "Location: menu.php");
    }   
}
else{
    echo '<script>alert("Incorrect Username or Password!")</script>'; 
    header( "Location: login.html");
}
?>