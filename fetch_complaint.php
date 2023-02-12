
<?php
session_start();
?>

<html>

    <body>

    <?php
       
	    $conn = mysqli_connect("127.0.0.1", "root", "", "complaints_database");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                .mysqli_connect_error());
        }
         
        // Taking all values from the form data(input)
		if(isset($_POST['submit']))
        {
        $locality =  $_POST['locality'];
        echo"yes";
		}

        $sql = "select * from register_complaints_table where locality = '$locality'";
     

        $result = $conn->query($sql);
        //$rows=mysqli_result($result);
       
        //printf("Result set has %d rows.\n",$rowcount);
        
        //echo "$result->num_rows";
        
        
        if ( $result->num_rows > 0) 
        {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complaint</title>
    <link rel="icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="helpline.css">
</head>
<body>
<div class="header">
  
  <img src="skyispink2.jpg" width="1480" height="300">
  <div class="centered"><h1>Sahayata Grievance Cell</h1></div>
</div>

<div class="topnav">
    <a href="index.php">Home</a>
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

            <table align="left" border="lpx" style="width:600px; line-height:40px;">
                    <tr> <th colspan="5"><h3>details of registered complaints</h3></th></tr>
                    <t>
                        <th>locaity</th>
                        <th>comlaint type</th>
                        <th>sub complaint type</th>
                        <th>complaint description</th>
                        <th>leave your vote here</th>
                    </t>

    <?php
            while($row = $result->fetch_assoc()) 
            {   
                //echo $row[];
    ?>
                        <form action="vote.php" method="POST">
                    <tr>
                        <td><?php echo $row["locality"]; ?></td>
                        <td><?php echo $row["complainttype"]; ?></td>
                        <td><?php echo $row["subcomplainttype"]; ?></td>
                        <td><?php echo $row["complaintdescription"]; ?></td>
                        <!-- <label for ="gender"><b>LEAVE YOUR VOTE : </b></label> -->


                                <td>
                                    <br><input type="radio" name="yes" value="han">
                                    <!-- name mai jo database ka naam hoga voh -->
                                    <!-- value mai jo us button ki apni valu h vo -->
                                    yes
                                    <input type="radio" name="yes" value="nah">
                                    no
                                    <input type="submit" class="signupbtn" name="submit" value="submit">

                                    <!--  session assignment of trackid -->
                                    <!-- $_SESSION['trackid']=$trackid; -->
                                    <!-- count num of votes krna is still left -->
                                </td>

                        </form>
                    </tr>
                    
    <?php
            }}
    ?>
        </table>
        <!-- <input type="submit" class="signupbtn" name="submit" value="submit"> -->
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
<?php
        
        // Close connection
        mysqli_close($conn);

?> 

 </body>
</html>
