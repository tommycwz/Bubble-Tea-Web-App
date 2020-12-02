<?php
$con = mysqli_connect("127.0.0.1", "root", "", "teaapp") or die("Unable to Connect to '$dbhost'");
mysqli_select_db($con,'teaapp') or die("Could not open the db '$dbname'");

$sel = "select * from purchase_history, menu, payment where purchase_history.bevID = menu.bevID";
$result = mysqli_query($con, $sel);
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bubble Tea Shoppe - orderDB</title>
        <link rel="stylesheet" href="../../css/databaseCSS.php"> 
    </head>
    
    <body>
        <div class="float-left" id="back">
            <button type="button" class="backbtn" onclick="location.href='../admin/databaseUI.php';">BACK </button>
        </div>
            <?php
                echo"<div class='center'>";
                echo"<div class='grid-item header'><hr><h1>PAYMENT MADE</h1><hr></div>";
                echo"<table class='tabular'>";
                echo"<tr> <th>ORDERID</th><th>BEV ID</th> <th>BEV NAME</th> <th>USERNAME</th> <th>TIME</th> <th>DATE</th></tr>";
        
                while($data = mysqli_fetch_array($result)){
                    $orderID = $data[0];
                    $bevID = $data[1];
                    $bevName = $data[4];
                    $username = $data[2];
                    $time = $data[13];
                    $date = $data[14];

                    echo"<tr>";
                    echo"<td><b>{$orderID}</b></td>";
                    echo"<td><b>{$bevID}</b></td>";
                    echo"<td><b>{$bevName}</b></td>";
                    echo"<td><b>{$username}</b></td>";
                    echo"<td><b>{$time}</b></td>"; 
                    echo"<td><b>{$date}</b></td>"; 
                    echo"</tr>";            
                }
                echo "</table>";
                echo"</div>";
          ?>
    </body>
</html>