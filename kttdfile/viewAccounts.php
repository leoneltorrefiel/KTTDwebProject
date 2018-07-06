<?php
	
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

    $var = $_SESSION['username'];

    $sql = "SELECT account_type from account where username='$var' ";
    $res = mysqli_query($db,$sql);

    $checkType = mysqli_fetch_assoc($res);

    if($checkType['account_type'] == 'Client'){
        header('location: home.php');
    }


	$sql1 = "SELECT * FROM account order by dateApproved ASC";
	$view1 = mysqli_query($db,$sql1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Account</title>
</head>
<body>
	<h1>Approved Accounts</h1>

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
                            <th width=1% align=center>Date Approved</th>
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
                            echo "<td width=1%>".$pending['dateApplied']."</td>";
                            echo "<td width=1%>".$pending['dateApproved']."</td>";
                            echo "<td width=1%>".$pending['account_type']."</td>";
                            echo "<td width=1.5%>"."<a href='updateAccount.php?update={$pending['account_id']}'><submit>UPDATE</submit></a>"." &nbsp "."<a href='deleteAccount.php?remove={$pending['account_id']}'><submit>DELETE</submit></a>"."</td>";
				            echo "<tr>";
				            
                            }
              			?>
                    </table>
                </div>
            </center>
        </div>
        <br>
        <br>
        <a href="adminpage.php">Go back</a>
        <br>
        <br>
        <form action="adminpage.php" method="post">
          <input type="submit" name="btnLogout" value="Logout">
    </form>
</body>

</html>