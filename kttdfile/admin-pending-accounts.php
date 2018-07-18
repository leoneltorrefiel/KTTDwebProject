<?php

  include('server.php');

  if(empty($_SESSION['username'])){
    header('location: main.php');
  }

  $var = $_SESSION['username'];

  $sql1 = "SELECT * FROM pending_account order by datetime ASC";
  $view1 = mysqli_query($db,$sql1);

?>


<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./assets-admin/css/w4.css">
<link rel="stylesheet" href="./assets-admin/css/font-railway.css">
<link rel="stylesheet" href="./assets-admin/css/font-awesome.css">
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
    <a href="./admin-my-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  My Technologies</a>
    <a href="./admin-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  My Information</a>
    <a href="./admin-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i> Change Password</a>/
    <br>
    <a href="./admin-add-new-technology.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  Add New Technology</a>
    <a href="./admin-pending-accounts.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i> Pending Accounts</a>
    <a href="./admin-pending-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Pending Technologies</a>
    <a href="./admin-approved-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i> Approved Accounts</a>    
    <a href="./admin-approved-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i> Approved Technologies</a>    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Pending Accounts</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        
        <table class="w3-table w3-striped w3-white">
          <tr>
                            <th align=center>Image</th>
                            <th align=center>Username</th>
                            <th align=center>Password</th>
                            <th align=center>Firstname</th>
                            <th align=center>Lastname</th>
                            <th align=center>Email</th>
                            <th align=center>Address</th>
                            <th align=center>Contact</th>
                            <th align=center>Date Applied</th>
                            <th align=center>Account Type</th>
                            <th align=center>Action</th>
                        </tr>
        
             <?php

                            while($pending=mysqli_fetch_assoc($view1)){
                            echo "<td>"."<img  height='30' width='30' src='".$pending['file_path']."'>"."</td>";
                            echo "<td>".$pending['username']."</td>";
                            echo "<td>".$pending['password']."</td>";
                            echo "<td>".$pending['firstname']."</td>";
                            echo "<td>".$pending['lastname']."</td>";
                            echo "<td>".$pending['email']."</td>";
                            echo "<td>".$pending['address']."</td>";
                            echo "<td>".$pending['contact']."</td>";
                            echo "<td>".$pending['datetime']."</td>";
                            echo "<td>".$pending['account_type']."</td>";
                            echo "<td>"."<submit><a href='approve.php?approve={$pending['pending_account_id']}'><font color='green'><script> document.write('&#10004');</script></font></a></submit>"." &nbsp "."<submit><a href='decline.php?decline={$pending['pending_account_id']}'><font color='red'><script> document.write('&#10006');</script></font></a></submit>"."</td>";
                            echo "<tr>";
                    
                            }
                    ?>
          </tr>
        </table>
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


