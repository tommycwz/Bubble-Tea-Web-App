<?php
session_start();

$flag = "delivery";
$_SESSION['flag'] = $flag;
?>

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/deliveryCSS.php">
<title>Bubble Tea Shoppe - Delivery Page</title>
</head>
<body>

    <h1>Thank you for choosing us!</h1>
<div class="center">
    <img class="logo" src="../image/logo.png">

    <br><br>
    <div class="timer">  
        <h2>The estimated delivery time:</h2>
        <h2 id="timer"></h2>        
    </div><br>
    <button type="button" class="menuBtn" onclick="location.href='../webpage/menu.php';">Back to Menu </button>
    <button type="button" class="signoutBtn" onclick="location.href='../webpage/otherProcess.php';">Sign Out </button>
    <img src="../image/bike.png" width="150px" height="150px">
    
</div> 

<script>
var timeslot = [5,10,15,20,25,30];
function randomPick(arg){
    return arg[Math.floor(Math.random()*arg.length)];
}
  var luck = randomPick(timeslot);
  var countdown = new Date().getTime() + luck * 60 * 1000;

  var x = setInterval(function() {

  var current = new Date().getTime();
  var distance = countdown - current;
    
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);    
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  

  document.getElementById("timer").innerHTML = minutes + ":" + seconds;

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "Delivered or Reaching Soon =)";
  }
}, 1000);
    
//animation
    var img = document.getElementsByTagName('img')[1];
	img.style.position ='absolute';
	img.style.right ='0px';
    function move(){
		var oldRight = parseInt(img.style.right);
		var newRight = oldRight + 10;
		img.style.right = newRight +'px';
		
		if(newRight > window.innerWidth){
			img.style.right='0px';
		}
	}
	window.setInterval(move,50);
</script>

</body>
</html>
