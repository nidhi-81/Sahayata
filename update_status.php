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
            
            $status =  $_POST['status'];
            echo " polling successful";
            echo " you voted : ".$status;
            //$locality=$_SESSION['username'];

            if( $status==="approved")
            {
                $sql2 = "UPDATE  register_complaints_table   set  status ='approved'";//where locality=$locality";
                $result2 = $conn->query($sql2);
            }

            if( $status==="resolved")
            {
                $sql2 = "UPDATE  register_complaints_table   set  status='resolved'  ";
                $result2 = $conn->query($sql2);
                
            }
                
         }
        
?>
