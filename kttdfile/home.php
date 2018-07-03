<?php
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	if($_SESSION['username'] == 'admin'){
		header('location: main.php');
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>HOME PAGE</h1>
	<br>
	<h3>MY INFO</h3>
	<br>
	<h3>MY DATA</h3>
	<br>
	<form action="home.php" method="post">
            <input type="submit" name="btnLogout" value="Logout">
    </form>
</body>
</html>