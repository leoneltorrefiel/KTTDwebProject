<?php
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	$var = $_SESSION['username'];

	$sql = "SELECT * from account where username='$var' ";
	$res = mysqli_query($db,$sql);

	$result = mysqli_fetch_assoc($res);

?>
<!DOCTYPE html>
<html>
<head>
	<title>My Info</title>
</head>
<body>
	<h1>MY ACCOUNT</h1>

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

	<button><a href="staffAccount.php">Back</a></button>
	<br>
	<br>
	<form action="staff_info.php" method="post">
            <input type="submit" name="btnLogout" value="Logout">

    </form>

    


 

</body>
</html>