<html>
<?php
    session_start();
    $name = $_SESSION['name'];
    $capName =strtoupper($name);
    
    include 'dbconnect.php';

    $sel = "select * from menu";
    $result1 = mysqli_query($con, $sel);
    $result2 = mysqli_query($con, $sel);
    $result3 = mysqli_query($con, $sel);
    
    $flag = $_SESSION['flag'];
    if($_SESSION['flag'] == "orderprocess"){
        echo '<script>alert("Your Order has been added to cart!\nClick on the cart icon to review and order.")</script>';
    }
    $flag = "menu";
    $_SESSION['flag'] = $flag;
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bubble Tea Shoppe - Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/menuCSS.php"> 
</head>
    
<body>
    <div class="header">
        <hr><h1>Menu</h1><hr>
    </div>
    <div id="signup">
        <button type="button" class="signoutBtn" onclick="location.href='../webpage/otherProcess.php';">Sign Out </button>
    </div>
    <div class="float-right" id="cart">
        <a href="../webpage/cart.php"><img border="0" alt="cart" src="../image/cart.png" width="100" height="100"><br></a>
    </div>
    
    <?php
        echo "<div class='box'><h2>Milk Tea Series</h2></div>";
        echo "<div class='grid-container'>";
        while($data = mysqli_fetch_array($result1)){
            $bevID = $data[0];
            $bevName = $data[1];
            $bevImage = $data[2];
            $bevType = $data[3];
            $price = $data[4];
            
            if($bevType == "Milk Tea"){
                echo "<div class='grid-item'>
                          <button class='menuBtn' data-image='$bevImage' data-name='$bevName' data-id='$bevID' data-type='$bevType' data-target='#showInfoModal' data-toggle='modal' id='$bevID'>
                            <img border='0' alt='$bevImage' src='../image/Milk Tea/$bevImage.png' width='150' height='200'><br>
                            <p>$bevName</p>
                          </button>
                      </div>";
            }
            
        }
        echo "</div>";
    
        echo "<br><br><div class='box'><h2>Milk Cream Series</h2></div>";
        echo "<div class='grid-container'>";
        while($data = mysqli_fetch_array($result2)){
            $bevID = $data[0];
            $bevName = $data[1];
            $bevImage = $data[2];
            $bevType = $data[3];
            $price = $data[4];
            
            if($bevType == "Milk Cream"){
                echo "<div class='grid-item'>
                          <button class='menuBtn' data-image='$bevImage' data-name='$bevName' data-id='$bevID' data-type='$bevType' data-target='#showInfoModal' data-toggle='modal' id='$bevID'>
                            <img border='0' alt='$bevImage' src='../image/Milk Cream/$bevImage.png' width='150' height='200'><br>
                            <p>$bevName</p>
                          </button>
                      </div>";
            }
            
        }
        echo "</div>";
        
        echo "<br><br><div class='box'><h2>Smoothie Series</h2></div>";
        echo "<div class='grid-container'>";
        while($data = mysqli_fetch_array($result3)){
            $bevID = $data[0];
            $bevName = $data[1];
            $bevImage = $data[2];
            $bevType = $data[3];
            $price = $data[4];
            
            if($bevType == "Smoothie"){
                echo "<div class='grid-item'>
                          <button class='menuBtn' data-image='$bevImage' data-name='$bevName' data-id='$bevID' data-type='$bevType' data-target='#showInfoModal' data-toggle='modal' id='$bevID'>
                            <img border='0' alt='$bevImage' src='../image/Smoothie/$bevImage.png' width='150' height='200'><br>
                            <p>$bevName</p>
                          </button>
                      </div>";
            }
            
        }
        echo "</div>";
    ?>
    
    <div class="modal" id="showInfoModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h5 class="modal-title">Preference</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <form action="../webpage/orderProcess.php" method="post">
                        <div class="image-container text-center"></div>
                        <div class="bev-name text-center"></div><br>
                         <input type="hidden" id="bev" name="bev" value="Beverage ID">
                            <div class="option text-center">
                                <label for="sugar-value">Sugar: </label>
                                <select class="sugar-value text-center" name="sugar-value">
                                    <option>100%</option>
                                    <option>75%</option>
                                    <option>50%</option>
                                    <option>25%</option>
                                    <option>0%</option>
                                </select>

                                <label for="ice-value">Ice: </label>
                                <select class="ice-value text-center" name="ice-value">
                                    <option>100%</option>
                                    <option>75%</option>
                                    <option>50%</option>
                                    <option>25%</option>
                                    <option>0%</option>
                                </select>
                            </div><br>

                         <div class="modal-footer">
                                <input type="submit" class="btn btn-lg btn-block" value="Add to cart">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $("#showInfoModal").on("show.bs.modal", function (event) {
          var button = $(event.relatedTarget);
          var btnName = button.data("name");
          var btnImage = button.data("image");
          var btnID = button.data("id");
          var btnType = button.data("type");

          $(this).find(".bev-name").html(btnName);

          $(this).find(".image-container")
            .html(
              "<img width='150' height='175' src=\"..\\image\\" + btnType +"\\" + btnImage + ".png\" >"   
            );
            
          $(this).find("#bev").val(btnID);
        });
    </script>
</body>
    
</html>