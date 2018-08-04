<?php
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
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

	if(isset($_GET['update1'])){
		$id = $_GET['update1'];
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
<title>Admin's Page</title>
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
  <span class="w3-bar-item w3-right"><a href="#" class="floatRight" onclick="printLayer('div-id-name')"><font color="white" size="3"><i class="fa fa-print fa-fw"></i></font></a></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="./assets-admin/images/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $var; ?></strong></span><br>
      <form action="admin-update-account.php" method="post">
        <button name="btnLogout"><i class='fa fa-sign-out-alt'></i></button>
      </form>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="./admin-my-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lightbulb fa-fw"></i>  My Technologies</a>
    <a href="./admin-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-id-card fa-fw"></i>  My Information</a>
    <a href="./admin-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i> Change Password</a>
    <a href="./admin-add-new-technology.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Add New Technology</a>
    <a href="./admin-pending-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-ol fa-fw"></i> Pending Accounts</a>
    <a href="./admin-pending-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-ul fa-fw"></i>  Pending Technologies</a>
    <a href="./admin-approved-accounts.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-user-circle fa-fw"></i> Approved Accounts</a>    
    <a href="./admin-approved-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-seedling fa-fw"></i> Approved Technologies</a> 
    <a href="./admin-pending-request.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-alt fa-fw"></i> Pending Request</a>
    <a href="./approved-request.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-alt fa-fw"></i> Approved Request</a>    
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
      	<form action="admin-update-account.php" method="post">
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