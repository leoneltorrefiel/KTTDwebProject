<?php

	include('server.php');

	if(isset($_GET['approve'])){

			$id = $_GET['approve'];
			$message = "Are you sure to Approve this idea?.";
			echo "<script type='text/javascript'>confirm('$message');</script>";
		
			if($message == true){

			$sql = "SELECT pending_tech_name,pending_tech_description,pending_tech_owner,pending_tech_username,pending_tech_acct,pen_file_type,p_tech_filename,p_tech_filetype,p_tech_filepath,datetime from pending_tech where pending_tech_id='$id'";
			$row = mysqli_query($db,$sql);

			$result = mysqli_fetch_array($row);

			$pending_tech_name = $result['pending_tech_name'];
			$pending_tech_description = $result['pending_tech_description'];
			$pending_tech_owner = $result['pending_tech_owner'];
			$pending_tech_username = $result['pending_tech_username'];
			$pending_tech_acct = $result['pending_tech_acct'];
			$p_tech_filename = $result['p_tech_filename'];
			$p_tech_filetype = $result['p_tech_filetype'];
			$p_tech_filepath = $result['p_tech_filepath'];
			$f_file = $result['pen_file_type'];
			$datetime = $result['datetime'];

			$sql2 = "INSERT into technologies(tech_name,tech_description,tech_owner,tech_username,tech_acct,tech_filename,tech_filetype,tech_filepath,file_type,date_approved,date_request) values('$pending_tech_name','$pending_tech_description','$pending_tech_owner','$pending_tech_username','$pending_tech_acct','$p_tech_filename','$p_tech_filetype','$p_tech_filepath','$f_file',NOW(),'$datetime')";
			 mysqli_query($db,$sql2);

			
			$sql3 = "DELETE from pending_tech where pending_tech_id='$id'";
			mysqli_query($db,$sql3);	
			
			echo "<meta http-equiv='refresh' content='0;url=pending_tech.php'>";

			}

			else{
				return false;
			}
			
			
		
	}

	

?>
