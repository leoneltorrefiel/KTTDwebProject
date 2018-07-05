<?php
	
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	$sql1 = "SELECT * FROM technologies order by date_approved DESC";
	$view1 = mysqli_query($db,$sql1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>View Account</title>
</head>
<body>
	<h1>Approved Technologies</h1>

	<div>
            <center>
            	<div class="contentHeader">
                    <table id="pos">
                        <tr>
                            <th width=1% align=center>Tech Name</th>
                            <th width=1% align=center>Tech Description</th>
                            <th width=1% align=center>Tech Owner</th>
                            <th width=1% align=center>Tech Username</th>
                            <th width=1% align=center>Account Type</th>
                            <th width=1% align=center>Attached File</th>
                            <th width=1% align=center>Date Approved</th>
                            <th width=1% align=center>Date Request</th>
                        </tr>
                    </table>
                </div>

                <div class="">
                    <table>
                        <?php
                            while($pending=mysqli_fetch_assoc($view1)){
                            echo "<td width=2%>".$pending['tech_name']."</td>";
				            echo "<td width=1.5%>".$pending['tech_description']."</td>";
                            echo "<td width=2%>".$pending['tech_owner']."</td>";
                            echo "<td width=2%>".$pending['tech_username']."</td>";
				            echo "<td width=2%>".$pending['tech_acct']."</td>";
                            echo "<td width=1%>".$pending['tech_filename']."</td>";
                            echo "<td width=1%>".$pending['date_approved']."</td>";
                            echo "<td width=1%>".$pending['date_request']."</td>";
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

        <form action="adminpage.php" method="post">
          <input type="submit" name="btnLogout" value="Logout">
    </form>
</body>

</html>