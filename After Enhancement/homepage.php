<?php
session_start(); 

// Check if the user is not logged in
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page
    header("Location: authpage.php");
    exit();
}

// Clear browser cache to avoid unauthroized user to access pages and maintain file security
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");
?>


<!DOCTYPE html>
<html>
    <html lang="en" dir="ltr">
    <meta charset="utf-8">


<head>
<style>


.navbar {
  overflow: hidden;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black;
  text-align: center;
  padding: 14px 100px;
  text-decoration: none;
  font-family: Arial, Helvetica, sans-serif;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: black;
  padding: 14px 100px;
  background-color: inherit;
  font-family: Arial, Helvetica, sans-serif;

  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #ddd;
  color: blue;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 50px;
  text-decoration: none;
  display: block;
  text-align: center;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.bg1 {
  position: relative;
}
.title{
  position:absolute;
  color: white;
  top: 150px;
  left: 250px;
  font-size: 100px;
  font-family: "Lucida Handwriting", cursive;
}
.header{
  text-align: center;
  font-family: "Lucida Handwriting", cursive;
  font-size: 30px;
}
.desc{
  text-align: left;
  font-family: 'Garamond', serif;
  font-size: 20px;
  width: 600px;
  left: 50px;
}
.pic1{
  float: right;
}
.pic2{
  float: right;
}
.line{
  border: 1.5px solid black;
}
.attraction{
  text-align: center;
  font-family: "Copperplate", fantasy;
  font-size: 40px
}


.column {
  float: right;
  width: 32%;
  padding: 5px;

}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.learnmore{
  position: absolute;
  top: 1840px;
  color: white;
}
.last{
background-image: url('images/whitesand.jpg');
position: relative;
}

#logo{
  position: relative;
  float: left;
  top: 100px;
  width: 300px;
  left: 80px;
}

.table{
  color: black;
  position: relative;
  top: 100px;
  left: 200px;
}

#headers{
  font-size: 20px;
}

.subs{
  position: relative;
  left: 500px;
  width: 300px;
  bottom: 80px;
  float: left;
}

form {
  border: 3px solid #f1f1f1;
  font-family: Arial;
}

.button {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.button:hover{
    opacity: 0.8;
}

input{
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

#demo{
  color: green;
}

.sdg{
background-image: url('images/greencity.jpg');
position: relative;
text-align: center;
color: white;
}

#message{
  font-family: "Times New Roman", Courier, serif;
  font-size: 20px;
}

</style>

</head>






<body style= "background-color: #A7C7E7;">

  <div class="navbar">
    <a href="homepage.php">Home</a>
    <div class="dropdown">
      <button class="dropbtn" onclick="document.location='Sabah.php'">Sabah</button>
      <div class="dropdown-content">
        <a href="AboutSabah.php">About</a>
        <a href="SabahAttractions.php">Attractions</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn" onclick="document.location='Sarawak.php'">Sarawak</button>
      <div class="dropdown-content">
        <a href="Sarawak.php">About</a>
        <a href="SarawakAttractions.php">Attractions</a>
      </div>
    </div>
    <a href="contact.php">About Us</a>
    <a href="sop.php">SOP's</a>
    <a href="logout.php">Logout</a>
  </div>





  <div class="bg1">
    <img src="images/mainbeach.jpg" width="1510" height="800">
    <div class= "title"> Sabah & Sarawak</div>
  </div>
<br><br><br>
<div class= "header"><b>Sabah</b></div>
<br><br>
<div class="pic1">
<img src="images/sabah.jpg" width= "300" height= "200">
</div>
<div class= "desc">
  One of the most go-to vacation place because of the spectacular beaches and its unique traditions. Sabah is well known as <b>“The Land Below The Wind"</b>, because it is located just south of the typhoon-prone region, making it free from typhoons. Home to 32 different indigenous groups that consist of over 30 ethnic races, Sabah is often described as the people that makes visiting Sabah so special.</div>




<br><br><br><br>
<hr class="line">
<br><br>
<div class= "header"><b>Sarawak</b></div>
<br>
<div class= "pic2">
  <img src="images/sarawak.jpg" width "400" height= "200"></div>
<div class= "desc">
Nonetheless, Malaysia's another rocking state which is Sarawak, the largest state in Malaysia, is home to 27 ethnic groups. With 45 different dialects, each group has their own unique stories, beliefs, traditions and cultures. The sape has become the symbol of the Rainforest World Music Festival, one Malaysia's largest music festival.</div>
<br><br><br><br><br>
<hr class="line">
<br><br>

<div class="attraction">OUR POPULAR ATTRACTION</div><br>



<div class="row">
  <div class="column">
    <img src="images/mounkinabalu.jpg" style="width:90%">
    <div class="learnmore">
    <p><a href="SabahAttractions.html">Learn more></a></p></div>
  </div>
  <div class="column">
    <img src="images/turtle.jpg" style="width:90%">
    <div class="learnmore">
    <p><a href="SabahAttractions.html">Learn more></a></p></div>
  </div>
  <div class="column">
    <img src="images/tusanbeach.jpg" style="width:90%">
    <div class="learnmore">
    <p><a href="AttractionSarawak.html">Learn more></a></p></div>
  </div>
</div>
<br><br><br><br><br>


<div class="sdg">
  <h2>Oh and don't forget!</h2>
  <p id="message">Always remember to <b>take care of our surrounding wherever we are!</b><br> Together lets achieve a better and a more sustainable future for the world.</p>
  <img src="images/sdglogo.png" style="width:30%">
</div>

</body>

</html>
