<?php
include '../dbconnect.php';

$sel = "select * from userinfo order by role, username";
$result = mysqli_query($con, $sel);
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bubble Tea Shoppe - userDB</title>
        <link rel="stylesheet" href="../../css/databaseCSS.php"> 
    </head>
    
    <body>
        <div id="back">
            <button type="button" class="backbtn" onclick="location.href='../admin/databaseUI.php';">BACK </button>
        </div>
        
        <?php
        echo"<div class='center'>";
        echo"<div class='grid-item header'><hr><h1>USER RECORDS</h1><hr></div>";
        echo"<table class='tabular'>";
        echo"<tr> <th>USERNAME</th> <th>PASSWORD</th> <th>EMAIL</th> <th>ADDRESS</th> <th>ROLE</th></tr>";
        while($data = mysqli_fetch_array($result)){
            $username = $data[0];
            $password = $data[1];
            $email = $data[2];
            $address = $data[3];
            $role = $data[4];
            
            echo"<tr>";
            echo"<td class='0'><b>{$username}</b></td>";
            echo"<td class='1'><b>{$password}</b></td>";
            echo"<td class='2'><b>{$email}</b></td>";
            echo"<td class='3'><b>{$address}</b></td>";
			echo"<td class='4'><b>{$role}</b></td>"; 
            echo"</tr>";            
        }
        echo "</table>";
        echo"<div>";
          ?>
    </body>
</html>