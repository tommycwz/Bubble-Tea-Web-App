<?php

session_start();

$con = mysqli_connect("127.0.0.1", "root", "", "teaapp");

mysqli_select_db($con,'teaapp');

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
        header( "Refresh:0; url=http://18.191.207.218//CSC4610/webpage/admin/databaseUI.php", true, 303);
    }
    else{
        header( "Refresh:0; url=http://18.191.207.218//CSC4610/webpage/menu.php", true, 303);
    }   
}
else{
    echo '<script>alert("Incorrect Username or Password!")</script>'; 
    header( "Refresh:0; url=http://18.191.207.218/CSC4610/webpage/login.html", true, 303);
}
?>