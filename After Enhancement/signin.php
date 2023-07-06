<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/signin.css">
    <title>Sign in</title>
    <style>


    </style>
</head>
<body>
    
    <div class="container">
        <div class="logo">
          <img src="imgs/logo.png" width="200" alt="logo" style="margin-top: 10px;">
        
          </div> 
        
        <nav>
          <ul>
          <a href="About page.php"><li class="active" style="margin-left:10px;   padding-left: 
          20px; padding-right: 20px;">ABOUT</li></a>
        <a href="Pricing page.php"><li class="active" style="margin-left:10px;   padding-left: 
            20px; padding-right: 20px;">PRICING</li></a>
         <a href="contact us page.php"><li style="  padding-left: 
        20px; padding-right: 20px;">LET'S TALK</li></a>
          </ul>
          </nav>
        </div>
      
        
        <div class="register-photo">
          <div class="form-container">
              <div class="image-holder"></div>
              <form onsubmit="login(event)" >
                <div class="input-container">
                  <i class="fa fa-envelope icon" style="margin-left: 10px;border-top-left-radius: 20px;
                  border-bottom-left-radius: 20px;"></i> 
                  <input class="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Your Email">
              
                </div>
                <div class="input-container">
                  <i class="fa fa-key icon" style="margin-left: 10px;border-top-left-radius: 20px;
                  border-bottom-left-radius: 20px;"></i>
                  <input class="input-field" type="password" pattern="^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$" title="Please enter a valid password" required name="psw">
                </div>
                <a class="already" href="signup.php">New to Uni_Edu? Register here.</a>
                  <div class="form-group">
                      <button type="submit" class="btn">Sign in</button>
                  </div>
            </form>
      </div>	
 </div>
    
        <hr style="float: left; width: 80%;margin-top: 15px; margin-left: 30px;"> 
        <i class="fa fa-facebook icon" style="margin-left: 10px;"></i>
        <i class="fa fa-instagram icon "style="margin-left: 10px;"></i>
        <i class="fa fa-twitter icon"style="margin-left: 10px;"></i>
        <script>

          function login(event){
              event.preventDefault();
          
          var email = document.getElementById('email').value;
          var password = document.getElementById('password').value;
         
      
        // Perform authentication using fetch API or any other method of choice
            fetch('/api/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    email: email,
                    password: password
                })
            })
            .then(response => {
                if (response.ok) {
                    // Authentication successful, redirect to the homepage or perform any other desired action
                    window.location.href = 'homepage.php';
                } else {
                    // Authentication failed, display error message
                    alert('Invalid email or password');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>
