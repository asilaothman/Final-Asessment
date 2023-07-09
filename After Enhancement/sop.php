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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
   <!-- CSP implementation -->
    <meta http-equiv="Content-Security-Policy" content="default-src *; img-src *; media-src example.org example.net; script-src userscripts.example.com" />
    <title>SOP</title>
    <link rel="stylesheet" href="styles/sop.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap">
  </head>
  <body>

    <!-- Nagivation bar -->
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

    <!-- Content -->
    <h1 id="headingSOP">SOP For Travel</h1>
    <div id="div1">
      Standard Operation Procedure (SOP) must be followed to ensure the safety of ourselves in order to prevent Covid-19 from keep on spreading. Enjoy your vacation to the fullest and stay safe & healthy!!!<br>
      <p style="color: red"><strong>**Only vaccinated people can travel**</strong></p>
    </div>

    <div id="div2">
      <img src="images/physicaldistance.png" alt="Physical Distance">
    </div>

    <div id="div5">
        <button id="playPause" onclick="playPause()">Play/Pause</button>
        <br><br>
        <video id="video1" width="800">
          <source src="images/covid_sop.mp4" type="video/mp4">
          <source src="images/covid_sop.ogg" type="video/ogg">
        </video>
    </div>

    <script src="scripts/sop.js"></script>
  </body>
</html>
