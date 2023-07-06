<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['username'])) {
  // User is not authenticated, redirect to the login page or display an error message
  header("Location: signin.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uni_edu</title>
  <link rel="stylesheet" href="/css/Uni.css">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }
    /* Your CSS styles */
  </style>
</head>
<body>
  <div class="navbar">
    <span class="brand_name nav"><img src="imgs/logo.png" alt="logo"></span>
    <a href="About page.php"><button class="button button1">About</button></a>
    <a href="Pricing page.php"><button class="button button2">What we do</button></a>
    <a href="contact us page.php"><button class="button button4">Let's talk</button></a>
    <span class="btns">
      <a href="signin.php"><button class="sibtn">Sign In</button></a>
    </span>
  </div>

  <div class="about">Contact us</div>
  <div class="content">
    <p>Need help? Give us a call.</p>
    <p>For any inquiries, please send us an email or message.</p>
  </div>

  <div class="container">
    <form action="/action_page.php" method="post">
      <label for="name"><b>Name:</b></label>
      <input type="text" id="name" name="name" placeholder="Full name" required pattern="[A-Za-z]+" title="Only letters are allowed">
      <label for="email"><b>Email:</b></label>
      <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter your email here">
      <label for="message"><b>Message:</b></label>
      <textarea id="message" name="message" placeholder="Enter your message here"></textarea>
      <button type="submit" class="button">Send</button>
    </form>
  </div>

  <div id="map"></div>

  <script>
    function initMap() {
      var location = { lat: 3.2576370999999997, lng: 101.7410057 };
      var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: location
      });
    }
  </script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
</body>
</html>
