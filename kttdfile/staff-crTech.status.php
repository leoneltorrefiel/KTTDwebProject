<?php

	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	if($_SESSION['username'] == 'admin'){
		header('location: admin-my-technologies.php');
	}

	
	$var1 = $_SESSION['copyStatus'];
	$var2 = $_SESSION['copyName'];

    $var = $_SESSION['username'];

    $sql = "SELECT account_type from account where username='$var' ";
    $res = mysqli_query($db,$sql);

    $checkType = mysqli_fetch_assoc($res);

    if($checkType['account_type'] == 'Client'){
        header('location: client-my-technologies.php');
    }

     $getPic = "SELECT * from account where username='$var' ";
    $exe = mysqli_query($db,$getPic);

    $put = mysqli_fetch_assoc($exe);


?>


<!DOCTYPE html>
<html>
<title>Staff's Page</title>
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
    top: 300px;
    left: 300px;
    width: 300px;
    height: 300px;
    background-size: 300px 300px; 
}

.nextStep {
    position: relative;
    left: 800px;
    width: 300px;
    height: 300px;
    background-size: 300px 300px;
}

</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4"><b class="navCenter">KNOWLEDGE & TECHNOLOGY TRANSFER DIVISION</b>
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><a href="#" class="floatRight" onclick="printLayer('div-id-name')"><font color="white" size="3"><i class="fa fa-print fa-fw"></i></font></a></span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <?php echo "<img  height='50' width='50' src='".$put['file_path']."' class='w3-circle w3-margin-right' style='width:46px'>"; ?>
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $var; ?></strong></span><br>
      <form action="staff-crTech.status.php" method="post">
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
    <a href="./staff-my-technologies.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-lightbulb fa-fw"></i>  My Technologies</a>
    <a href="./staff-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-id-card fa-fw"></i>  My Information</a>
    <a href="./staff-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i> Change Password</a>
    <a href="./staff-add-new-technology.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Add New Technology</a>
    <a href="./staff-approved-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle fa-fw"></i> Approved Accounts</a>    
    <a href="./staff-approved-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-seedling fa-fw"></i> Approved Technologies</a>
    <a href="./staff-approved-request.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Request Schedule</a>    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <p>Technology: <b><font color="green"><?php echo $_SESSION['copyName']; ?></font> Status</b></p>
  </header>
  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
          <section>
                <div class="steps">
                    <ul class="steps-container">
                        <li style="width: 14.28571428571429%" id="step1">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 1</div>
                                <div class="step-description">
                                    <details>
                                        <summary>Description</summary>
                                        <b><p>Client/ ITSO Team</p></b>
                                        <p align="left">*Sign-in</p>
                                        <p align="left">*Initial negotiations</p>
                                        <p align="left">*Discussion</p>
                                    </details>
                                </div>
 
                            </div>
                        </li>
                        <li style="width: 14.28571428571429%" id="step2">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 2</div>
                                <div class="step-description">
                                    <details>
                                        <summary>Description</summary>
                                        <b><p>Client/ Manager/ Technical Staff</p></b>
                                        <p align="left">*Provide Non-Disclosure Agreement</p>
                                        <p align="left">*Application Process</p>
                                        <p align="left">*Conduct Office Feedback Form</p>
                                        <p align="left">*Create folder</p>
                                        <p align="left">*Issuance of Quotaion for Patent Search and/or Patent Draft, if necessary</p>
                                    </details>
                                </div>
                            </div>
                        </li>
                        <li style="width: 14.28571428571429%" id="step3">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 3</div>
                                <div class="step-description">
                                    <details>
                                        <summary>Description</summary>
                                        <b><p>ITSO Team</p></b>
                                        <p align="left">*Analyze Information</p>
                                        <p align="left">*(disclosure, drawings)</p>
                                        <p align="left">*Conceptualized the innovation/ invention</p>
                                        <p align="left">*Unity of invention</p>
                                        <p align="left">*Task assignment</p>
                                        <p align="left">*Triage (fill-up triage form)</p>
                                    </details>
                                </div>
                            </div>
                        </li>
                        <li style="width: 14.28571428571429%" id="step4">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 4</div>
                                <div class="step-description">
                                    <details>
                                        <summary>Description</summary>
                                        <b><p>Technical Expert/ Technical Staff</p></b>
                                        <p align="left">*Conduct Patent</p>
                                        <p align="left">*Search (Use Databaeses,</p>
                                        <p align="left">*IPC Classification, Update Status, Fill-in Log Wrapper)</p>
                                    </details>
                                </div>
                            </div>
                        </li>
                        <li style="width: 14.28571428571429%" id="step5">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 5</div>
                                <div class="step-description">
                                    <details>
                                        <summary>Description</summary>
                                        <b><p>Client/ Manager/ Technical Staff</p></b>
                                        <p align="left">*Meet staff and clients</p>
                                        <p align="left">*Present search reports</p>
                                        <p align="left">*Prior arts presentation</p>
                                        <p align="left">*Tabulation</p>
                                        <p align="left">*Meet with client/s for deliberation and presentation of data</p>
                                        <p align="left">*Issuance of Quotation Slip for Patent Draft</p>
                                    </details>
                                </div>
                            </div>
                        </li>
                        <li style="width: 14.28571428571429%" id="step6">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">Step 6</div>
                                <div class="step-description">
                                    <details>
                                        <summary>Description</summary>
                                        <b><p>Manager/ Technical Staff</p></b>
                                        <p align="left">*Draft Paper A</p>
                                        <p align="left">*Assignment & Designation</p>
                                        <p align="left">*Emnodiment</p>
                                        <p align="left">*Prior arts (drafting of claims, novelty of claims)</p>
                                        <p align="left">*Initial proof read (numerical referencing, technical terms)</p>
                                        <p align="left">*Conduct dry run</p>
                                        <p align="left">*(Basis for Paper B)</p>
                                    </details>
                                </div>
                            </div>
                        </li>
                        <li style="width: 14.28571428571429%" id="step7">
                            <div class="step">
                                <div class="step-image"><span></span></div>
                                <div class="step-current">End</div>
                                <div class="step-description">
                                    <details>
                                        <summary>Description</summary>
                                        <b><p>Congratulations!
                                            <br>All steps are done</p></b>
                                    </details>
                                </div>
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

