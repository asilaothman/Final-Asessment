<!DOCTYPE html>
<html lang="en">
<head>
  <title>Uni_edu</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    .button2 {
      background-color: #008CBA;
    }

    .button {
      background-color: #4CAF50; /* Green */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    input[type=text], select, textarea {
      width: 50%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 50px;
      background-color: #f2f2f2;
      padding: 30px;
      width: 50%;
    }

    .button {
      border: none;
      color: white;
      padding: 5px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 2px 2px;
      transition-duration: 0.4s;
      cursor: pointer;
    }

    .button1 {
      background-color: white;
      color: black;
      border: none;
    }

    .button1:hover {
      background-color: #099dff;
      color: white;
    }

    .button2 {
      background-color: white;
      color: black;
      border: none;
    }

    .button2:hover {
      background-color: #099dff;
      color: white;
    }

    .button3 {
      background-color: white;
      color: black;
      border: none;
    }

    .button3:hover {
      background-color: #099dff;
      color: white;
    }

    .button4 {
      background-color: white;
      color: black;
      border: none;
    }

    .button4:hover {
      background-color: #099dff;
      color: white;
    }

    .navbar {
      text-align: center;
      margin-left: 10%;
    }

    .brand_name {
      font-size: 30px;
    }

    .about {
      padding: 3%;
      background-color: #099dff;
      font-size: 40px;
      color: #FFF;
      margin: 5% 15%;
      text-align: center;
    }

    .btns {
      padding-left: 10%;
      padding-right: 5%;
    }

    .content {
      padding-left: 10%;
    }

    .sibtn {
      background-color: #099dff;
      border-radius: 20px;
      color: #fff;
      border: 10px solid #099dff;
      width: 20%;
      height: 50px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <span class="brand_name nav">
      <img src="imgs/logo.png" alt="logo">
    </span>
    <a href="About page.php">
      <button class="button button1">About</button>
    </a>
    <a href="Pricing page.php">
      <button class="button button2">Pricing</button>
    </a>
    <a href="contact us page.php">
      <button class="button button3">Let's talk</button>
    </a>

    <?php
    // Check if the user is authenticated
    if (isset($_SESSION['username'])) {
      // User is authenticated
      echo '<span class="btns"><a href="homepage.php"><button class="sibtn">Homepage</button></a></span>';
    } else {
      // User is not authenticated
      echo '<span class="btns"><a href="signin.php"><button class="sibtn">Sign In</button></a></span>';
    }
    ?>

  </div>

  <div class="about">Pricing</div>
  <div class="content">
    <?php
    // Check if the user is authenticated
    if (isset($_SESSION['username'])) {
      // User is authenticated
      echo '<p>Welcome to our pricing page! As an authenticated user, you have access to special offers. Contact us to learn more.</p>';
    } else {
      // User is not authenticated
      echo '<p>No subscriptions, no monthly payments. Choose the best tutor for you. Learn at your own pace.</p>';
    }
    ?>
  </div>

  <h4>RM 25/min pay As You Go</h4>

  <div class="container">
    <form action="/action_page.php">
      <label for="fname"><b>Name:</b></label>
      <input type="text" id="fname" name="firstname" placeholder="Your name.." required pattern="[A-Za-z]+" title="Only letters are allowed">

      <label for="lname"><b>Last Name:</b></label>
      <input type="text" id="lname" name="lastname" placeholder="Your last name.." required pattern="[A-Za-z]+" title="Only letters are allowed">

      <label for="email"><b>Email:</b></label>
      <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Your Email">

      <label for="pwd"><b>Password:</b></label>
      <input type="password" pattern="^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$" title="Please enter a valid password" required placeholder="At least 8 characters with at least one number, one symbol, one uppercase letter, and one lowercase letter.">

      <button class="button" type="submit">Sign in</button>
    </form>
  </div>
</body>
</html>

