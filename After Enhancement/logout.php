<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h1>Logout Page</h1>
    
    <script>
        // Check if the user is authenticated
        if (sessionStorage.getItem("isLoggedIn")) {
            // Clear the session or perform other necessary actions
            sessionStorage.removeItem("isLoggedIn");
            
            // Display the success message
            document.write("<p>You have been logged out successfully.</p>");
        } else {
            // Display an error message if the user is not authenticated
            document.write("<p>Authentication failed. Please login again.</p>");
        }
    </script>
    
    <p><a href="index.php">Click here to go back to the login page.</a></p>
</body>
</html>