function printLayer(el){
    var printPage = document.body.innerHTML;
    var printContent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = printPage;
  }

var temp = <?php echo $var1; ?>
	

	if(temp == 0){
        document.getElementById("step1").className = "";
        document.getElementById("step-bar").style.width = "0%";
        document.getElementById("currentStep").style.backgroundImage = "url('copyright-steps/currentstep/copyright-step0.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('copyright-steps/nextstep/copyright-step1.png')";
    }

    if(temp == 1){
        document.getElementById("step1").className = "activated";
        document.getElementById("step-bar").style.width = "14.28571428571429%";
        document.getElementById("currentStep").style.backgroundImage = "url('copyright-steps/currentstep/copyright-step1.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('copyright-steps/nextstep/copyright-step2.png')";
    }

    if(temp == 2){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step-bar").style.width = "28.57142857142858%";
        document.getElementById("currentStep").style.backgroundImage = "url('copyright-steps/currentstep/copyright-step2.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('copyright-steps/nextstep/copyright-step3.png')";
    }

    if(temp == 3){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step-bar").style.width = "42.85714285714287%";
        document.getElementById("currentStep").style.backgroundImage = "url('copyright-steps/currentstep/copyright-step3.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('copyright-steps/nextstep/copyright-step4.png')";
    }

    if(temp == 4){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step-bar").style.width = "57.14285714285716%";
        document.getElementById("currentStep").style.backgroundImage = "url('copyright-steps/currentstep/copyright-step4.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('copyright-steps/nextstep/copyright-step5.png')";
    }
    
    if(temp == 5){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step-bar").style.width = "71.42857142857145%";
        document.getElementById("currentStep").style.backgroundImage = "url('copyright-steps/currentstep/copyright-step5.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('copyright-steps/nextstep/copyright-step6.png')";
    }
    
    if(temp == 6){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step-bar").style.width = "85.71428571428574%";
        document.getElementById("currentStep").style.backgroundImage = "url('copyright-steps/currentstep/copyright-step6.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('copyright-steps/nextstep/copyright-step7.png')";
    }
    
    if(temp == 7){
        document.getElementById("step1").className = "activated";
        document.getElementById("step2").className = "activated";
        document.getElementById("step3").className = "activated";
        document.getElementById("step4").className = "activated";
        document.getElementById("step5").className = "activated";
        document.getElementById("step6").className = "activated";
        document.getElementById("step7").className = "activated";
        document.getElementById("step-bar").style.width = "100%";
        document.getElementById("currentStep").style.backgroundImage = "url('copyright-steps/currentstep/copyright-step7.png')";
        document.getElementById("nextStep").style.backgroundImage = "url('copyright-steps/nextstep/copyright-step7.png')";
    }
    
</script>
</body>
</html>

