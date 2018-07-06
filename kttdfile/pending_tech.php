<?php

	include('server.php');

	$sql1 = "SELECT * FROM pending_tech order by datetime ASC";
	$view1 = mysqli_query($db,$sql1);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pending Technologies</title>
</head>
<body>
	<h1>PENDING TECHNOLOGIES</h1>

	<div>
            <center>
            	<div class="contentHeader">
                    <table id="pos">
                        <tr>
                            <th width=1% align=center>Tech Name</th>
                            <th width=1% align=center>Description</th>
                            <th width=1% align=center>Owner</th>
                            <th width=1% align=center>Username</th>
                            <th width=1% align=center>Account Type</th>
                            <th width=1% align=center>Attached File</th>
                            <th width=1% align=center>Date Submitted</th>
                            <th width=1% align=center>Action</th>
                        </tr>
                    </table>
                </div>

                <div class="">
                    <table>
                        <?php

                            while($pending=mysqli_fetch_assoc($view1)){
                            echo "<td>".$pending['pending_tech_name']."</td>";
				            echo "<td>".$pending['pending_tech_description']."</td>";
                            echo "<td>".$pending['pending_tech_owner']."</td>";
                            echo "<td>".$pending['pending_tech_username']."</td>";
				            echo "<td>".$pending['pending_tech_acct']."</td>";
				            echo "<td>"."<a href='download.php?download={$pending['pending_tech_id']}'>".$pending['p_tech_filename']."</a>"."</td>";
                   //         echo "<td width=1%>".$pending['p_tech_filename']."</td>";
                            echo "<td>".$pending['datetime']."</td>";
                             echo "<td width=1%>"."<submit><a href='approve2.php?approve={$pending['pending_tech_id']}'>Approve</a></submit>"." &nbsp "
                             ."<submit><a href='decline2.php?decline={$pending['pending_tech_id']}'>Decline</a></submit>"."</td>";
				            echo "<tr>";
				            
                            }
              			?>
                    </table>
                </div>
            </center>
        </div>
        <a href="adminpage.php">Go back</a>
        <br>
        <form action="pending_tech.php" method="post">
          <input type="submit" name="btnLogout" value="Logout">
    </form>
</body>
</html>