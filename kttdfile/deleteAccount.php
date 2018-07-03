<?php

	include('server.php');

	if(isset($_GET['remove'])) {

		$id = $_GET['remove'];
		$message = "Are you sure to Delete this account?.";
		echo "<script type='text/javascript'>confirm('$message');</script>";

		if($message == true){
			$sql = "DELETE from account where account_id='$id' ";
			mysqli_query($db,$sql);

			echo "<meta http-equiv='refresh' content='0;url=viewAccounts.php'>";
		}
		else{
			return false;
		}

	}

?>