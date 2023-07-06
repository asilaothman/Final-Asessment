<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Uni_edu</title>

    <style>
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



      .navbar{
        text-align: center;
        margin-left: 10%;
      }
      .brand_name{
        font-size: 30px;
      }

    .about{
  padding: 3%;
  background-color: #099dff;
  font-size:40px;
  color: #FFF;
  margin: 5% 15%;
  text-align: center;
    }



    .btns {
      padding-left: 10%;
      padding-right: 5%;

    }

    .content{
      padding-left: 10%;
    }

    .sibtn{
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
     <span class="brand_name nav"><img src="imgs/logo.png" alt="logo"> </span>
     <a href="About page.html"<button class="button button1">About</button></a>
     <a href="Pricing page.html"<button class="button button2">pricing</button> </a>
     <a href="contact us page.html"<button class="button button3">let's talk</button></a>
  
    <?php
    // Check if the user is authenticated
    if (isset($_SESSION['username'])) {
      // User is authenticated
      echo '<span class="btns"><a href="homepage.html"<button class="sibtn">Homepage</button></a></span>';
    } else {
      // User is not authenticated
      echo '<span class="btns"><a href="signin.html"<button class="sibtn">Sign In</button></a></span>';
    }
  ?>
    </div>

    <div class="about"> About </div>
    <div class=" content"> <p> Uni E-Tutoring Is E-learning platform for students <br>
      to learn at their own pace and level up their knowledge. only need to pay
      some fixed price that meets students' need. </p>
      <p>
        Our tutors are trained professionally to teach students very well and to help them
        to get a straight A'. </p>
      <p>
        Uni E-Tutoring vision is to change the process of education and to make it easy for people <br>
      to connect worldwide without destruction. </p>
  
      <p>
        Our collaborate team aims to make learners become <br>
        creative thinker and to solve any problem out there.
  </p>

  </div>

  </body>
</html>
