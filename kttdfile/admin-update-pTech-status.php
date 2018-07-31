<?php

	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}


	$var1 = $_SESSION['patentStatus'];
	$var2 = $_SESSION['patentName'];

	$var = $_SESSION['username'];

    $sql = "SELECT account_type from account where username='$var' ";
    $res = mysqli_query($db,$sql);

    $checkType = mysqli_fetch_assoc($res);

    if($checkType['account_type'] == 'Client'){
        header('location: client-my-technologies.php');
    }

    $sql1 = "SELECT * FROM technologies order by status ASC";
    $view1 = mysqli_query($db,$sql1);

?>

<!DOCTYPE html>
<html>
<title>Admin's Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
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
      <form action="admin-approved-technologies.php" method="post">
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
    <a href="./admin-approved-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle fa-fw"></i> Approved Accounts</a>    
    <a href="./admin-approved-technologies.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-seedling fa-fw"></i> Approved Technologies</a>    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Update <?php echo $_SESSION['patentName']; ?> Status</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <h3>Patent and Utility Model</h3>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        
    <form action="admin-update-patent-status.php" method="post">
	<button class="btnCheck2" name="patentStepBackward"><font size="3"><i class="fa fa-arrow-left fa-fw"></i></font></button>
	<button class="btnCheck" name="patentStepForward"><font size="3"><i class="fa fa-arrow-right fa-fw"></i></font></button>
	
	</form>
	<br>
	<br>
	<form>
	Step 1 <p id="step1"></p>
	Step 2 <p id="step2"></p>
	Step 3 <p id="step3"></p>
	Step 4 <p id="step4"></p>
	Step 5 <p id="step5"></p>
	Step 6 <p id="step6"></p>
	Step 7 <p id="step7"></p>
	Step 8 <p id="step8"></p>
	Step 9 <p id="step9"></p>
	Step 10 <p id="step10"></p>
	Step 11 <p id="step11"></p>
	Step 12 <p id="step12"></p>
    </form>
  </div>
 
  
<hr>
  <!-- End page content -->
</div>
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

var temp = <?php echo $var1; ?>
	

	if(temp == 0){
		document.getElementById("step1").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 1){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 2){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 3){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}
	

	if(temp == 4){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 5){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 6){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 7){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 8){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 9){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 10){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 11){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='red' size='3'><i class='fa fa-times-circle fa-fw'></i></font>";
	}

	if(temp == 12){
		document.getElementById("step1").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step2").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step3").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step4").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step5").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step6").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step7").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step8").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step9").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step10").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step11").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
		document.getElementById("step12").innerHTML = "<font color='green' size='3'><i class='fa fa-check-circle fa-fw'></i></font>";
	}

	

</script>
</body>
</html>