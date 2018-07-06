<?php

	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	$var = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
  
  
  
	<title>Add Tech</title>
</head>
<body>
	<center>
		<?php echo $var; ?>
	<div class"container">
	  <form action="addtech.php" method="post" enctype="multipart/form-data">
	  	<h1>Add New Technology</h1>
    <p>Please fill in this form to add new tech.</p>
    <hr>
		
		Technology Name:
		<br>
		<input type="text" name="tech_name">
		<br>
        Technology Description:
        <br>
        <textarea name="tech_description" rows="10" cols="60"></textarea>
        <br>
        <input type="file" name="file" value="">
        <br>
        <input type="submit" name="techSubmit" value="Submit">
 
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
</style>
