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
    <title>About Sarawak</title>
    <link rel="stylesheet" href="styles/AboutSarawak.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Playfair+Display:ital,wght@1,600&family=Poppins:wght@400&family=Sen&display=swap">
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
    <h1 id="headingDiscoverSarawak">Discover Sarawak</h1>
    <hr id="rounded1">
    <hr id="rounded2">
    <img id="sarawak" src="images/sarawak.png" alt="Sarawak">

    <div id="div1">
      <h2 id="headingaAboutSarawak">ABOUT SARAWAK</h2>
      <p id="p1">
        Sarawak is a Malaysian state in northwestern Borneo which is also known as 'The Land of Hornbills'.  
        Sarawak can be visited as part of a larger tour to Peninsular Malaysia and neighbouring countries, or as a stand-alone adventure.<br><br>

        Sarawak offers a wide range of intriguing attractions. Whether it's experiencing the way of life in one of Sarawak's many
        indigenous communities' longhouses or touring the UNESCO World Heritage Site of Gunung Mulu National Park, the Bako National
        Park's vast expanse of virgin rainforests, you'll discover Sarawak provides a wealth of unforgettable experiences to take home.<br><br>

        A city of native allure and colonial beauty Sarawak is home to the world's most diversified and rich ecology. <br><br>
      </p>
    </div>

    <div id="div2">
      <h2 id="headingsarawakFlag">SARAWAK'S FLAG</h2>
      <img id="flag" src="images/flag.png" alt="Sarawak's Flag">
    </div>

    <h1 id="headingAdventure">LET YOUR ADVENTURES BEGIN!!</h1>
    <img id="gunungMulu" src="images/gunungmulu.png" alt="Gunung Mulu">

    <div class="container">
      <div class="Sarawak">
        <a href="Sarawak.php">> Sarawak</a>
      </div>
      <div class="attractions">
        <a href="SarawakAttractions.php">> Attractions</a>
      </div>
    </div>

  </body>
</html>
