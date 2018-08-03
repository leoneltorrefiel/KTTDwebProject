<?php

  include('server.php');

   if(empty($_SESSION['username'])){
        header('location: main.php');
    }

    if($_SESSION['username'] == 'admin'){
      header('location: admin-my-technologies.php');
    }

    $var = $_SESSION['username'];

    $sql = "SELECT account_type from account where username='$var' ";
    $res = mysqli_query($db,$sql);

    $checkType = mysqli_fetch_assoc($res);

    if($checkType['account_type'] == 'Client'){
        header('location: client-my-technologies.php');
    }

    $sql1 = "SELECT * FROM technologies order by status ASC";
    $view1 = mysqli_query($db,$sql1);
    $count = mysqli_num_rows($view1);

    $sql2 = "SELECT * from technologies where file_type='Copyright' ";
    $view2 = mysqli_query($db,$sql2);
    $countCR = mysqli_num_rows($view2);

    $sql3 = "SELECT * from technologies where file_type='Patent' ";
    $view3 = mysqli_query($db,$sql3);
    $countP = mysqli_num_rows($view3);

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
      <form action="staff-approved-technologies.php" method="post">
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
    <a href="./staff-my-technologies.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lightbulb fa-fw"></i>  My Technologies</a>
    <a href="./staff-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-id-card fa-fw"></i>  My Information</a>
    <a href="./staff-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i> Change Password</a>
    <a href="./staff-add-new-technology.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Add New Technology</a>
    <a href="./staff-approved-accounts.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle fa-fw"></i> Approved Accounts</a>    
    <a href="./staff-approved-technologies.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-seedling fa-fw"></i> Approved Technologies</a> 
    <a href="./staff-approved-reuest.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Request Schedule</a>    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Approved Technologies</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <h4>Total Technologies:  <strong><?php echo "  $count  "; ?></strong></h4><h4>Total Copyright:  <strong><?php echo "  $countCR  "; ?></strong></h4><h4>Total Patent:  <strong><?php echo "  $countP"; ?></strong></h4>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <div>
                    <b>Search: </b> <i class="fa fa-search fa-fw"></i>
                    <input type="text" name="searchNAme" id="searchName" placeholder="Search Technology Name" onKeyUp="search();" autocomplete="off">
                    <br>
                    <br>
                </div>
    
      </div>
      <div id="result">
                    <?php
                        if(empty($nm)){
        
    $sql = "SELECT * from technologies order by status DESC";
    $result = mysqli_query($db,$sql);

    echo "<table class='w3-table w3-striped w3-white'>";
    echo "<tr>";
    echo "<th align=center>Tech Name</th>";
    echo "<th align=center>Tech Description</th>";
    echo "<th align=center>Tech Owner</th>";
    echo "<th align=center>Tech Username</th>";
    echo "<th align=center>Account Type</th>";
    echo "<th align=center>Attached File</th>";
    echo "<th align=center>Steps Status</th>";
    echo "<th align=center>Filing Type</th>";
    echo "<th align=center>Date Approved</th>";
    echo "<th align=center>Date Request</th>";
    echo "</tr>";
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td width=1%>"."<a href='checkFiling2.php?check={$row['tech_id']}'><font color='green'><i class='fa fa-map-marked-alt'></i>"; echo $row['tech_name']; echo "</font></a>"."</td>";
        echo "<td width=1.5%>"; echo $row['tech_description']; echo "</td>";
        echo "<td width=2%>"; echo $row['tech_owner']; echo "</td>";
        echo "<td width=2%>"; echo $row['tech_username']; echo "</td>";
        echo "<td width=2%>"; echo $row['tech_acct']; echo "</td>";
        echo "<td width=1%>"."<a href='download.php?dl={$row['tech_id']}'>"; echo $row['tech_filename']; echo "</a>"."</td>";
        echo "<td width=1.5%>"; echo $row['status']; echo "</td>";
        echo "<td width=1%>"; echo $row['file_type']; echo "</td>";
        echo "<td width=1%>"; echo $row['date_approved']; echo "</td>";
        echo "<td width=1%>"; echo $row['date_request']; echo "</td>";
        echo "</tr>";
        } 

    echo "</table>";
    }
                    ?>
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

function search(){
        xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","searchBar.php?nm="+ document.getElementById("searchName").value,false);
        xmlhttp.send(null);
        document.getElementById("result").innerHTML=xmlhttp.responseText;
        document.getElementById("result").style.visibility='visible';
    }

</script>
</body>
</html>
