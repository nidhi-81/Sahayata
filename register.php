<html>
	<head>
		<title>Registration form</title>
        <link rel="stylesheet" href="style.css">
		<style>
			body{
				color: #d2d636;
				width : 1000px;
				height:500px;
			}
			.submit{
				background: #62af5e;
				color: white;
				padding: 10px 20px;
				border: none;
			}
			.reset{
				background: #d9544f;
				color: white;
				padding: 10px 20px;
				border: none;
			}
		</style>
	</head>
	<body>
        
         <header>
        <img src="Emblem_of_India_(gold).svg.png" width="200"height="200" src="">
        <H1>ONLINE COMPLAINT CELL 
        </H1>
    </header>
    
    <nav>
        <a href="index.html">HOME</a>
		<a href="about_us.html">ABOUT US</a>

        <!-- <a href="#">QUICK LINKS</a> -->
        <a href="register.php">SIGNUP</a>
        <a href="login.php">LOGIN</a>
        <a href="Help.html">HELP</a>

    </nav>

		<form action="insert.php" method="POST" >
		<table width="400px" cellpadding="10" cellspacing="0">
            <tr bgcolor="#de8704">
                <td colspan="2">SignUp</td>			
            </tr>
			<tr bgcolor="#222536">
				<td align="right">First Name</td>
				<td><input type="text" placeholder="Enter First Name" name ="fname"></td>
			</tr>
			<tr bgcolor="#222536">
				<td align="right">Last Name</td>
				<td><input type="text" placeholder="Enter Last Name" name ="lname"></td>
			</tr>

			<tr bgcolor="#222536">
			<td align="right">Gender</td>
			<td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value ="male">Male
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value ="female">Female
			<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?>
               value="other">Other
			</td>
			</tr>
			<tr bgcolor="#222536">
				<td align="right">Country</td>
				<td ><select name ="country">
					<option >Country</option>
					<option>India</option>
					<option>Others</option>
				</select></td>
			</tr>
						<tr bgcolor="#222536">
				<td align="right">Complaint type</td>
				<td>
				<select name ="ctype">
				
					<option>1</option>
					<option>2</option>
					<option>3</option>
				</select>
				</td>
			</tr>
			<tr bgcolor="#222536">
			<td align ="right"> Complaint Descriptions</td>
			<td>
			<textarea name ="descriptions"> </textarea></td>
			<tr bgcolor="#222536">
				<td align="right">E-mail</td>
				<td><input type="text" placeholder="Enter E-mail" name ="email"></td>
			</tr>
			<tr bgcolor="#222536">
				<td align="right">Phone</td>
				<td><input type="text" placeholder="Enter Phone" name ="mno"></td>
			</tr>
			<tr bgcolor="#222536">
				<td align="right">Password</td>
				<td><input type="password" name ="password"></td>
			</tr>
			<!--
			<tr bgcolor="#222536">
				<td align="right">Confirm Password</td>
				<td><input type="password" name ="cpassword"></td>
			</tr>-->
			<tr bgcolor="#222536">
				<td></td>
				<td><input type="checkbox">I Agree to the Terms of use</td>
			</tr>
			
			<tr bgcolor="#de8704">
				<td colspan="2" align="right">
					<input type="Submit" name="submit" class="submit" method ="get">
					<input type="Reset" value="Cancel" class="reset">
				</td>
			</tr>
		</table>
	
    <footer>
        <nav>
            
            <a href="privacy.html">Terms & Privacy</a>
            <a href="feedback.html">FEEDBACK</a>
            <a href="faq.html">FAQs</a>
            <!-- <a href="policy.html">POLICY</a> -->
            <!-- <a href="#">COPYRIGHT</a> -->

        </nav>
    </footer>
    <p class="message">If registered? <a href="login.php">Go to at LogIn page</p>
	</body>
</html>
  
