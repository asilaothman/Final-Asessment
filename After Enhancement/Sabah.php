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
    <title>Sabah</title>
    <link rel="stylesheet" href="styles/Sabah.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet">
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
      <h3 id="visit">VISIT<h3>
      <h1 id="sabah">SABAH</h1>
      <div class="attr">
      <a href="SabahAttractions.html">Attractions ></a></div>
      <img id="sbhimg" src="images/Sabah1.png" alt="Sabah Map 1" width="500px" height="383px">
      <p id="desc">Sabah is a Malaysian state occupying the northern part of the island of Borneo.</p>
      <div class="aboutsab">
      <a href="AboutSabah.html">Learn more ></a></div>


  </body>
</html>
