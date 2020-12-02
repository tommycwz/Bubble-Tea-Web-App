<?php
    header('Content-type:text/css; charset:UTF-8');
?>

.header {
  padding: 60px;
  text-align: center;
  color: white;
  font-size: 60px;
    font-family: 'Comic Sans MS', cursive;
    font-style: oblique;
}
.center {
  margin: auto;
  width: 50%;
  padding: 10px;
}


body {
        font-family: Arial, Helvetica, sans-serif; 
        background-image: url("../image/bgi.png");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
}

.grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      padding: 10px;
}

.grid-item {
      background-color: none;
      border: 0px solid rgba(0, 0, 0, 0.8);
      padding: 20px;
      font-size: 30px;
      text-align: center;
}

#cart{
    position: fixed;
    top: 5em;
    right: 1em;
}

#signup{
    position: fixed;
    top: 1em;
    right: 1em;
}

button{
    background-color: #f44336;
    border = none;
    font-size: 20px;
    cursor: pointer;
}

h1{
    text-align: center;
}

h3{
    text-align: center;
}

p{
    font-size:25px;
    color:white;
    font-family: Monaco, Courier, monospace;
}

button.menuBtn{
    width: 400px;
    background-color: transparent;
    border: none;
    cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

div.modal-header{
    background-color: darkkhaki;
}
div.modal-body, form{
    background-color: #ffffc7;
}
input, select{
    background-color:lemonchiffon;
}

input.btn.btn-lg.btn-block{
    background-color: darkkhaki;
}

#wholepage{
    width: 100%;
    margin-left:auto;
    margin-right:auto;
}

hr{
    border-top: 3px solid white;
    width: 45%;
}


