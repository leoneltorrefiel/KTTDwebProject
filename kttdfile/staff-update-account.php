<?php
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	if($_SESSION['username'] == 'admin'){
		header('location: admin-my-technologies.php');
	}
	else{
    $var = $_SESSION['username'];
  
    $checkType = "SELECT account_type from account where username='$var'";
    $res = mysqli_query($db,$checkType);

    $res1 = mysqli_fetch_assoc($res);

    if($res1['account_type'] == 'Client'){
      header('location: client-my-technologies.php');
    	}
  	}

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
			echo "<meta http-equiv='refresh' content='0;url=staff-approved-accounts.php'>";
	// 		header('location: viewAccounts.php');
		
		

			
	}
?>

<!DOCTYPE html>
<html>
<title>Staff's Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./assets-admin/css/w4.css">
<link rel="stylesheet" href="./assets-admin/css/font-railway.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/all.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/all.min.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/brands.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/brands.min.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/fontawesome.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/fontawesome.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/regular.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/regular.min.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/solid.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/solid.min.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/svg-with-js.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/svg-with-js.min.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/v4-shims.css">
<link rel="stylesheet" href="./assets-admin/css/fontawesome-free-5.1.1-web/css/v4-shims.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">KTTD</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="./assets-admin/images/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $var; ?></strong></span><br>
      <form action="home.php" method="post">
        <input class="w3-bar-item w3-button" type="submit" name="btnLogout" value="Logout ->">
      </form>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="./staff-my-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  My Technologies</a>
    <a href="./staff-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  My Information</a>
    <a href="./staff-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i> Change Password</a>/
    <a href="./staff-add-new-technology.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Add New Technology</a>
    <a href="./staff-approved-accounts.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-bullseye fa-fw"></i> Approved Accounts</a>    
    <a href="./staff-approved-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i> Approved Technologies</a>    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Update Account   </b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
      	<form action="staff-update-account.php" method="post">
        <table class="w3-table w3-striped w3-white">
        	
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>Username: </td>
            <td><i><input type="text" name="" value="<?php echo $result['username'];?>" disabled></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Password: </td>
            <td><i><input type="text" name="new_password" value="<?php echo $result[2];?>" required></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>Email: </td>
            <td><i><input type="text" name="" value="<?php echo $result['email'];?>" disabled></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>Firstname: </td>
            <td><i><input type="text" name="new_firstname" value="<?php echo $result[5];?>" required></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Lastname: </td>
            <td><i><input type="text" name="new_lastname" value="<?php echo $result[6];?>" required></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>Address: </td>
            <td><i><input type="text" name="new_address" value="<?php echo $result[7];?>" required></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>Contact: </td>
            <td><i><input type="text" name="new_contact" value="<?php echo $result[8];?>" required></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>Profession: </td>
            <td><i><input type="text" name="new_profession" value="<?php echo $result[9];?>" required></i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>Account type: </td>
            <td><?php echo $result[10];?> </td>
            <td></td>
          </tr>
          <tr>
          	<td>	
          	</td>
          	<td>
			<input class=btn type="submit" value="Update" id="insert">
          	</td>
          </tr>
      
        </table>
        </form>
      </div>
    </div>
  </div>
  <hr>
  

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>