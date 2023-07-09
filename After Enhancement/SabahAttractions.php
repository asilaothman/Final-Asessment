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
    <title>Sabah Attractions</title>
    <link rel="stylesheet" href="styles/SabahAttractions.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Libre+Baskerville&family=Poppins&family=Source+Code+Pro:ital@1&display=swap" rel="stylesheet">

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
        <a href="Sarawak.php">About</a>
        <a href="SarawakAttractions.php">Attractions</a>
      </div>
    </div>
    <a href="contact.php">About Us</a>
    <a href="sop.php">SOP's</a>
    <a href="logout.php">Logout</a>
  </div><br><br>

    <div class="column">
    <h1 id="header">WHAT ARE THE INTERESTING THINGS IN SABAH?</h1>
    <p id="opening">Click the button below to know more information about attractions in Sabah!</p><br>
    <div class="leftcolumn">

    <img src="images/MountKinabalu.jpg" alt="Mount Kinabalu">
    <button type="button" onclick="mount()">Mount Kinabalu</button>
      <div id="MK">
        <p>Mount Kinabalu is Borneo's and Malaysia's tallest peak. With a height of 13,435 feet, it is the world's third tallest island peak and the 20th most prominent mountain by topographic prominence. The peak is found in the Ranau region of Sabah's West Coast Division.</p>
      </div>

    <br>
      <img src="images/NightMarket.jpg" alt="Kota Kinabalu Night Market"><button type="button" onclick="nightm()">Kota Kinabalu Night Market</button>
      <div id="NM">
        <p>The night market is located between the Central Market and the Segama Waterfront in Kota Kinabalu. The vendors begin setting up at 5 p.m., and by 6 p.m., there will be a significant number of stalls with a wide range of seafood on show at each stand. Don't be surprised if you come upon a large lobster here! A large prawn costs between RM8 and RM20 each piece, while a lobster might cost more than RM100. The seafood is fresh since the fish landing pier is right behind Central Market, and the hawkers have direct access to it.</p>
      </div>

    <br>
      <img src="images/turtle.jpeg" alt="Turtle Islands National Park"><button type="button" onclick="turtle()">Turtle Islands National Park</button>
      <div id="turtle">
        <p>Turtle Islands Park is located on the Turtle Islands, which are 3 kilometres north of Sandakan in Sabah, Malaysia, in the Sulu Sea. Selingaan, Little Bakkungan, and Gulisaan are the three islands that make up the archipelago, as well as the surrounding coral reefs and seas.</p>
      </div>

    <br>
      <img src="images/KKMosque.jpg" alt="Kota Kinabalu City Mosque"><button type="button" onclick="mosq()">Kota Kinabalu City Mosque</button>
      <div id="mosq">
        <p>The Floating Mosque, also known as the Kota Kinabalu City Mosque, is located on the northeastern part of downtown Kota Kinabalu, on the beaches of Likas Bay. The mosque is a superb example of contemporary Islamic architecture with a breathtaking sunset vista. The white mosque is mirrored in the lake around it, which is set against a backdrop of beautiful blue sky.</p>
      </div>

    <br>
      <img src="images/KinabatanganRiver.jpg" alt="Kinabatangan River"><button type="button" onclick="kbr()">Kinabatangan River</button>
      <div id="kbr">
        <p>The Lower Kinabatangan River is home to one of the world's most diverse ecosystems. It is also the first and largest RAMSAR facility in Sabah and Malaysia. The surrounding forest is one of only two known areas in the world where 10 species of primates may be found, in addition to being home to Borneo's indigenous orang utan and proboscis monkey.</p>
      </div>

    <br>
      <img src="images/Kundasang.jpg" alt="Kundasang"><button type="button" onclick="kundasang()">Kundasang</button>
      <div id="kd">
        <p>Kundasang is a town on the bank of the Kundasang Valley in the district of Ranau, Sabah, Malaysia. It's around 6 kilometres from Kinabalu National Park and 12 kilometres from Ranau town, and it's famous for its seven-day-a-week vegetable market.</p>
      </div>
    </div>

    <div class="rightcolumn">


      <img src="images/Orangutan.jpg" alt="Sepilok Orangutan Rehabiliation Centre">
      <button type="button" onclick="orangu()">Sepilok Orangutan Rehabiliation Centre</button>
        <div id="ou">
          <p>The Sepilok Orangutan Rehabilitation Centre is 25 kilometres west of Sandakan in the Malaysian state of Sabah. The centre was established in 1964 as the first official orangutan rehabilitation initiative for orphaned or abandoned infant orangutans rescued from forestry sites, plantations, illegal hunting, and pet keeping.</p>
        </div>

      <br>
      <img src="images/PoringHotSpring.jpg" alt="Poring Hot Spring">
      <button type="button" onclick="poringhs()">Poring Hot Spring</button>
        <div id="phs">
          <p>Poring Hot Springs is around 13 kilometres from Ranau and 40 kilometres from Kundasang, the headquarters of the Kinabalu National Park. The hot springs are located within the massive Kinabalu National Park. The Poring Hot Springs were initially constructed by the Japanese during WWII and have since grown to become one of the most popular tourist spots for both tourists and locals. After a long and difficult walk up Mount Kinabalu, the hot spring waters containing sulphur are pumped into open-air Japanese style spas where you may rest your sore limbs.</p>
        </div>

      <br>
        <img src="images/TanjungAru.jpg" alt="Tanjung Aru Beach"><button type="button" onclick="tanjungab()">Tanjung Aru Beach</button>
        <div id="tab">
          <p>The casuarinas or aru trees that line the fine sands give it its name, and this is where you can have a front-row seat to the most spectacular sunset on the planet every evening, as the crimson sun sinks gently into the horizon, turning the broad skies a beautiful scarlet. Kite flying, picnics, team building, and simply eating foods offered at little food carts while watching the sunset are all popular activities here.</p>
        </div>

      <br>
        <img src="images/SipadanIsland.jpg" alt="Sipadan Island"><button type="button" onclick="sipadani()">Sipadan Island</button>
        <div id="si">
          <p>Sipadan is Malaysia's only maritime island, rising 600 metres (2,000 feet) above the bottom. It's off the east coast of Sabah, Malaysia, in the Celebes Sea. It was created by live corals that grew on top of an extinct volcanic cone over thousands of years. Sipadan is one of the world's most spectacular scuba diving locations. Sipadan is Malaysia's only oceanic island, and the massive pillar that creates the atoll serves as a haven for a variety of sea creatures and fish. Furthermore, only a few sites on the planet have such a high density of sea turtles.</p>
        </div>

      <br>
        <img src="images/TipOfBorneo.jpg" alt="Tip of Borneo"><button type="button" onclick="tipob()">Tip of Borneo</button>
        <div id="tob">
          <p>Borneo is the world's third biggest island, and its northernmost tip is the confluence of two major seas, the South China Sea and the Sulu Sea. The Tip of Borneo is a renowned tourist destination in Sabah, located in the Kudat district. The environment is beautiful, but you may not realise that the spot where you are standing was once a pirate watchtower hundreds of years ago. As a result, the Tip of Borneo is also known as Tanjung Simpang Mengayau, which translates to "the point where the war begins" (in Rungus language).</p>
        </div>

      <br>
        <img src="images/Rafflesia.jpg" alt="Rafflesia"><button type="button" onclick="raff()">Rafflesia</button>
        <div id="raff">
          <p>Rafflesia is a parasitic flowering plant genus in the Rafflesiaceae family. The blooms of some of the species are gigantic, with buds growing from the ground or directly from the lower stems of their host plants; one species boasts the world's biggest flowers.</p>
        </div>
    </div>
  </div>
<script type="text/javascript" src="scripts/SabahAttractions.js"></script>
  </body>
</html>
