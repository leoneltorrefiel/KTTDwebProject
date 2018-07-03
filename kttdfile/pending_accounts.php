<?php
	
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	$sql1 = "SELECT * FROM pending_account order by datetime ASC";
	$view1 = mysqli_query($db,$sql1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pending Accounts</title>
</head>
<body>
	<h1>PENDING ACCOUNTS</h1>

	<div>
            <center>
            	<div class="contentHeader">
                    <table id="pos">
                        <tr>
                            <th width=1% align=center>Image</th>
                            <th width=1% align=center>Username</th>
                            <th width=1% align=center>Password</th>
                            <th width=1% align=center>Firstname</th>
                            <th width=1% align=center>Lastname</th>
                            <th width=1% align=center>Email</th>
                            <th width=1% align=center>Address</th>
                            <th width=1% align=center>Contact</th>
                            <th width=1% align=center>Date Applied</th>
                            <th width=1% align=center>Account Type</th>
                            <th width=1% align=center>Action</th>
                        </tr>
                    </table>
                </div>

                <div class="">
                    <table>
                        <?php

                            while($pending=mysqli_fetch_assoc($view1)){
                            echo "<td width=2%>"."<img  height='30' width='30' src='".$pending['file_path']."'>"."</td>";
                            echo "<td width=2%>".$pending['username']."</td>";
				            echo "<td width=1.5%>".$pending['password']."</td>";
                            echo "<td width=2%>".$pending['firstname']."</td>";
                            echo "<td width=1%>".$pending['lastname']."</td>";
				            echo "<td width=1%>".$pending['email']."</td>";
                            echo "<td width=1%>".$pending['address']."</td>";
                            echo "<td width=1%>".$pending['contact']."</td>";
                            echo "<td width=1.5%>".$pending['datetime']."</td>";
                            echo "<td width=1%>".$pending['account_type']."</td>";
                            echo "<td width=1%>"."<submit><a href='approve.php?approve={$pending['pending_account_id']}'>Approve</a></submit>"." &nbsp "."<submit><a href='decline.php?decline={$pending['pending_account_id']}'>Decline</a></submit>"."</td>";
				            echo "<tr>";
				            
                            }
              			?>
                    </table>
                </div>
            </center>
        </div>


	<button><a href="adminpage.php">Back</a></button>	
	<br>
	<br>
	<form action="pending_accounts.php" method="post">
          <input type="submit" name="btnLogout" value="Logout">
    </form>
</body>
</html>