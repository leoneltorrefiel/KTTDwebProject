<?php

	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}
	if($_SESSION['username'] == 'admin'){
		header('location: admin-my-technologies.php');
	}

	$var1 = $_SESSION['patentStatus'];
	$var2 = $_SESSION['patentName'];

	$var = $_SESSION['username'];

    $sql = "SELECT account_type from account where username='$var' ";
    $res = mysqli_query($db,$sql);

    $checkType = mysqli_fetch_assoc($res);

    if($checkType['account_type'] == 'Staff'){
        header('location: staff-my-technologies.php');
    }

    $getPic = "SELECT * from account where username='$tmp' ";
    $exe = mysqli_query($db,$getPic);

    $put = mysqli_fetch_assoc($exe);


?>

<!DOCTYPE html>
<html>
<title>Client's Page</title>
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
<link rel="stylesheet" href="./assets-admin/css/step-progress.min.css">
<link rel="stylesheet" href="./assets-admin/css/styles.css">
<link rel="stylesheet" href="./assets-admin/css/zoom.css">
    
    <!-- TableUI -->
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="tableUI/css/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="tableUI/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="tableUI/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="tableUI/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="tableUI/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="tableUI/css/util.css">
	<link rel="stylesheet" type="text/css" href="tableUI/css/main.css">
<!--===============================================================================================-->

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
      <?php echo "<img  height='50' width='50' src='".$put['file_path']."' class='w3-circle w3-margin-right' style='width:46px'>"; ?>
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $var; ?></strong></span><br>
      <form action="client-pTech-status.php" method="post">
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
    <a href="./client-my-technologies.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-lightbulb fa-fw"></i>  My Technologies</a>
    <a href="./client-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-id-card fa-fw"></i>  My Information</a>
    <a href="./client-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i> Change Password</a>
    <a href="./client-add-new-technology.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Add New Technology</a>
    <a href="./client-request-date.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  My Request Date</a>
    <a href="./add-request-schedule.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Request Schedule</a>      
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <p>Dashboard>My Technologies><b><?php echo $_SESSION['patentName']; ?> Status</b></p>
  </header>
  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
    <section>
                <div class="steps">
                    <ul class="steps-container">
                        <li style="width: 6.666666666666667%" id="step1">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 1</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step2">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 2</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step3">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 3</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step4">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 4</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step5">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 5</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step6">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 6</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step7">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 7</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step8">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 8</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step9">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 9</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step10">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 10</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step11">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 11</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step12">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 12</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step13">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 13</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step14">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 14</div>
                            </div>
                        </li>
                        <li style="width: 6.666666666666667%" id="step15">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">End</div>
                            </div>
                        </li>
                        
                        

                    </ul>
                    <div class="step-bar" id="step-bar"></div>
                </div>
        </section>
          
    
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
        document.getElementById("step1").className = "";
        document.getElementById("step-bar").style.width = "0%";
	}

	if(temp == 1){
        document.getElementById("step1").className = "activated";
        document.getElementById("step-bar").style.width = "6.666666666666667%";
	}

	if(temp == 2){
        document.getElementById("step1").className = "activated";
		document.getElementById("step2").className = "activated";
        document.getElementById("step-bar").style.width = "13.33333333333333%";
	}

	if(temp == 3){
		document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step-bar").style.width = "20%";
	}

	if(temp == 4){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step-bar").style.width = "26.66666666666667%";
    }
    
    if(temp == 5){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step-bar").style.width = "33.33333333333334%";
    }
    
    if(temp == 6){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step-bar").style.width = "40%";
    }
    
    if(temp == 7){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step-bar").style.width = "46.66666666666667%";
    }

	if(temp == 8){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step8").className = "activated";
        document.getElementById("step-bar").style.width = "53.33333333333334%";
    }
    
    if(temp == 9){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step8").className = "activated";
        document.getElementById("step9").className = "activated";
        document.getElementById("step-bar").style.width = "60.00000000000001%";
    }
    
    if(temp == 10){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step8").className = "activated";
        document.getElementById("step9").className = "activated";
        document.getElementById("step10").className = "activated";
        document.getElementById("step-bar").style.width = "66.66666666666668%";
    }
    
    if(temp == 11){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step8").className = "activated";
        document.getElementById("step9").className = "activated";
        document.getElementById("step10").className = "activated";
        document.getElementById("step11").className = "activated";
        document.getElementById("step-bar").style.width = "73.33333333333335%";
    }
    
    if(temp == 12){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step8").className = "activated";
        document.getElementById("step9").className = "activated";
        document.getElementById("step10").className = "activated";
        document.getElementById("step11").className = "activated";
        document.getElementById("step12").className = "activated";
        document.getElementById("step-bar").style.width = "80.00000000000002%";
    }
    
    if(temp == 13){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step8").className = "activated";
        document.getElementById("step9").className = "activated";
        document.getElementById("step10").className = "activated";
        document.getElementById("step11").className = "activated";
        document.getElementById("step12").className = "activated";
        document.getElementById("step13").className = "activated";
        document.getElementById("step-bar").style.width = "86.66666666666669%";
    }
    
    if(temp == 14){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step8").className = "activated";
        document.getElementById("step9").className = "activated";
        document.getElementById("step10").className = "activated";
        document.getElementById("step11").className = "activated";
        document.getElementById("step12").className = "activated";
        document.getElementById("step13").className = "activated";
        document.getElementById("step14").className = "activated";
        document.getElementById("step-bar").style.width = "93.33333333333336%";
    }
    
    if(temp == 15){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step8").className = "activated";
        document.getElementById("step9").className = "activated";
        document.getElementById("step10").className = "activated";
        document.getElementById("step11").className = "activated";
        document.getElementById("step12").className = "activated";
        document.getElementById("step13").className = "activated";
        document.getElementById("step14").className = "activated";
        document.getElementById("step15").className = "activated";
        document.getElementById("step-bar").style.width = "100%";
    }
    

</script>
</body>
</html>