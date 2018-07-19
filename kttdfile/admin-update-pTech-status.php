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

    $sql1 = "SELECT * FROM technologies order by date_approved DESC";
    $view1 = mysqli_query($db,$sql1);

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
    <a href="./admin-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i> Change Password</a>/
    <br>
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
    
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        
    <form action="admin-update-pTech-status.php" method="post">
	<button name="patentStep" id="step1">Step 1</button><br>
	<button name="patentStep" id="step2">Step 2</button><br>
	<button name="patentStep" id="step3">Step 3</button><br>
	<button name="patentStep" id="step4">Step 4</button><br>
	<button name="patentStep" id="step5">Step 5</button><br>
	<button name="patentStep" id="step6">Step 6</button><br>
	<button name="patentStep" id="step7">Step 7</button><br>
	<button name="patentStep" id="step8">Step 8</button><br>
	<button name="patentStep" id="step9">Step 9</button><br>
	<button name="patentStep" id="step10">Step 10</button><br>
	<button name="patentStep" id="step11">Step 11</button><br>
	<button name="patentStep" id="step12">Step 12</button><br>
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
		document.getElementById("step1").disabled = false;
		document.getElementById("step2").disabled = true;
		document.getElementById("step3").disabled = true;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 1){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").disabled = false;
		document.getElementById("step3").disabled = true;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 2){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").disabled = false;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 3){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").disabled = false;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 4){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").disabled = false;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 5){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").disabled = false;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 6){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").disabled = false;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 7){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").disabled = false;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 8){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").disabled = false;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 9){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step10").disabled = false;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 10){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step10").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step11").disabled = false;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 11){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step10").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step11").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step12").disabled = false;
	}

	if(temp == 12){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step10").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step11").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step12").innerHTML = '<img src="image/check.png" width="15" height="10" />';
	}

	

</script>
</body>
</html>