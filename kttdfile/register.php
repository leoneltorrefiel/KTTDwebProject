<?php

	include('server.php');


?>

<!DOCTYPE html>
<html class="fadeIn">
<head>
	<title>Register Account</title>
</head>
<body>
	<center>
	<div class"container">
	  <form action="register.php" method="post" enctype="multipart/form-data">
	  	<h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
		
		<input type="text" name="username" placeholder="Username" required>
		<br>
		<input type="password" name="password" placeholder="Password" required>
		<br>
		<input type="text" name="email" placeholder="Email " required>
		<br>
		<input type="text" name="firstname" placeholder="Firstname" required>
		<br>
		<input type="text" name="lastname" placeholder="Lastname" required>
		<br>
		<input type="text" name="address" placeholder="Address" required>
		<br>
		<input type="text" name="contact" placeholder="Contact" required>
		<br>
		<input type="text" name="profession" placeholder="Profession" required>
		<br>
		
		Account:  
		<select name="account_type" required>
  			<option value="Client">Client</option>
  			<option value="Staff">Staff</option>
		</select>
		<br>
		Select Image <input type="file" name="picture" value="Select Image" id="image" required>
		<br>&nbsp
		
        <input type="submit" name="btnRegister" value="Submit" id="insert">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        
        <button><a href="main.php">Cancel</a></button>


	</form>
</div>
</center>
</body>	
</html>
<style type="text/css">
	.container {
  padding: 16px;
  position: relative;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 30%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>>