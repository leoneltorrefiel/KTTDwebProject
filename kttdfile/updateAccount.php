<?php
	include('server.php');

	if(isset($_GET['update'])){
		$id = $_GET['update'];
		$sql = "SELECT * from account where account_id='$id'";
		$row = mysqli_query($db,$sql);

		$result = mysqli_fetch_array($row);
	}
	if(isset($_POST['new_password'])){
		$id = mysqli_real_escape_string($db,$_POST['id']);
		$new_password = mysqli_real_escape_string($db,$_POST['new_password']);
		$new_firstname = mysqli_real_escape_string($db,$_POST['new_firstname']);
		$new_lastname = mysqli_real_escape_string($db,$_POST['new_lastname']);
		$new_address = mysqli_real_escape_string($db,$_POST['new_address']);
		$new_contact = mysqli_real_escape_string($db,$_POST['new_contact']);
		$new_profession = mysqli_real_escape_string($db,$_POST['new_profession']);
		$new_account_type = mysqli_real_escape_string($db,$_POST['new_account_type']);

	


		
			$exe = "UPDATE account set password='$new_password', firstname='$new_firstname', lastname='$new_lastname', address='$new_address', contact='$new_contact', profession='$new_profession', account_type='$new_account_type' where account_id ='$id'";
		//	$exe = "UPDATE account set product_name='$newproductName',price='$newproductPrice' where id='$id'";
			$res = mysqli_query($db,$exe);
			echo "<script> alert('Update Successfully'); </script> ";
			echo "<meta http-equiv='refresh' content='0;url=viewAccounts.php'>";
	// 		header('location: viewAccounts.php');
		
		

			
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Account</title>
</head>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<body>
	<div class=content2>
		<div class=header> <h2>Update Product</h2> </div>
		<form action="updateAccount.php" method="post" class=content>
			<div class=input-group>
			<input type="hidden" name="id" value="<?php echo $result[0]; ?>">
		
		
			Username: <?php echo $result['username'];?><br>
		
			
			Password: <input type="text" name="new_password" value="<?php echo $result[2];?>" required><br>
			
			Email: <?php echo $result['email'];?><br>
		
			
			Firstname: <input type="text" name="new_firstname" value="<?php echo $result[5];?>" required><br>
			
			Lastname: <input type="text" name="new_lastname" value="<?php echo $result[6];?>" required><br>
		
			
			Address: <input type="text" name="new_address" value="<?php echo $result[7];?>" required><br>
			
			Contact: <input type="text" name="new_contact" value="<?php echo $result[8];?>" required><br>
		
			
			Profession: <input type="text" name="new_profession" value="<?php echo $result[9];?>" required><br>
			
			Account type: <?php echo $result[10];?>
			<br>
			New Account type:
			<select name="new_account_type" required>
  				<option value="Client">Client</option>
  				<option value="Staff">Staff</option>
			</select>
		<br>
			
			<br>
			<input class=btn type="submit" value="Update" id="insert"><br>
			<a href="viewAccounts.php">Go back</a>
		</form>
	</div>
</body>
</html>

