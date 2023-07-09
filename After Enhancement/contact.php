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

$csrfExpiration = 30; // Expiration time in seconds (1 hour)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['csrf_token']) &&
        isset($_SESSION['csrf_token']) &&
        isset($_SESSION['csrf_token_time']) &&
        $_POST['csrf_token'] === $_SESSION['csrf_token'] &&
        time() - $_SESSION['csrf_token_time'] <= $csrfExpiration
    ) {
        $messages[] = "CSRF Token Validation Success";
        // Process the form submission
} else {
        echo "Problem with CSRF Token Verification";
        // Handle the error or redirect the user
    }
}

if (!isset($_SESSION['csrf_token']) || !isset($_SESSION['csrf_token_time']) || time() - $_SESSION['csrf_token_time'] > $csrfExpiration) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    $_SESSION['csrf_token_time'] = time();
}

$csrfToken = $_SESSION['csrf_token'];

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <title>ABOUT US</title>
<script src="scripts/contact.js">
</script>
<link rel="stylesheet" href="styles/contact.css">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@1,200&display=swap" rel="stylesheet">
</head
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

<h1>WHO WE ARE?</h1>

<img src="images/ship.jpg" alt="" width="1500" height="300">

<h2>OUR GOAL</h2>
<p>"OUR GOAL IS TO PROVIDE YOU WITH THE SERVICE AND TRAVEL HAPPILY TO SABAH AND SARAWAK"</p>
<p><b>YOUR JOY TO VISIT SABAH AND SARAWAK IS OUR ULTIMATE JOY</b><p>
<h2>OUR MISSION</h2>
<p>"WE EXIST TO ENHANCE OUR USERS QUALITY OF LIFE AND CONTRIBUTE TO OUR CUSTOMERS HAPPINESS WHILE DISCOVERING MANY UNIQUE THINGS IN SABAH AND SARAWAK"</p>
<p><b>WE WILL HAVE A BETTER EXISTENCE IF WE FILL OUR TIME WITH SOMETHING MEANINGFUL</b></p>
<h2>OUR VISION</h2>
<p>"AS THE CREATORS OF THIS PAGE, WE WILL ALWAYS STRIVE TO IMPROVE OUR PAGE AND PROVIDE THE BEST SERVICE POSSIBLE TO OUR USERS"</p>
<p><b>FOR YOU, OUR FIRST OBJECTIVE IS TO DO OUR BEST</b></p><br><br>

<div id="example1">
<h2>CONTACT US</h2>
<div id="p1"
<p style="color:#454545">We'd love to hear from you</p>
</div>
<img src="images/contact.jpg" alt="" width="500" height="150"><br><br>
 </div>

<h2>Subscribe to our newsletter</h2>
<div class="container" style="background-color:white">
<form name="myForm" onsubmit="return validateForm()" method="post" required>
<input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
  Name: <input type="text" name="fname">
  Email: <input type="text" name="mail"><br>
  <label>
      <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
    </label>
  <input type="submit" value="Subscribe">
</form>
</div>
</body>
</html>
