<?php
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	if($_SESSION['username'] != 'admin'){
		header('location: main.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
	<h1>ADMIN PAGE</h1>
	<br>
		<button><a href="pending_accounts.php">Pending Accounts</a></button>
	<br>
	<br>
		<button><a href="viewAccounts.php">View Approved Accounts</a></button>
	<br>
	<br>
	<form action="adminpage.php" method="post">
          <input type="submit" name="btnLogout" value="Logout">
    </form>

</body>
</html>