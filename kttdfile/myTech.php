<?php

	include('server.php');

	if(isset($_GET['view'])){

		$id = $_GET['view'];

		$sql = "SELECT * from technologies where tech_id='$id'";
		$res = mysqli_query($db,$sql);

		$temp = mysqli_fetch_assoc($res);
		$getName = $temp['tech_name'];
		$getStatus = $temp['status'];


	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Technolgies</title>
</head>
<body>
	<h1><?php echo $temp['tech_name'];  ?></h1>

	
</body>
</html>