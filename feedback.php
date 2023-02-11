<?php				
	  $conn = mysqli_connect("127.0.0.1", "root", "", "complaints_database");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                .mysqli_connect_error());
        }

		if(isset($_POST['submit']))
        {
		$feedback = $_POST['feedback'];
        $email = $_POST['email'];
        echo "your feedback has been recorded successfully";
		}
            $p="insert into feedback_table (email, feedback)
            values ('$email' , '$feedback')";
            $result2=mysqli_query($conn, $p);
                  
        mysqli_close($conn);
?>
