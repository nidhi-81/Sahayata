<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sahayata Grievance Cell | Login</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="complaint.css">
</head>
<body>

       <div class="header">
        <img src="skyispink2.jpg" width="1430" height="300">
        <div class="centered"><h1>Sahayata Grievance Cell</h1></div>
</div>

<div class="topnav">
<a href="index.html">Home</a>
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


            <?php
                   
                $conn = mysqli_connect("127.0.0.1", "root", "", "complaints_database");
                    
                    // Check connection
                    if($conn === false){
                        die("ERROR: Could not connect. "
                            .mysqli_connect_error());
                    }
                    if(isset($_POST['submit'])){
                    $fname =  $_POST['fname'];
                    $mname = $_POST['mname'];
                    $lname = $_POST['lname'];
                    $gender =  $_POST['gender'];
                    $dob = $_POST['dob'];
                    $email = $_POST['email'];
                    $mno = $_POST['mno'];
                    $state = $_POST['state'];
                    $district = $_POST['district'];
                    $pincode = $_POST['pincode'];
                    $locality = $_POST['locality'];
                    $streetno = $_POST['streetno'];
                    $complainttype = $_POST['complainttype'];
                    $subcomplainttype = $_POST['subcomplainttype'];
                    $complaintdescription = $_POST['complaintdescription'];
                    
                    }

                    
                    // Performing insert query execution
                    // here our table name is register
                    $trackid = uniqid();
                    $sql = "INSERT INTO register_complaints_table (fname,mname,lname,gender,dob,email,mno,state,district,pincode,locality,streetno,complainttype,subcomplainttype,complaintdescription,trackid,status)
                    VALUES ('$fname','$mname','$lname','$gender','$dob','$email','$mno','$state','$district','$pincode','$locality','$streetno','$complainttype','$subcomplainttype','$complaintdescription','$trackid','pending');";
                
                    if(mysqli_query($conn, $sql)){
                        echo "<h3>Your complaint has been recorded successfully!";
            
                        echo nl2br("Welcome,$fname $lname\n "
                            . "Your complaint_id is ".$trackid."\n");
                    } else{
                        echo "ERROR: Sorry $sql. "
                            . mysqli_error($conn);
                    }
                    mysqli_close($conn);
            ?>


    

    
        </div>
    <div class="card">
      <div class="text">
      <h2>WELCOME</h2>
      <p>Welcome to the Sahayata Grievance Cell</P>

<p>Following are the key features of the system:</P>

<p>Easy to use:</P>
<p>Allows registration of grievance 24 x 7. Portal is integrated vertically above with GoI (CPGRAMS) and below with the districts and its subordinate Officers Provision to submit the grievance in English.</P>

<p>Transparency/Accountability:</P>
Grievances cannot be deleted/tampered by anyone including the admin. Fortnightly reports of all Departments/Officers are submitted to the Lieutenant Governor. Unique Track Id available for tracking. Facility to submit clarification related to the grievance.</P>
<P>Issues which are not taken up for redress :</P>
Subjudice cases or any matter concerning judgment given by any court. Personal and family disputes. Service matters. RTI matters. Anything that impacts upon territorial integrity of the country or friendly relations with other countries. Suggestions.
</p>
    </div>
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
