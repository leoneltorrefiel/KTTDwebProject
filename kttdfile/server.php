<?php
	
	session_start();

	$db = mysqli_connect('localhost','root','','kttd');


	if(isset($_POST['btnLogin'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

		$check = "SELECT * FROM account where username='$username' and password='$password' ";
		$result = mysqli_query($db,$check);

		

		if(mysqli_num_rows($result) > 0){
			if($username == 'admin'){
				$_SESSION['username'] = $username;
				header('location: adminpage.php');
			}
			else{

				$checkType = "SELECT account_type from account where username='$username'";
				$res = mysqli_query($db,$checkType);

				$res1 = mysqli_fetch_assoc($res);

				if($res1['account_type'] == 'Staff'){
				$_SESSION['username'] = $username;
				header('location: staffAccount.php');
				}
				if($res1['account_type'] == 'Client'){
					$_SESSION['username'] = $username;
					header('location: home.php');
				}
			}

		}
		else{
			$message = "Invalid Account";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

	/*if(isset($_POST['btnBack'])){
		$var = $_SESSION['username'];

		$check = "SELECT account_type from account where username='$var' ";
		$res = mysqli_query($db,$check);

		$res1 = mysqli_fetch_assoc($res);

		if($res1['account_type'] == 'Client'){
			header('location: home.php');
		}
		if($res1['account_type'] == 'Staff'){
			header('location: staffAccount.php');
		}
	}*/

	if(isset($_POST['techSubmit'])){
		$filetmp = $_FILES['file']['tmp_name'];
		$filename = $_FILES['file']['name'];
		$filetype = $_FILES['file']['type'];
		$filepath = "files/".$filename;
		move_uploaded_file($filetmp, $filepath);

		$tech_name = mysqli_real_escape_string($db,$_POST['tech_name']);
		$tech_description = mysqli_real_escape_string($db,$_POST['tech_description']);

		$s_username = $_SESSION['username'];

		$getFirstname = "SELECT firstname from account where username='$s_username'";
				$sql = mysqli_query($db,$getFirstname);
				$res1 = mysqli_fetch_assoc($sql);
		$getLastname = "SELECT lastname from account where username='$s_username'";
				$res = mysqli_query($db,$getLastname);
				$res2 = mysqli_fetch_assoc($res);
		$getType = "SELECT account_type from account where username='$s_username'";
				$res3 = mysqli_query($db,$getType);
				$res4 = mysqli_fetch_assoc($res3);

		$name = $res1['firstname']." ".$res2['lastname'];
		$type = $res4['account_type'];

		$insert = "INSERT into 	pending_tech (pending_tech_name,pending_tech_description,pending_tech_owner,pending_tech_username,pending_tech_acct,p_tech_filename,p_tech_filetype,p_tech_filepath,datetime) values ('$tech_name','$tech_description','$name','$s_username','$type','$filename','$filetype','$filepath',NOW() ) ";
			mysqli_query($db,$insert);
			$message = "Techonology Added, waiting for aprroval.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
			header('location: home.php');
	}


	if(isset($_POST['btnRegister'])){


		$filetmp = $_FILES['picture']['tmp_name'];
		$filename = $_FILES['picture']['name'];
		$filetype = $_FILES['picture']['type'];
		$filepath = "image/".$filename;
		move_uploaded_file($filetmp, $filepath);


		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$firstname = mysqli_real_escape_string($db,$_POST['firstname']);
		$lastname = mysqli_real_escape_string($db,$_POST['lastname']);
		$address = mysqli_real_escape_string($db,$_POST['address']);
		$contact = mysqli_real_escape_string($db,$_POST['contact']);
		$profession = mysqli_real_escape_string($db,$_POST['profession']);
		$account_type = mysqli_real_escape_string($db,$_POST['account_type']);

		$sql1 = "SELECT * from pending_account where firstname='$firstname' AND lastname='$lastname'";
		$checkName = mysqli_query($db,$sql1);

		$sql2 = "SELECT * from pending_account where username='$username'";
		$checkUsername = mysqli_query($db,$sql2);

		$sql3 = "SELECT * from pending_account where email='$email'";
		$checkEmail = mysqli_query($db,$sql3);

		$sql4 = "SELECT * from account where firstname='$firstname' AND lastname='$lastname'";
		$checkName1 = mysqli_query($db,$sql4);

		$sql5 = "SELECT * from account where username='$username'";
		$checkUsername1 = mysqli_query($db,$sql5);

		$sql6 = "SELECT * from account where email='$email'";
		$checkEmail1 = mysqli_query($db,$sql6);


		if(mysqli_num_rows($checkName) > 0){
			$message = "Firstname and Lastname are Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('location: register.php');
		}
		if(mysqli_num_rows($checkUsername) > 0){
			$message = "Username Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('location: register.php');
		}
		if(mysqli_num_rows($checkEmail) > 0){
			$message = "Email Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('location: register.php');
		}
		if(mysqli_num_rows($checkName1) > 0){
			$message = "Firstname and Lastname are Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('location: register.php');
		}
		if(mysqli_num_rows($checkUsername1) > 0){
			$message = "Username Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('location: register.php');
		}
		if(mysqli_num_rows($checkEmail1) > 0){
			$message = "Email Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('location: register.php');
		}
		else{
			$insert = "INSERT into pending_account(username,password,firstname,lastname,email,address,contact,profession,file_name,file_type,file_path,datetime,account_type) values ('$username','$password','$firstname','$lastname','$email','$address','$contact','$profession','$filename','$filetype','$filepath',NOW(),'$account_type') ";
			mysqli_query($db,$insert);

			$message = "Successfully Registered.";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('location: main.php');
		}
	}


	if(isset($_POST['btnLogout'])){

		$message = "Log out this account?.";
		echo "<script type='text/javascript'>confirm('$message');</script>";

		if($message == true){
			session_destroy();
			unset($_SESSION['username']);
			header('location: main.php');
		}
		else{
			return false;
		}
		
	}




?>