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
      header('location: home.php');
    }
  }

  $sql1 = "SELECT * from account where username='$var' ";
  $res2 = mysqli_query($db,$sql1);

  $result = mysqli_fetch_assoc($res2);

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
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4"><span class="navCenter">KNOWLEDGE & TECHNOLOGY TRANSFER DIVISION</span>
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
    <a href="./admin-my-technologies.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-lightbulb fa-fw"></i>  My Technologies</a>
    <a href="./admin-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-id-card"></i>  My Information</a>
    <a href="./admin-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i> Change Password</a>
    <br>
    <a href="./admin-add-new-technology.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-plus-circle fa-fw"></i>  Add New Technology</a>
    <a href="./admin-pending-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fas fa-truck-loading fa-fw"></i>  Pending Technologies</a>
    <a href="./admin-approved-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fas fa-truck fa-fw"></i> Approved Technologies</a>    
    <a href="./admin-pending-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fas fa-user-clock fa-fw"></i> Pending Accounts</a>
    <a href="./admin-approved-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-alt fa-fw"></i> Approved Accounts</a>
    <a href="./admin-pending-request.php" class="w3-bar-item w3-button w3-padding"><i class="far fa-clock fa-fw"></i> Pending Request Schedules</a>
    <a href="./admin-approved-request.php" class="w3-bar-item w3-button w3-padding"><i class="far fa-calendar fa-fw"></i> Approved Request Schedules</a>     
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <p>Dashboard><b>Add New Technology</b></p>
  </header>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <div class="table100 ver2 m-b-110">
                    <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1"><h3>Add New Technology</h3>
                                    </th>
                </tr>
              </thead>
            </table>
          </div>
          <form action="client-add-new-technology.php" method="post" enctype="multipart/form-data">
          <div class="table100-body js-pscroll">
            <table>
              <tbody>
                                <tr class="row100 body">
                                    <td class="cell100 column3-annt"></td>
                  <td class="cell100 column1-aant">Technology Name</td>
                                    <td><textarea rows="1" cols="70" style="resize: none;" class="textArea" name="tech_name" required></textarea></td>
                                    <td></td>
                </tr>

                   <tr class="row100 body">
                                    <td class="cell100 column3-annt"></td>
                  <td class="cell100 column1-aant">Inventor Name</td>
                                    <td><textarea rows="1" cols="70" style="resize: none;" class="textArea" name="inventor" required></textarea></td>
                                    <td></td>
                </tr>

                <tr class="row100 body">
                                    <td class="cell100 column3-annt"></td>
                  <td class="cell100 column1-aant">Description</td>
                  <td><textarea class="textArea" name="tech_description" rows="10" cols="70" required></textarea></td>
                                    <td></td>
                </tr>

                <tr class="row100 body">
                                    <td class="cell100 column3-annt"></td>
                  <td class="cell100 column1-aant">Attach File</td>
                  <td><input type="file" name="file" value="" required></td>
                                    <td></td>
                </tr>
                                
                                <tr class="row100 body">
                                    <td class="cell100 column3-annt"></td>
                  <td class="cell100 column1-aant">Filing Type</td>
                  <td class="cell100 column2-aant">Copyright<input type="radio" name="radio" value="Copyright" required>
                                    <br>
                                    Patent<input type="radio" name="radio" value="Patent" required></td>
                </tr>
              </tbody>
            </table>
                        <tr class="row100 body">
                            <td>
                              
                                <button style="width:100%; height:42px" class="btnChange" name="techSubmit">Submit</button>
                              
                            </td>
                            <td class="cell100 column3-aant"></td>
            </tr>  
            </form>
          </div>
        </div>
      </div>
  </div>
</div>
  <hr>
  

  <!-- End page content -->
</div>


<script>

  function printLayer(el){
    var printPage = document.body.innerHTML;
    var printContent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printContent;
    window.print();
    document.body.innerHTML = printPage;
  }
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