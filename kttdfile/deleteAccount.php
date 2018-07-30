<?php

	include('server.php');

	if(isset($_GET['remove'])) {

		$id = $_GET['remove'];

		$sql = "DELETE from account where account_id='$id' ";
		mysqli_query($db,$sql);

		echo "<meta http-equiv='refresh' content='0;url=admin-my-technologies.php'>";
		

	}

?>