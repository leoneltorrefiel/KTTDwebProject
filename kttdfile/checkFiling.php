<?php

	include('server.php');

	if(isset($_GET['check'])){

		$tName = $_GET['check'];

		$checkType = "SELECT file_type from technologies where tech_id='$tName' ";
		$resCheckType = mysqli_query($db,$checkType);

		$getType = mysqli_fetch_assoc($resCheckType);
		$varType = $getType['file_type'];

		if($getType['file_type'] == 'Copyright'){
			$sql = "SELECT tech_name from technologies where tech_id='$tName' ";
			$res = mysqli_query($db,$sql);

   			$getName = mysqli_fetch_assoc($res);
   			$varName = $getName['tech_name'];
   			$_SESSION['copyName'] = $varName;

   			$sql1 = "SELECT status from technologies where tech_id='$tName' ";
			$res1 = mysqli_query($db,$sql1);

   			$getName = mysqli_fetch_assoc($res1);
   			$varName1 = $getName['status'];
   			$_SESSION['copyStatus'] = $varName1;

			header('location: admin-update-copyright-status.php');
		}

		if($getType['file_type'] == 'Patent'){
			$sql = "SELECT tech_name from technologies where tech_id='$tName' ";
			$res = mysqli_query($db,$sql);

   			$getName = mysqli_fetch_assoc($res);
   			$varName = $getName['tech_name'];
   			$_SESSION['patentName'] = $varName;

   			$sql1 = "SELECT status from technologies where tech_id='$tName' ";
			$res1 = mysqli_query($db,$sql1);

   			$getName = mysqli_fetch_assoc($res1);
   			$varName1 = $getName['status'];
   			$_SESSION['patentStatus'] = $varName1;

			header('location: admin-update-patent-status.php');
		}
	}

?>