<?php
session_start();

if(isset($_SESSION['username']))
  {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahayata Grievance Cell | Participate In A Poll</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <img src="skyispink2.jpg" width="1480" height="300">
        <div class="centered">
          <h1>Sahayata Grievance Cell</h1>
        </div>


<div class="topnav">
    <a href="index1.php">Home</a>
    <a href="about_us.html">About Us</a>
    <a href="helpline.html">Emergency Helpline Numbers</a>
    <a href="logout.php" style="float:right">Logout</a>
    <a href="admin.html" style="float:right">Admin Login</a>
    <a href="login.html" style="float:right">Login</a>
    <a href="signup.html" style="float:right">Signup</a>
    
</div>

<div class="row">
    <div class="leftcolumn">
      <div class="card">
        <button class="button" style="vertical-align:middle">
          <span> 
            <a href="complaint2.html">Start a Poll</a>
          </span>
        </button>
        <button class="button" style="vertical-align:middle">
          <span> 
              <a href="location.php">Enter location</a>
              </span>
              </button>

     
      
      
     
        </div>
    <div class="card">
      
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Upcoming Events</h2>
      
      <hr><a href="updrive.html" style="color:#333">#SavePlants #SaveLife<br> Our Aim is to feed people globally. </a><br>
      <hr><a href="updrive.html" style="color:#333">#SavePlants #SaveLife<br> Our Aim is to feed people globally. </a><br>
      <hr><a href="updrive.html" style="color:#333">#SavePlants #SaveLife<br> Our Aim is to feed people globally. </a><br>
      <hr><a href="updrive.html" style="color:#333">#SavePlants #SaveLife<br> Our Aim is to feed people globally. </a><br><hr>
    </div>
    <div class="card">
      <h3>Past Events</h3>
        <div class="slideshow-container">

          <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="food1.jpg" style="width:100%">
            
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="food2.jpg" style="width:100%">
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="food3.jpg" style="width:100%">
          </div>
          
          <a class="prev" onclick="plusSlides(-1)">❮</a>
          <a class="next" onclick="plusSlides(1)">❯</a>
          
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span> 
            <span class="dot" onclick="currentSlide(2)"></span> 
            <span class="dot" onclick="currentSlide(3)"></span> 
          </div>
          
          <script>
          let slideIndex = 1;
          showSlides(slideIndex);
          
          function plusSlides(n) {
            showSlides(slideIndex += n);
          }
          
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }
          
          function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
          }
          </script>
          </div>
    <div class="card">
      <h3>Contact Us</h3>
      <div class="logoimg" ><img src="logo.png"width="200"height="200"style="vertical-align:middle"></div>
      <p>Want to know more about us</p>
      <p>Get in touch</p>
      <p><button class="button2" style="vertical-align:middle">
                <span> 
                    <a href="mailto: sahayatagrievancecell@gmail.com subject = Feedback&body = Message">MAIL US</a>
                    </span>
                    </button></p>
    </div>
  </div>
</div>

<div class="footer">
  <div class="topnav">
  <a href="faq.html">FAQ</a>
  <a href="feedback.html">Feedback</a>
  <a href="privacy.html">Terms & Privacy</a>
</div>
</div>

</body>
</html>



<?php
  }

   else{
    echo " please login to continue.";
     header ("Location: login.html");
     }
?>


