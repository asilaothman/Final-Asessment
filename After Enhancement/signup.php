<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/signup.css">
    
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
                <a href="About page.php"><li class="active" style="margin-left:10px; padding-left: 20px; padding-right: 20px;">ABOUT</li></a>
                <a href="Pricing page.php"><li class="active" style="margin-left:10px; padding-left: 20px; padding-right: 20px;">PRICING</li></a>
                <a href="contact us page.php"><li style="padding-left: 20px; padding-right: 20px;">LET'S TALK</li></a>
            </ul>
        </nav>
    </div>
      
    <div class="register-photo">
        <div class="form-container">
            <form method="post" onsubmit="return validateform()" name="signup">
                <div class="input-contain">
                    <i style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;" class="fa fa-user icon"></i>
                    <input class="input-fld" type="text" placeholder="First name" name="fname">
                    <i class="fa fa-user icon" style="margin-left: 10px; border-top-left-radius: 20px; border-bottom-left-radius: 20px;"></i>
                    <input class="input-fld" type="text" placeholder="Last name" name="lname">
                </div>
                <div class="input-contain">
                    <i class="fa fa-envelope icon" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;"></i>
                    <input class="input-fld" type="email" placeholder="Enter your Email" name="email">
                </div>
                <div class="input-contain">
                    <i class="fa fa-key icon" style="border-top-left-radius: 20px; border-bottom-left-radius: 20px;"></i>
                    <input class="input-fld" type="password"Password" name="psw">
                    <i class="fa fa-key icon" style="margin-left: 10px; border-top-left-radius: 20px; border-bottom-left-radius: 20px;"></i>
                    <input class="input-fld" type="password" placeholder="Confirm Password" name="cpsw">
                </div>
                <div class="input-contain">
                    <div class="input-boxx">
                        <p>Date of Birth:</p>
                        <select class="bear-dates" style="margin-top: 10px; padding: 10px; text-align: center; background-color: #ffffff; transition: 0.3s; outline: none; border: 1px solid #000000; border-radius: 3px;"></select>
                        <select class="bear-months" style="margin-top: 10px; padding: 10px; text-align: center; background-color: #ffffff; transition: 0.3s; outline: none; border: 1px solid #000000; border-radius: 3px;"></select>
                        <select class="bear-years" style="margin-top: 10px; padding: 10px; text-align: center; background-color: #ffffff; transition: 0.3s; outline: none; border: 1px solid #000000; border-radius: 3px;"></select>
                    </div>
                </div>
                <div class="input-contain">
                    <div class="input-group">
                        <div class="input-box">
                            <p>Gender:</p>
                            <input type="radio" id="b1" name="gender" value="male" checked class="radio">
                            <label for="b1">Male</label>
                            <input type="radio" id="b2" name="gender" value="female" class="radio">
                            <label for="b2" style="margin-left:5px;">Female</label>
                        </div>
                    </div>
                    <div class="input-group" style="margin-left: 10px;">
                        <div class="input-box">
                            <p>You are a:</p>
                            <input type="radio" id="b3" name="role" value="teacher" checked class="radio">
                            <label for="b3">Teacher</label>
                            <input type="radio" id="b4" name="role" value="student" class="radio">
                            <label for="b4" style="margin-left:5px;">Student</label>
                        </div>
                    </div>
                </div>
                <a class="already" href="signin.php">Already have an account? Login here.</a>
                <div class="form-group">
                    <button class="btn" type="submit">Sign Up</button>
                </div>
            </form>
            <div class="image-hold"></div>
        </div>
    </div>	
    <footer style="margin-bottom:30px;">    
        <hr style="float: left; width: 80%; margin-top: 15px; margin-left: 30px;"> 
        <i class="fa fa-facebook icon" style="margin-left: 10px;"></i>
        <i class="fa fa-instagram icon" style="margin-left: 10px;"></i>
        <i class="fa fa-twitter icon" style="margin-left: 10px;"></i>
    </footer>    
    <script>
        function validateform(){
            var fname = document.signup.fname.value;
            var lname = document.signup.lname.value;
            var email = document.signup.email.value;
            var psw = document.signup.psw.value;
            var cpsw = document.signup.cpsw.value;
            var gender = document.signup.gender.value;
            var role = document.signup.role.value;
            var date = document.querySelector('.bear-dates').value;
            var month = document.querySelector('.bear-months').value;
            var year = document.querySelector('.bear-years').value;
         
            if (fname == null || fname == ""){
                alert("First name can't be blank");
                return false;
            } else if(lname == null || lname == ""){
                alert("Last Name can't be blank.");
                return false;
            } else if(email == null || email == ""){
                alert("Email can't be blank.");
                return false;
            } else if(psw == null || psw == ""){
                alert("Password can't be blank.");
                return false;
            } else if(cpsw == null || cpsw == ""){
                alert("Password confirmation can't be blank.");
                return false;
            } else if(psw != cpsw){
                alert("Password did not match.");
                return false;
            } else {
                // Redirect to the login page or homepage
                window.location.href = 'signin.php';
            }
        }
    </script>
    <script src="calender.js" type="text/javascript"></script>
    <script type="text/javascript">
        dates('option');
        months('option');
        years('option', 1990, 2021);
    </script>
</body>
</html>


