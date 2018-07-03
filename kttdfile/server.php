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

				$res1 = mysqli_fetch_array($res);

				if($res1['account_type'] == 'Staff'){

				}

				$_SESSION['username'] = $username;
				header('location: home.php');
			}
		}
		else{
			$message = "Invalid Account";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
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
		}
		if(mysqli_num_rows($checkUsername) > 0){
			$message = "Username Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(mysqli_num_rows($checkEmail) > 0){
			$message = "Email Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(mysqli_num_rows($checkName1) > 0){
			$message = "Firstname and Lastname are Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(mysqli_num_rows($checkUsername1) > 0){
			$message = "Username Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		if(mysqli_num_rows($checkEmail1) > 0){
			$message = "Email Already Used.";
			echo "<script type='text/javascript'>alert('$message');</script>";
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