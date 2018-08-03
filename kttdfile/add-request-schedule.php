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

    if($res1['account_type'] == 'Staff'){
      header('location: staff-my-technologies.php');
    }
  }


  $sql1 = "SELECT * from account where username='$var' ";
  $res2 = mysqli_query($db,$sql1);

  $result = mysqli_fetch_assoc($res2);

  if(isset($_POST['reqSubmit'])){

    $sql3 = "SELECT * from account where username='$var' ";
    $res3 = mysqli_query($db,$sql3);
    $result3 = mysqli_fetch_assoc($res3);

    $reqUsername = $result3['username'];
    $reqName = $result3['firstname'];
    $reqLastname = $result3['lastname'];
    $reqEmail = $result3['email'];
    $reqContact = $result3['contact'];
    $reqDate = mysqli_real_escape_string($db,$_POST['reqDate']);

    $checkReq = "SELECT reqDate from peding_request where reqDate='$reqDate' and username='$var' ";
    $check = mysqli_query($db,$checkReq);

    if(mysqli_num_rows($check) > 0 ){
      echo "<script>alert('You Already Requested that Date');</script>";
    }
    else{
      $insert = "INSERT into peding_request(username,firstname,lastname,email,contact,reqDate) value('$reqUsername','$reqName','$reqLastname','$reqEmail','$reqContact','$reqDate')";
    $exe = mysqli_query($db,$insert);
       echo "<script>alert('Request Submitted!');</script>";
    }



  }

?>

<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
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
      <form action="client-add-new-technology.php" method="post">
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
    <a href="./client-my-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lightbulb fa-fw"></i>  My Technologies</a>
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
    <h5><b><i class="fa fa-dashboard"></i> Request Schedule</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <form accept="add-request-schedule.php" method="post" enctype="multipart/form-data">
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-share-alt w3-text-blue w3-large"></i></td>
            <td>Input Date: </td>
            <td><input type="date" name="reqDate"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="reqSubmit" value="Submit"></td>
          
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