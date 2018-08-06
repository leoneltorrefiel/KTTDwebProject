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
<html class="fadeIn">
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

.currentStep {
    position: relative;
    float: left;
    margin-left: 8%;
    width: 450px;
    height: 350px;
    background-size: 450px 350px; 
}

.nextStep {
    position: relative;
    float: right;
    margin-right: 8%;
    width: 450px;
    height: 350px;
    background-size: 450px 350px;
}

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
      <form action="admin-my-information.php" method="post">
        <button class="btnLogout" name="btnLogout">&nbsp;&nbsp;Logout <i class='fa fa-sign-out-alt'>&nbsp;&nbsp;</i></button>
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
    <a href="./admin-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-id-card"></i>  My Information</a>
    <a href="./admin-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i> Change Password</a>
    <br>
    <a href="./admin-add-new-technology.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Add New Technology</a>
    <a href="./admin-pending-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fas fa-truck-loading fa-fw"></i>  Pending Technologies</a>
    <a href="./admin-approved-technologies.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fas fa-truck fa-fw"></i> Approved Technologies</a>    
    <a href="./admin-pending-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fas fa-user-clock fa-fw"></i> Pending Accounts</a>
    <a href="./admin-approved-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-alt fa-fw"></i> Approved Accounts</a>
    <a href="./admin-pending-request.php" class="w3-bar-item w3-button w3-padding"><i class="far fa-clock fa-fw"></i> Pending Request Schedules</a>
    <a href="./approved-request.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-alt fa-fw"></i> Approved Request Schedule</a>     
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5>Technology Name: <b><?php echo $_SESSION['patentName']; ?></b></h5>
    <p>Description <b><?php echo $_SESSION['patentName']; ?></b></p>
  </header>
  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
         <center>
            <form action="" method="post">
                <div class="popup">
                <button id="b1" class="btnCheck2" name="patentStepBackward"><font color="#FF4D00" size="10"><i class="fa-fw"></i></font></button>
                <span class="popuptext" id="myPopup">decrease step by 1</span>
                </div>
                <div class="popup">
                <button id="b1"  class="btnCheck" name="patentStepForward"><font color="#108f01" size="10"><i class="far fa-plus-square fa-fw"></i></font></button>
                <span class="popuptext" id="myPopup">increase step by 1</span>
                </div>

    

            </form>
         </center> 
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
    <div class="currentStep" id="currentStep">
    </div>  
    <div class="nextStep" id="nextStep">
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step0.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step1.png')";
    }

    if(temp == 1){
        document.getElementById("step1").className = "activated";
        document.getElementById("step-bar").style.width = "6.666666666666667%";
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step1.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step2.png')";
    }

    if(temp == 2){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step-bar").style.width = "13.33333333333333%";
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step2.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step3.png')";
    }

    if(temp == 3){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step-bar").style.width = "20%";
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step3.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step4.png')";
    }

    if(temp == 4){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step-bar").style.width = "26.66666666666667%";
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step4.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step5.png')";
    }
    
    if(temp == 5){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step-bar").style.width = "33.33333333333334%";
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step5.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step6.png')";
    }
    
    if(temp == 6){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step-bar").style.width = "40%";
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step6.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step7.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step7.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step8.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step8.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step9.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step9.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step10.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step10.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step11.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step11.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step12.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step12.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step13.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step13.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step14.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step14.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step15.png')";
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
        document.getElementById("currentStep").style.backgroundImage = "url('patent-steps/currentstep/patent-step15.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('patent-steps/nextstep/patent-step15.png')";
    }
    

</script>
</body>
</html>