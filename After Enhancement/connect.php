<?php
$host = "localhost"; // Change this if your database server is on a different host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "finalexam"; // Change this to the name of your MySQL database

// Start a PHP session
session_start();

// Connect to MySQL
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        // Get the input values from the form
        $input_username = $_POST["username"];
        $input_password = $_POST["password"];

        // Validate and Sanitize the input to prevent SQL injection attacks
        $input_username = mysqli_real_escape_string($conn, $input_username);
        $input_password = mysqli_real_escape_string($conn, $input_password);

        // Hash the input password using SHA-1 algorithm
        $hashed_password = sha1($input_password);

        // Check if the input values match the values stored in the database
        $sql = "SELECT * FROM login WHERE username='$input_username' AND password='$hashed_password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            // Store the username and password in session variables
            $row = mysqli_fetch_assoc($result);
            $_SESSION["username"] = $row["username"];
            $_SESSION["password"] = $row["password"];

            // Redirect the user to page
            header("Location: homepage.php");
            exit;
        } else {
            // Display an error message
            echo '<script>alert("Invalid username or password. Please try again."); window.location.href="authpage.php";</script>';
        }
    } elseif (isset($_POST["request_otp"])) {
        // Get the input email from the form
        $input_email = $_POST["email"];

        // Generate and store the OTP in a session variable
        $otp = generateOTP();
        $_SESSION["otp"] = $otp;

        // Send the OTP via email
        $subject = "One-Time Password (OTP) Request";
        $message = "Your OTP is: $otp";
        $headers = "From: sender@example.com\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n" .
               "MIME-Version: 1.0\r\n" .
               "Content-type: text/html; charset=iso-8859-1\r\n" .
               "Port: 25"; // Change the port number here

        if (mail($input_email, $subject, $message, $headers)) {
            // Redirect or display a success message
            echo '<script>alert("OTP sent to your email. Please check your inbox."); window.location.href="authpage.php";</script>';
        } else {
            // Display an error message
            echo '<script>alert("Failed to send OTP. Please try again."); window.location.href="authpage.php";</script>';
        }
    }
}

// Close the database connection
mysqli_close($conn);

// Function to generate a random OTP
function generateOTP() {
    $otpLength = 6; // Change the length as per your requirement
    $otp = '';
    for ($i = 0; $i < $otpLength; $i++) {
        $otp .= mt_rand(0, 9);
    }
    return $otp;
}
?>
