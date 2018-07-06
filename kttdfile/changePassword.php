<?php

	include('server.php');

	$var = $_SESSION['username'];
	$sql = "SELECT * from account where username='$var' ";
	$res = mysqli_query($db,$sql);

	$result = mysqli_fetch_array($res);


	if(isset($_POST['currentPass'])){

		$currentPass = mysqli_real_escape_string($db,$_POST['currentPass']);
		$newPass = mysqli_real_escape_string($db,$_POST['newPass']);
		$confirmPass = mysqli_real_escape_string($db,$_POST['confirmPass']);

		$sql1 = "SELECT * from account where username='$var' and password='$currentPass' ";
		$res1 = mysqli_query($db,$sql1);

		if($newPass != $confirmPass){
			echo "<script> alert('Password did not match!'); </script> ";
		}
		else{
			if(mysqli_num_rows($res1) > 0){
				$ups = "UPDATE account set password='$newPass' where username='$var' ";
				mysqli_query($db,$ups);
				echo "<script> alert('Password has been Changed!'); </script> ";
			}
		else{
				echo "<script> alert('Incorrect Current Password'); </script> ";
			}
		}

		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	<h1>Change Password</h1>
	<form action="changePassword.php" method="POST">  
		 Username: <input type="text" name="username" value="<?php echo $result['username']; ?>" disabled>
		 <br>
		 Current Password: <input type="password" name="currentPass" required>
		 <br>
		 New Password:	<input type="password" name="newPass" required>
		 <br>
		 Confirm Password:	<input type="password" name="confirmPass" required>
		 <br>
		 <input type="submit" name="changePassBtn" value="Submit">
	</form>
	<a href="home.php">Go Back</a>
</body>
</html>