
<html>

    <body>

    <?php
        session_start();
	    $conn = mysqli_connect("127.0.0.1", "root", "", "complaints_database");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                .mysqli_connect_error());
        }
         
        // Taking all values from the form data(input)
		if(isset($_POST['submit'])){
        $locality =  $_POST['locality'];
        
		}

        $sql = "select * from register_complaints_table where locality = '$locality'";
     

        $result = $conn->query($sql);
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
</head>
<body>

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
                                    <br><input type="radio" name="yes" value="yes">
                                    <!-- name mai jo database ka naam hoga voh -->
                                    <!-- value mai jo us button ki apni valu h vo -->
                                    yes
                                    <input type="radio" name="yes" value="no">
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
</body>
</html>
<?php
        mysqli_close($conn);

?> 

 </body>
</html>
