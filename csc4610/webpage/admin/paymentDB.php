<?php
include '../dbconnect.php';

$sel = "select * from payment order by date, time";
$result = mysqli_query($con, $sel);
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bubble Tea Shoppe -paymentDB</title>
        <link rel="stylesheet" href="../../css/databaseCSS.php"> 
    </head>
    
    <body>
        <div id="back">
            <button type="button" class="backbtn" onclick="location.href='../admin/databaseUI.php';">BACK </button>
        </div>
            <?php
                echo"<div class='center'>";
                echo"<div class='grid-item header'><hr><h1>PAYMENT MADE</h1><hr></div>";
                echo"<table class='tabular'>";
                echo"<tr> <th>ORDERID</th><th>USERNAME</th> <th>CARD NAME</th> <th>CARD NUMBER</th> <th>CVV</th> <th>TIME</th> <th>DATE</th> <th>AMOUNT PAID</th></tr>";
                while($data = mysqli_fetch_array($result)){
                    $orderID = $data[0];
                    $username = $data[1];
                    $cardName = $data[2];
                    $cardNum = $data[3];
                    $cvv = $data[4];
                    $time = $data[5];
                    $date = $data[6];
                    $paid = $data[7];

                    echo"<tr>";
                    echo"<td><b>{$orderID}</b></td>";
                    echo"<td><b>{$username}</b></td>";
                    echo"<td><b>{$cardName}</b></td>";
                    echo"<td><b>{$cardNum}</b></td>";
                    echo"<td><b>{$cvv}</b></td>";
                    echo"<td><b>{$time}</b></td>"; 
                    echo"<td><b>{$date}</b></td>"; 
                    echo"<td><b>{$paid}</b></td>"; 
                    echo"</tr>";            
                }
                echo "</table>";
                echo"<div>";
          ?>
    </body>
</html>