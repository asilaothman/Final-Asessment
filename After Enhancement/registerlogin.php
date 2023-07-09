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
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="authpage.css">
</head>
<body>
  <div class="container">
    <h1>Registration Page</h1>
    <form method="post" action="registerdb.php">
    <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
      <label for="name">Full name:</label>
      <input type="text" id="name" name="name" pattern="[a-zA-Z ]+" required title="Please enter a valid full name">

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" pattern="[a-zA-Z0-9]{4,16}" required title="Please enter a username between 4 and 16 characters that contains only letters and numbers.">

     <label for="password">Password:</label>
<input type="password" id="password" name="password" pattern="^(?=.*[A-Z])(?=.*[!@#_$%^&*])(?!.*[',<;\[]).{8,}$" required title="Please enter a password that is at least 8 characters long, contains at least one uppercase letter, and one special character (excluding '', <>, ;, [])">

      <label for="residency">Residency:</label>
      <select id="residency" name="residency" required>
        <option value="">Select Residency</option>
        <option value="Sabah">Sabah</option>
        <option value="Sarawak">Sarawak</option>
      </select>

      <input type="submit" value="Register">
      <p>Already have an account? <a href="authpage.php">Login here.</a></p>
    </form>
  </div>
</body>
</html>
