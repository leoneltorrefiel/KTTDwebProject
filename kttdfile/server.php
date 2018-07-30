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
				header('location: admin-my-technologies.php');
			}
			else{

				$checkType = "SELECT account_type from account where username='$username'";
				$res = mysqli_query($db,$checkType);

				$res1 = mysqli_fetch_assoc($res);

				if($res1['account_type'] == 'Staff'){
				$_SESSION['username'] = $username;
				header('location: staff-my-technologies.php');
				}
				if($res1['account_type'] == 'Client'){
					$_SESSION['username'] = $username;
					header('location: client-my-technologies.php');
				}
			}

		}
		else{	
			header('location: main.php?error=1');
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

		if(!empty($_POST['radio'])){
			$f_file = $_POST['radio'];
		}

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

		$sqlCheckName = "SELECT pending_tech_name from pending_tech where pending_tech_name='$tech_name' ";
		$resCheck = mysqli_query($db,$sqlCheckName);

		$sqlCheckName2 = "SELECT tech_name from technologies where tech_name='$tech_name' ";
		$resCheck2 = mysqli_query($db,$sqlCheckName2);

		
			$insert = "INSERT into 	pending_tech (pending_tech_name,pending_tech_description,pending_tech_owner,pending_tech_username,pending_tech_acct,pen_file_type,p_tech_filename,p_tech_filetype,p_tech_filepath,datetime) values ('$tech_name','$tech_description','$name','$s_username','$type','$f_file','$filename','$filetype','$filepath',NOW() ) ";
			mysqli_query($db,$insert);

			echo "<script>alert('Technologies Sent. Waiting for Approval.');</script>";
			

		
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
			header('location: main.php?error=2');
		}
	}

	if(isset($_POST['patentStepForward'])){
			
			$var1 = $_SESSION['patentStatus'];
			$var2 = $_SESSION['patentName'];
			$var1 = $var1 + 1;


			if($var1 > 12){
				echo "<script type='text/javascript'>alert('Done all steps!');</script>";
			}
			else{
				$sql = "UPDATE technologies SET status='$var1' where tech_name='$var2' ";
				$q =mysqli_query($db,$sql);

		
				echo "<script type='text/javascript'>alert('Status Updated!');</script>";

				header('location: admin-approved-technologies.php');
			}
			

	}

	if(isset($_POST['patentStepBackward'])){
			
			$var1 = $_SESSION['patentStatus'];
			$var2 = $_SESSION['patentName'];
			$var1 = $var1 - 1;


			if($var1 < 0){
				echo "<script type='text/javascript'>alert('Can't back!');</script>";
			}
			else{
				$sql = "UPDATE technologies SET status='$var1' where tech_name='$var2' ";
				$q =mysqli_query($db,$sql);

		
				echo "<script type='text/javascript'>alert('Status Updated!');</script>";

				header('location: admin-approved-technologies.php');
			}
			

	}

	if(isset($_POST['copyrightStepForward'])){
			
			$var1 = $_SESSION['copyStatus'];
			$var2 = $_SESSION['copyName'];
			$var1 = $var1 + 1;

			if($var1 > 6){
				echo "<script type='text/javascript'>alert('Done all steps!');</script>";
			}
			else{
				$sql = "UPDATE technologies SET status='$var1' where tech_name='$var2' ";
				mysqli_query($db,$sql);

				echo "<script type='text/javascript'>alert('Status Updated!');</script>";
				
				header('location: admin-approved-technologies.php');

			}

	}

	if(isset($_POST['copyrightStepBackward'])){
			
			$var1 = $_SESSION['copyStatus'];
			$var2 = $_SESSION['copyName'];
			$var1 = $var1 - 1;

			if($var1 < 0){
				echo "<script type='text/javascript'>alert('Can't back!');</script>";
			}
			else{

				$sql = "UPDATE technologies SET status='$var1' where tech_name='$var2' ";
				mysqli_query($db,$sql);

				echo "<script type='text/javascript'>alert('Status Updated!');</script>";
				
				header('location: admin-approved-technologies.php');

			}

	}

	if(isset($_POST['patentStepForward2'])){
			
			$var1 = $_SESSION['patentStatus'];
			$var2 = $_SESSION['patentName'];
			$var1 = $var1 + 1;


			if($var1 > 12){
				echo "<script type='text/javascript'>alert('Done all steps!');</script>";
			}
			else{
				$sql = "UPDATE technologies SET status='$var1' where tech_name='$var2' ";
				$q =mysqli_query($db,$sql);

		
				echo "<script type='text/javascript'>alert('Status Updated!');</script>";

				header('location: staff-approved-technologies.php');
			}
			

	}

	if(isset($_POST['patentStepBackward2'])){
			
			$var1 = $_SESSION['patentStatus'];
			$var2 = $_SESSION['patentName'];
			$var1 = $var1 - 1;


			if($var1 < 0){
				echo "<script type='text/javascript'>alert('Can't back!');</script>";
			}
			else{
				$sql = "UPDATE technologies SET status='$var1' where tech_name='$var2' ";
				$q =mysqli_query($db,$sql);

		
				echo "<script type='text/javascript'>alert('Status Updated!');</script>";

				header('location: staff-approved-technologies.php');
			}
			

	}

	if(isset($_POST['copyrightStepForward2'])){
			
			$var1 = $_SESSION['copyStatus'];
			$var2 = $_SESSION['copyName'];
			$var1 = $var1 + 1;

			if($var1 > 6){
				echo "<script type='text/javascript'>alert('Done all steps!');</script>";
			}
			else{
				$sql = "UPDATE technologies SET status='$var1' where tech_name='$var2' ";
				mysqli_query($db,$sql);

				echo "<script type='text/javascript'>alert('Status Updated!');</script>";
				
				header('location: staff-approved-technologies.php');

			}

	}

	if(isset($_POST['copyrightStepBackward2'])){
			
			$var1 = $_SESSION['copyStatus'];
			$var2 = $_SESSION['copyName'];
			$var1 = $var1 - 1;

			if($var1 < 0){
				echo "<script type='text/javascript'>alert('Can't back!');</script>";
			}
			else{

				$sql = "UPDATE technologies SET status='$var1' where tech_name='$var2' ";
				mysqli_query($db,$sql);

				echo "<script type='text/javascript'>alert('Status Updated!');</script>";
				
				header('location: staff-approved-technologies.php');

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