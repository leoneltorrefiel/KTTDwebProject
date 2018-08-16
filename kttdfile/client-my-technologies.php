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

	$tmp = $_SESSION['username'];

  	$sql = "SELECT * from pending_tech where pending_tech_username='$tmp' order by datetime DESC";
  	$res_1 = mysqli_query($db,$sql);

  	$sql1 = "SELECT * from technologies where tech_username='$tmp'";
  	$res1 = mysqli_query($db,$sql1);

    $getPic = "SELECT * from account where username='$tmp' ";
    $exe = mysqli_query($db,$getPic);

    $put = mysqli_fetch_assoc($exe);

?>


<!DOCTYPE html>
<html class="fadeIn">
<title>Client Page</title>
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
      <?php echo "<img  height='50' width='50' src='".$put['file_path']."' class='w3-circle w3-margin-right' style='width:46px'>"; ?>
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $var; ?></strong></span><br>
      <form action="client-my-technologies.php" method="post">
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
    <a href="./client-my-technologies.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-lightbulb fa-fw"></i>  My Technologies</a>
    <a href="./client-my-information.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-id-card fa-fw"></i>  My Information</a>
    <a href="./client-change-password.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-key fa-fw"></i> Change Password</a>
    <br>
    <a href="./client-add-new-technology.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus-circle fa-fw"></i>  Add New Technology</a>
    <a href="./client-request-a-schedule.php" class="w3-bar-item w3-button w3-padding"><i class="far fa-clock fa-fw"></i>  Request A Schedule</a>
    <a href="./client-request-date.php" class="w3-bar-item w3-button w3-padding"><i class="far fa-calendar fa-fw"></i>  My Request Schedule</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
        <p>Dashboard><b>My Technologies</b></p>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    
  </div>

  <div id="div-id-name">
  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third">
        <div class="table100 ver2 m-b-110">
                    <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1"><h3>My Technologies</h3>
                                    </th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="table100-body js-pscroll">
            <table>
              <tbody>
                                <tr class="row100 body">
                                    <td class="cell100 column6-aat"><b>Technology Name</b></td>
                                    <td class="cell100 column2-aat"><b>Inventor</b></td>
                                    <td class="cell100 column3-aat"><b>Filling Type</b></td>
                                    <td class="cell100 column4-aat"><b>Tech Status</b></td>
                                    <td class="cell100 column6-aat"><center><b>Filing Status</b></center></td>
                </tr>
                                <tr>
                                    <?php
                            while($pending1=mysqli_fetch_assoc($res1)){
                            echo "<td class='cell100 column6-aat'>".$pending1['tech_name']."</td>";
                            echo "<td class='cell100 column2-aat'>".$pending1['inventor']."</td>";
                            echo "<td class='cell100 column3-aat'>".$pending1['file_type']."</td>";
                            echo "<td class='cell100 column4-aat'>"."Approved"."</td>";
                            echo "<td class='cell100 column6-aat'><center>"."<a href='view-my-tech.php?check={$pending1['tech_id']}'><font color='#8ec735'><i class='fa fa-eye fa-fw'></i></font></a>"."</center></td>";
                            echo "<tr>"; 
                            }

                            while($pending=mysqli_fetch_assoc($res_1)){
                            echo "<td class='cell100 column6-aat'>".$pending['pending_tech_name']."</td>";
                            echo "<td class='cell100 column2-aat'>".$pending['inventor']."</td>";
                            echo "<td class='cell100 column3-aat'>".$pending['pen_file_type']."</td>";
                            echo "<td class='cell100 column4-aat'>"."Waiting..."."</td>";
                            echo "<td class='cell100 column6-aat'><center>"."<font color='#4e4d50' size=''><i class='far fa-eye-slash fa-fw'></i></font>"."</center></td>";
                            echo "<tr>"; 
                            echo "</tr>";
                            }
                                    ?>
                                </tr>
              </tbody>
            </table>
          </div>
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