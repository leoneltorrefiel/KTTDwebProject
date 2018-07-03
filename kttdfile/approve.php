<?php

	include('server.php');

	if(isset($_GET['approve'])){

			$id = $_GET['approve'];
			$message = "Are you sure to Approve this account?.";
			echo "<script type='text/javascript'>confirm('$message');</script>";
		
			if($message == true){

			$sql = "SELECT username,password,firstname,lastname,email,address,contact,profession,file_path,datetime,account_type from pending_account where pending_account_id='$id'";
			$row = mysqli_query($db,$sql);

			$result = mysqli_fetch_array($row);

			$username = $result['username'];
			$password = $result['password'];
			$firstname = $result['firstname'];
			$lastname = $result['lastname'];
			$email = $result['email'];
			$address = $result['address'];
			$contact = $result['contact'];
			$profession = $result['profession'];
			$file_path = $result['file_path'];
			$datetime = $result['datetime'];
			$account_type = $result['account_type'];

			$sql2 = "INSERT into account(username,password,email,file_path,firstname,lastname,address,contact,profession,account_type,dateApplied,dateApproved) values('$username','$password','$email','$file_path','$firstname','$lastname','$address','$contact','$profession','$account_type','$datetime', NOW())";
			 mysqli_query($db,$sql2);

			
			$sql3 = "DELETE from pending_account where pending_account_id='$id'";
			mysqli_query($db,$sql3);	
			
			echo "<meta http-equiv='refresh' content='0;url=pending_accounts.php'>";

			}

			else{
				return false;
			}
			
			
		
	}

	

?>
