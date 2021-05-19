<?php
include '../dbconnect.php';

$sel = "select * from menu order by bevID";
$result = mysqli_query($con, $sel);
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bubble Tea Shoppe - menuDB</title>
        <link rel="stylesheet" href="../../css/databaseCSS.php"> 
    </head>
    
    <body>
        <div id="back">
            <button type="button" class="backbtn" onclick="location.href='../admin/databaseUI.php';">BACK </button>
        </div>
        <?php
        echo"<div class='center'>";
        echo"<div class='grid-item header'><hr><h1>MENU RECORDS</h1><hr></div>";
        echo"<table class='tabular'>";
        echo"<tr> <th>PICTURE</th> <th>ID</th> <th>NAME</th> <th>IMAGE CODE</th> <th>TYPE</th> <th>PRICE</th></tr>";
        while($data = mysqli_fetch_array($result)){
            $bevID = $data[0];
            $bevName = $data[1];
            $bevImage = $data[2];
            $bevType = $data[3];
            $price = $data[4];
            
            echo"<tr>";
            echo"<td><img src='../../image/$bevType/$bevImage.png' alt='$bevImage' class='$$bevImage' width='150' height='175'></td>";
            echo"<td><b>{$bevID}</b></td>";
            echo"<td><b>{$bevName}</b></td>";
            echo"<td><b>{$bevImage}</b></td>";
            echo"<td><b>{$bevType}</b></td>";
			echo"<td><b>USD {$price}</b></td>"; 
            echo"</tr>";            
        }
        echo "</table>";
        echo"<div>";
          ?>
    </body>
</html>