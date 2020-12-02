<?php
session_start();
$flag = "databaseUI";
$_SESSION['flag'] = $flag;
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bubble Tea Shoppe - Admin Page</title>
    <link rel="stylesheet" href="../../css/databaseCSS.php"> 
</head>

    <body>
        <div class="float-left" id="signup">
            <button type="button" class="signoutBtn" onclick="location.href='../../webpage/otherProcess.php';">SIGN OUT </button>
        </div>
        <div class="center">
            <div class="grid-container">
                <div class="grid-item header"><hr><h1>Database</h1><hr></div>
                <div class="grid-item"><button onclick="location.href ='http://18.191.207.218//CSC4610/webpage/admin/userDB.php';" id="userinfo">USER INFO</button></div>
                <div class="grid-item"><button onclick="location.href ='http://18.191.207.218//CSC4610/webpage/admin/menuDB.php';" id="menuinfo">MENU INFO</button></div>
                <div class="grid-item"><button onclick="location.href ='http://18.191.207.218//CSC4610/webpage/admin/paymentDB.php';" id="payment">PAYMENT MADE</button></div>
                <div class="grid-item"><button onclick="location.href ='http://18.191.207.218//CSC4610/webpage/admin/orderDB.php';" id="order_hist">ORDER HISTORY</button></div>
            </div>
        </div>
    
    
    
    </body>

</html>