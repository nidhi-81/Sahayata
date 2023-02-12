<?php
session_start();

if(isset($_SESSION['username']))
  {
    echo $_SESSION['username'];
    ?>

<!DOCTYPE html>
<html lang="en">
    <style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
      .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
      }
      .container {
        padding: 2px 16px;
      }
      h2{
        color:white;
      }
      </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahayata Grievance Cell | Drive</title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <body>

       <div class="header">
  
  <img src="skyispink2.jpg" width="1480" height="300">
  <div class="centered"><h1>Sahayata Grievance Cell</h1></div>
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
        <h2 style="background-color: #333;">Upcoming Drives</h2>
        <div class="row">
           <div class="rightcolumn" style="float:left" >
        <div class="card" width="40%">
        <img src="plant drive.jpg" alt="img" width="170">
       <div class="container">
    <h4><b>Plantation Drive</b></h4>
    <p>
        We on Monday began our annual plantation drive on Monday. </p>
        <a href="updrive.html" style="color:#333" >Know more</a>
  </div>
    </div>
  </div>
  <div class="rightcolumn" style="float:right" >
    <div class="card"  width="33%">
  <img src="plant drive.jpg" alt="img" width="170">
  <div class="container">
<h4><b>Plantation Drive</b></h4>
<p>
   We on Monday began our annual plantation drive on Monday. </p>
   <a href="updrive.html" style="color:black" >Know more</a>
</div> 
</div> 
   </div>
   <div class="rightcolumn" style="float:right" >
    <div class="card"  width="33%">
  <img src="plant drive.jpg" alt="img" width="170">
  <div class="container">
<h4><b>Plantation Drive</b></h4>
<p>
   We on Monday began our annual plantation drive on Monday. </p>
   <a href="updrive.html" style="color:#333" >Know more</a>
</div> 
</div> 
   </div>
   <div class="rightcolumn" width>
    <div class="card"  width="40%">
  <img src="plant drive.jpg" alt="img" width="170">
  <div class="container">
<h4><b>Plantation Drive</b></h4>
<p>
   We on Monday began our annual plantation drive on Monday.</p>
   <a href="updrive.html" style="color:#333">Know more</a>
</div> 
</div> 
   </div>
   </div>
   </div>
    <div class="card">
        <div class="card">
            <h2 style="background-color: #333;">Past Drives</h2>
            <div class="row">
              <div class="rightcolumn" style="float:left">
           <div class="card" width="40%">
           <img src="food drive.jpg" alt="img" width="165">
          <div class="container">
       <h4><b>Food Drive</b></h4>
       <p>
           We fed 30 lakh + people globally</p>
           <a href="pastdrive.html" style="color:#333">Know more</a>
     </div>
       </div>
     </div>
     <div class="rightcolumn">
       <div class="card"  width="40%" height="50%">
     <img src="food drive.jpg" alt="img" width="162">
     <div class="container">
   <h4><b>Food Drive</b></h4>
   <p>
      We fed 30 lakh + people globally</p>
      <a href="pastdrive.html" style="color:#333">Know more</a>
   </div> 
   </div> 
      </div>
      <div class="rightcolumn" style="float:right">
        <div class="card"  width="40%" height="50%">
      <img src="food drive.jpg" alt="img" width="162">
      <div class="container">
    <h4><b>Food Drive</b></h4>
    <p>
       We fed 30 lakh + people globally</p>
       <a href="pastdrive.html" style="color:black">Know more</a>
    </div> 
    </div> 
       </div>
      <div class="rightcolumn">
        <div class="card"  width="40%">
      <img src="food drive.jpg" alt="img" width="162">
      <div class="container">
    <h4><b>Food Drive</b></h4>
    <p>
       We fed 30 lakh + people globally</p>
       <a href="pastdrive.html" style="color:black" >Know more</a>
    </div> 
    </div> 
       </div>
      </div>
</div>
  </div>
</div>
  <div class="rightcolumn">
    <div class="card">
      <P> Didn't find what you were looking for!?</P>
      <button class="button2" style="vertical-align:middle">
        <span> 
            <a href="RegisterDrive.html">Start Your Own Drive</a>
            </span>
            </button>
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

 
