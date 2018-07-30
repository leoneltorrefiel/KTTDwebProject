<?php

	include('server.php');

	if(isset($_GET['decline'])) {

		$id = $_GET['decline'];

		$sql = "DELETE from pending_tech where pending_tech_id='$id' ";
		mysqli_query($db,$sql);

		echo "<meta http-equiv='refresh' content='0;url=admin-pending-technologies.php'>";	
		
	
	}

?>