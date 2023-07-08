<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>main</title>
</head>
<body>
<div class="main-container">
    <div class="navbar">
        <div class="contianer">
            <a href="#"><img src="imgs/logo.png" alt="logo"></a>
            <img id="mobile-nav" class="mobile-menu" src="imgs/menu.svg" alt="menu">
            <nav>
                <img id="mobile-exit" class="mobile-menu-exit" src="imgs/exit.svg" alt="exit">
                <ul class="nav-left">
                    <li><a href="About page.php">About</a></li>
                    <li><a href="Pricing page.php">Pricing</a></li>
                    <li><a href="contact us page.php">Let's Talk</a></li>
                </ul>  
                <ul class="nav-right">
                    <li class="nav-btn"><a href="signin.php">Sign In</a></li>
                </ul> 
            </nav>
        </div>
    </div>
    <section class="hero">
    <div class="contianer">
        <div class="left-col">
            <h1 class="head">every body can, learn and teach</h1>
            <p class="subhead">making education life easy </p>
            <a href="#home">SEE OUR SERVICES</a>
        </div>
        
            <img src="imgs/main-illu.svg" alt="photo" class="main-img">
        
    </div>
    </section>

        <ul class="media">
            <li class="icon"><a href="https://www.instagram.com/"><img src="imgs/instagram.svg" alt="instagram icon"></a></li>
            <li class="icon"><a href="https://twitter.com/"><img src="imgs/Twitter.svg" alt="twitter icon"></a></li>
            <li class="icon"><a href="https://www.facebook.com/"><img src="imgs/Facebook.svg" alt="facebook icon"></a></li>
        </ul>
    
    
</div>

   
<section id="home" class="home">
    <div class="contianer">
            <div class="section-title-contianer">
                <h3 class="headertitle">our services</h3>
                <p class="sub-title">Our work is the bridge to connect between the student and tutor</p>
            </div>
        </div>
        <div class="contianer" id="mcontianer">
            <div class="contianer1">
                <div class="on-left">
                    <h3 class="title1">PICK YOUR INSTRUCTOR</h3>
                </div>
                <div class="on-right">
                    <img src="imgs/card1 test.svg" alt="card one image" class="img-card-one">
                </div>
            </div>
            
                <div class="contianer2">
                    <div class="card2">
                        <h3 class="title">CHAT WITH YOUR INSTRUCTOR</h3>
                        <img src="imgs/card2.svg" alt="card two img" class="img-card-two">
                    </div>
                </div>
                <div class="contianer3">
                    <div class="card3">
                        <h3 class="title">BOOK YOUR LESSON</h3>
                        <img src="imgs/card3.svg" alt="card three img" class="img-card-three">
                    </div>
                </div>
            
            
    </div>
</section>
<section class="aft-home">
    <div class="contianer">
        <div class="left-col">
            <h1 class="title">Interested in UNI E_tutoring?</h1>
            <p class="subtitle">do you want to join us to start learning?</p>
        </div>
        <div class="btn">
            <a href="#" class="join-us">JOIN US</a>
        </div>
            
      
    </div>
</section>
<section class="down">
    <div class="nav-down">
        <div class="contianer">
            <a href="#"><img src="imgs/logo-bw.svg" alt="logo"></a>
            
            <div>
                <ul class="nav-left">
                    <li><a href="About page.php">About</a></li>
                    <li><a href="Pricing page.php">Pricing</a></li>
                    <li><a href="contact us page.php">Let's Talk</a></li>
                </ul>  
               
            </div>
        </div>
    </div>
</section>

    <script>
        const mobileBtn = document.getElementById('mobile-nav')
            nav = document.querySelector('nav');
            mobileBtnExit = document.getElementById('mobile-exit');
        mobileBtn.addEventListener('click', () =>{
            nav.classList.add('menu-btn');
        })
        mobileBtnExit.addEventListener('click', () =>{
            nav.classList.remove('menu-btn');
        })
    </script>
</body>
</html>
