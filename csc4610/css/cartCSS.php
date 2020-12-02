<?php
    header('Content-type:text/css; charset:UTF-8');
?>

h1{
    text-align: center;
}

body {
        font-family: Arial, Helvetica, sans-serif; 
        background-image: url("../image/bgi.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
}
.cart {
    margin: auto; 
    width: 65%; 
    padding: 10px; 
    background-color: lemonchiffon;
}

table#tab{
    table-layout:fixed;
    width: 100%;
}

h2{
    text-align:end;
}

.wide {
  width: 150px;
}

th,td{
    padding:0px; 
    text-align: center;
    border: 1px solid black;
    border-style: groove;
    width:auto;
}

.checkoutBtn{
      background-color: darkkhaki;
      font-weight: bold;
      color: black;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
}

img{
    display:block; width:100%; height:auto;
}

.menuBtn{
    background-color: #f44336;
    font-weight: bold;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.checkoutBtn:hover, .menuBtn:hover{
    opacity: 0.8;
}

input.del{
    font-size: 30px;
    background-color: transparent;
    border: none;
}

#wholepage{
    width: 100%;
    margin-left:auto;
    margin-right:auto;
}
