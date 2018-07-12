<?php

	include('server.php');

	if(isset($_GET['dl'])){
		$id = $_GET['dl'];
		
		$sql = "SELECT * from technologies where tech_id='$id' ";
		$res = mysqli_query($db,$sql);

		$getRes = mysqli_fetch_assoc($res);
		$getFile = $getRes['tech_filename'];
		$getPath = $getRes1['tech_filepath'];
		$getTech = $getRes2['tech_name'];

		header('Content-tech: '.$getTech);
		header('Content-type: '.$getPath);
		header('Content-disposition: attachment; filename="'.$getFile.'"');
		readfile('files/'.$getFile);

		exit();
	}


	if(isset($_GET['download'])){
		$id = $_GET['download'];
		
		$sql = "SELECT * from pending_tech where pending_tech_id='$id' ";
		$res = mysqli_query($db,$sql);

		$getRes = mysqli_fetch_assoc($res);
		$getFile = $getRes['p_tech_filename'];
		$getPath = $getRes1['p_tech_filepath'];
		$getTech = $getRes2['pending_tech_name'];

		header('Content-tech: '.$getTech);
		header('Content-type: '.$getPath);
		header('Content-disposition: attachment; filename="'.$getFile.'"');
		readfile('files/'.$getFile);

		exit();
	}
?>	