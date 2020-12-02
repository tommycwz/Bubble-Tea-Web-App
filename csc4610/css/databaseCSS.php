<?php
    header('Content-type:text/css; charset:UTF-8');
?>

.grid-container {
  display: grid;
  grid-template-columns: auto;
  background-color: transparent;
  padding: 10px;
}

.grid-item {
  background-color: transparent;
  border: none;
  padding: 20px;
  font-size: 30px;
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

.center {
  margin: auto;
  width: 50%;
  height: 50%;
  padding: 10px;
}


.grid-item.header{
    padding: 20px;
  text-align: center;
  color: white;
  font-size: 20px;
    font-family: 'Comic Sans MS', cursive;
    font-style: oblique;
}

hr{
    border-top: 3px solid white;
    width: 80%;
}

button{
    font-size: 66px;
    background-color: transparent;
    border: 1px solid;
    border-color: white;
    color: white;
    font-family: Monaco, Courier, monospace;
    font-style: bold;
}

#signup, #back{
    position: fixed;
    top: 1em;
    right: 1em;
}

button.signoutbtn, button.backbtn{
    font-size: 40px;
}

table.tabular{
    border-color: white;
    text-align: center;
    table-layout:auto;
    width: 100%;
}

th,td{
    color:white;
    font-family: 'Comic Sans MS', cursive;
    font-style: oblique;
    padding:10px; 
    text-align: center;
    border: 2px solid white;
    border-style: groove;
    width:auto;
}
