<?php

	include('server.php');

	if(isset($_GET['decline'])) {

		$id = $_GET['decline'];
		$message = "Are you sure to Decline this idea?.";
		echo "<script type='text/javascript'>confirm('$message');</script>";

		if($message == true){
			$sql = "DELETE from pending_tech where pending_tech_id='$id' ";
			mysqli_query($db,$Sql);

			echo "<meta http-equiv='refresh' content='0;url=pending_tech.php'>";	
		}
		else{
			return false;
		}

	}

?>