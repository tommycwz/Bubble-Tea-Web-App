<?php
session_start();
$name = $_SESSION['name'];
$capName =strtoupper($name);
include 'dbconnect.php';

$sel = "select * from cart, menu where username = '$name' && menu.bevID = cart.bevID";
$result = mysqli_query($con, $sel);
$flag = "cart";
$_SESSION['flag'] = $flag;
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/cartCSS.php">
    <title>Bubble Tea Shoppe - Cart</title>
</head>

<body>
<div id="wholepage">       
        <div class="cart">
                                                                           
        <?php
            echo"<h1>$capName's CART</h1>";
            $total = 0;
            $totalbft = 0;
        echo"<table id='tab'>";
        echo"<tr><th>Image</th><th>Beverage Name</th><th>Sugar Level</th><th>Ice Level</th><th>Price</th><th>Delete</th>";
        while($data = mysqli_fetch_array($result)){
            $drinkID = $data[0];
            $username = $data[1];
            $bevID = $data[2];
            $sugar = $data[3];
            $ice = $data[4];
            $bevName = $data[6];
            $image = $data[7];
            $bevType = $data[8];
			$price = $data[9];
            $total += $price;
            $totalbft = number_format($total,2);
            
            echo"<tr>";
            echo"<td><img src='../image/$bevType/$image.png' alt='$image' class='$image' width='150' height='175'></td>";
            echo"<td><b>{$bevName}</b></td>";
            echo"<td><b>{$sugar}</b></td>";
            echo"<td><b>{$ice}</b></td>";
			echo"<td><b>USD {$price}</b></td>";  
            echo"<td><form action='../webpage/otherProcess.php' method='post'>";
            echo"<input type='hidden' id='drinkID' name='drinkID' value='$drinkID'>";
            
            echo"<input type='submit' name ='submit' value='X' class='del'>";
            echo"</form></td>";
        }   
            
            
            echo "</table>";
            echo "<h2>Total: USD $totalbft</h2>";
          ?>
        <button type="button" class="menuBtn" onclick="location.href='../webpage/menu.php';">Back to Menu </button>
        <button type="button" class="checkoutBtn" onclick="location.href='../webpage/checkout.php';">Review</button>
        
    </div>     
   </div>  
</body>
</html>
