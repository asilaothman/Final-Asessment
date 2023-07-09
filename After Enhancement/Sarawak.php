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
    <title>Sarawak</title>
    <link rel="stylesheet" href="styles\Sarawak.css">
  </head>
  <body>
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
        <a href="AboutSarawak.php">About</a>
        <a href="SarawakAttractions.php">Attractions</a>
      </div>
    </div>
    <a href="contact.php">About Us</a>
    <a href="sop.php">SOP's</a>
    <a href="logout.php">Logout</a>
  </div>

    <img src="images\sarawak1.png" alt="Sarawak">
    <div class="text">
      <button id="button2" onclick="document.location='AttractionSarawak.html'">Attraction ></button>
      <p style="font-size: 32px">VISIT</p>
      <h1 style="font-size: 64px">SARAWAK</h1>
      <p style="font-size: 37px">More to Discover</p>
      <button id="button1" onclick="document.location='AboutSarawak.html'">Learn More ></button>
    </div>
  </body>
</html>