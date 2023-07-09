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
    <title>About Sabah</title>
    <link rel="stylesheet" href="styles/AboutSabah.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Poppins&display=swap" rel="stylesheet">
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
  </div><br><br>

    <div class="column">
    <h1 id="header">GET TO KNOW ABOUT SABAH!</h1>
    <h3>WHERE IS SABAH LOCATED IN MALAYSIA?</h3>
    <div id="map"></div>
    <script>
      function initMap(){
        var options = {
          zoom:5,
          center:{lat:5.9788,lng:116.0753}
    }
    //New map
    var map = new google.maps.Map(document.getElementById('map'), options);
    //Add marker
    var marker = new google.maps.Marker({
      position:{lat:5.9788,lng:116.0753},
      map:map
    });
  }
</script>

    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMmgjsHncqW0RvI6D5aTRSlWzBVa7I-eM&callback=initMap">
</script>
    <div class="leftcolumn">
      <h3>WHAT IS SABAH?</h3>
      <!--Sabah Desc-->
      <p id="desc">Sabah is a Malaysian state in the East Malaysian region, located on the northern tip of Borneo. The Malaysian state of Sarawak to the southwest and Indonesia's North Kalimantan province to the south share land boundaries with Sabah. The Federal Territory of Labuan is a small island off the coast of Sabah. To the west, Sabah has a marine boundary with Vietnam, while to the north and east, it has a maritime border with the Philippines. Kota Kinabalu is the state capital, the state's economic hub, and the seat of the state government of Sabah. Sandakan and Tawau are two more significant cities in Sabah. The state's population was predicted to have expanded to approximately 3.9 million in 2019, up from 3,543,500 in the 2015 census. Sabah features an equatorial climate, tropical rainforests, and a diverse array of animals and plants. On the west side of the state, there are lengthy mountain ranges that are part of the Crocker Range National Park. The Kinabatangan River, Malaysia's second longest, passes through Sabah, while Mount Kinabalu is the highest point in both Sabah and Malaysia.
      </p>

    <h3>HOW DOES SABAH FLAG LOOK LIKE?</h3>
    <img src="images/FlagSabah.png" alt="Sabah Flag" width="480px" height="240px">



    </div>

    <div class="rightcolumn">

    <h3>WHAT ARE THE PLACES IN SABAH?</h3>
    <img src="images/SabahMap2.jpg" alt="Sabah Map 2" width="480px" height="455px">

    <div class="middle">
    <h3>WHY CHOOSE SABAH AS A TOURIST DESTINATION?<h3>
    <h4 id="click"> CLICK THE BUTTON BELOW TO KNOW INTERESTING THINGS IN SABAH!</h4>
    <button type="button" id="attract" onclick="attractFunction()">Attractions ></button><br><br>
    <img src="images/beachicon.png" alt="Beach Icon" width="206px" height="147px">
    </div>
  </div>

</div>
<script src="scripts/AboutSabah.js"></script>
  </body>
</html>
