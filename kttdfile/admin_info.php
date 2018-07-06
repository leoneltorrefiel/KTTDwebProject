<?php

	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	else{
		$var = $_SESSION['username'];
	
		$checkType = "SELECT account_type from account where username='$var'";
		$res = mysqli_query($db,$checkType);

		$res1 = mysqli_fetch_assoc($res);

		if($res1['account_type'] == 'Client'){
			header('location: home.php');
		}
	}

	$sql1 = "SELECT * from account where username='$var' ";
	$res2 = mysqli_query($db,$sql1);

	$result = mysqli_fetch_assoc($res2);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Info</title>
</head>
<body>
	<h1>My Info</h1>

	<p><?php echo "<img  height='30' width='30' src='".$result['file_path']."'>"; ?></p>
	<p>Username: <?php echo $result['username']; ?> </p>
	<p>Password: <?php echo $result['password']; ?> </p>
	<p>Email: <?php echo $result['email']; ?> </p>
	<p>Firstname: <?php echo $result['firstname']; ?> </p>
	<p>Lastname: <?php echo $result['lastname']; ?> </p>
	<p>Address: <?php echo $result['address']; ?> </p>
	<p>Contact: <?php echo $result['contact']; ?> </p>
	<p>Profession: <?php echo $result['profession']; ?> </p>
	<p>Account type: <?php echo $result['account_type']; ?> </p>
	<br>
	<br>
	<button><a href="staffAccount.php">Back</a></button>
	<br>
	<br>
	<form action="staff_info.php" method="post">
            <input type="submit" name="btnLogout" value="Logout">

    </form>
</body>
</html>