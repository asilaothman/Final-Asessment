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
    // Get the input values from the form
    $input_name = $_POST["name"];
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];
    $input_residency = $_POST["residency"];
    
    // Validate and Sanitize the input to prevent SQL injection attacks
    $input_name = mysqli_real_escape_string($conn, $input_name);
    $input_username = mysqli_real_escape_string($conn, $input_username);
    $input_password = mysqli_real_escape_string($conn, $input_password);
    $input_residency = mysqli_real_escape_string($conn, $input_residency);

    // Hash the input password using SHA-1 algorithm
    $hashed_password = sha1($input_password);

   // Insert the hashed input values into the database
$sql = "INSERT INTO login (name, username, password, residency) VALUES ('$input_name', '$input_username', '$hashed_password', '$input_residency')";
if (mysqli_query($conn, $sql)) {
    // Store the username, password, and residency in session variables
    $_SESSION["name"] = $input_name;
    $_SESSION["username"] = $input_username;
    $_SESSION["password"] = $hashed_password;
    $_SESSION["residency"] = $input_residency;

        // Redirect the user to a protected page
        header("Location: authpage.php");
        exit;
} else {
    // Display an error message
    echo "Error: " . mysqli_error($conn);
}
}

// Close the database connection
mysqli_close($conn);
