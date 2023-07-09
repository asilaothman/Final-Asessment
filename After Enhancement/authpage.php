<?php

session_start();

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
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="authpage.css">
  </head>
  <body>
    <div class="container">
    <h1>Login Page</h1>
    <form method="post" action="connect.php">
      <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required pattern="[a-zA-Z0-9]{4,16}">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#_-$%^&*]).{8,}">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
     
      <label for="otp">OTP Number:</label>
      <input type="text" id="otp" name="otp" pattern="[0-9]{6}" >


      <input type="submit" name="login" value="Login">
      <input type="submit" name="request_otp" value="Request OTP">
    </form>
  </div>
  </body>
</html>
