<?php

	include('server.php');

	if(isset($_GET['approve'])){

			$id = $_GET['approve'];

			$sql = "SELECT * from peding_request where id='$id'";
			$row = mysqli_query($db,$sql);

			$result = mysqli_fetch_assoc($row);

			$username = $result['username'];
			$firstname = $result['firstname'];
			$lastname = $result['lastname'];
			$email = $result['email'];
			$contact = $result['contact'];
			$reqDate = $result['reqDate'];
			$reason = $result['reason'];


			$sql2 = "INSERT into approvedreq(username,firstname,lastname,email,contact,reqdate,reason) values('$username','$firstname','$lastname','$email','$contact','$reqDate','$reason') ";
			mysqli_query($db,$sql2);

			
			$sql3 = "DELETE from peding_request where id='$id'";
			mysqli_query($db,$sql3);	
			
			echo "<meta http-equiv='refresh' content='0;url=admin-pending-request.php'>";
			
			
		
	}

	

?>
