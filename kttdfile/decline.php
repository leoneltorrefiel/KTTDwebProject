<?php

	include('server.php');

	if(isset($_GET['decline'])) {

		$id = $_GET['decline'];

		$sql = "DELETE from pending_account where pending_account_id='$id' ";
		$exe = mysqli_query($db,$sql);

		echo "<meta http-equiv='refresh' content='0;url=admin-pending-accounts.php'>";
		
		
	}

?>

