<?php

session_start();
$name = $_SESSION['name'];
if(isset($_SESSION['cardProblem'])){
  echo '<script>alert("Invalid Credit Card")</script>';
}

unset($_SESSION['cardProblem']);
include 'dbconnect.php';

$sel = "select * from cart, menu where username = '$name' && menu.bevID = cart.bevID";
$result = mysqli_query($con, $sel);

?>
    
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bubble Tea Shoppe - Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/checkoutCSS.php"> 
</head>

    
<body>
    <div class="checkout">
           <?php 
             echo"<h1>Review Order </h1><br>";
                $total = 0;
                $ftotal = 0;
                $totalbft = 0;
            while($data = mysqli_fetch_array($result)){
                $drinkID = $data[0];
                $username = $data[1];
                $bevID = $data[2];
                $sugar = $data[3];
                $ice = $data[4];
                $bevName = $data[6];
                $image = $data[7];
                $price = $data[9];
                $total += $price;
                $totalbft = number_format($total,2);

                echo "<p>$bevID  - $bevName</p>";
                echo "<pre class='tab'>     - Sugar Level: $sugar</pre>";
                echo "<pre class='tab'>     - Ice Level: $ice</pre>";
                echo "<p class='price'>USD $price</P>";

            }  
            $tax = $totalbft*9.95/100;
            $tax = number_format($tax,2);
            $ftotal = $tax + $totalbft;
            $ftotal = number_format($ftotal,2);
            echo "<br><hr><p class='price'>Subtotal: USD {$totalbft}</p>";
            echo "<p class='price'>Tax: USD {$tax}</p>";
            echo "<h2>Total: USD {$ftotal}</h2><hr>";
            ?>
            <button type="button"  id="cartBtn" onclick="location.href='cart.php';">Back to Cart </button>
             <button type="button" id="checkoutBtn" data-toggle="modal" data-target="#myModal">Checkout</button>
        
        <!-- Model -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Checkout</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body">
                  
                  
                <form action="payProcess.php" method="post">
                  <div class="form-group">
                    <label for="cardName">Card Holder's Name</label><br>
                    <input type="text" id="cardName" name="cardName" required>
                  </div>
                  <div class="form-group">
                    <label for="cardNum">Card Number</label><br>
                    <input type="text" id="cardNum" name="cardNum" placeholder="1234123412341234" required>
                  </div>
                    
                    <label class="month" for="month">Month</label><br>
                      <select class="month" id="month" name="month">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                      </select><br>
                    
                    <label class="year" for="year">Year</label><br>
                      <select class="year" id="year" name="year">                        
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                      </select>
                    
                  <div class="form-group">
                    <label for="cvv">CVV</label><br>
                    <input type="text" id="cvv" name="cvv" required>
                  </div>
                    <div id="message"></div>
                    <?php $_SESSION['ftotal'] = $ftotal; ?>
                    
                    <p>Note: The payment system is not implemented</p>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-lg btn-block" id="paynow" value="Pay Now">
                    </div>
                </form>
                  
                
              </div>
            </div>
          </div>
        </div>
        
    </div>
</body>
</html>
