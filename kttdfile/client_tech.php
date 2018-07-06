<?php

	include('server.php');


	if(empty($_SESSION['username'])){
		header('location: main.php');
	}
	if($_SESSION['username'] == 'admin'){
		header('location: adminpage.php');
	}
	else{
		$var = $_SESSION['username'];
	
		$checkType = "SELECT account_type from account where username='$var'";
		$res = mysqli_query($db,$checkType);

		$res1 = mysqli_fetch_assoc($res);

		if($res1['account_type'] == 'Staff'){
			header('location: staffAccount.php');
		}
	}

	$tmp = $_SESSION['username'];

	$sql = "SELECT * from pending_tech where pending_tech_username='$tmp' order by datetime DESC";
	$res_1 = mysqli_query($db,$sql);

	$sql1 = "SELECT * from technologies where tech_username='$tmp'";
	$res1 = mysqli_query($db,$sql1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Client Tech</title>
</head>
<body>
	<h1>MY TECHNOLOGIES</h1>
	<br>
	<br>
	<h3>My Pending Technologies</h3>
	<br>
            	<div>
                    <table>
                        <tr>
                            <th>Tech Name</th>
                        </tr>
                    </table>
                </div>

                <div class="">
                    <table>
                        <?php
                            while($pending=mysqli_fetch_assoc($res_1)){
                            echo "<td>".$pending['pending_tech_name']."</td>";
				            echo "<tr>"; 
                            }
              			?>
                    </table>
                </div>
	<br>
	<h3>My Approved Technologies</h3>
	<br>
            	<div>
                    <table>
                        <tr>
                            <th>Tech Name</th>
                        </tr>
                    </table>
                </div>

                <div class="">
                    <table>
                        <?php
                            while($pending1=mysqli_fetch_assoc($res1)){
                            echo "<td>".$pending1['tech_name']."</td>";
				            echo "<tr>"; 
                            }
              			?>
                    </table>
                </div>
	<br>
	<button><a href='home.php'>Back</a></button>
	<br>
	<br>
	<form action="adminpage.php" method="post">
          <input type="submit" name="btnLogout" value="Logout">
    </form>
</body>
</html>