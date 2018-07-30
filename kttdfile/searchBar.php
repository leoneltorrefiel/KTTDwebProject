<?php

	include('server.php');

	$nm = $_GET['nm'];


	$sql = "SELECT * from technologies where tech_name like('%$nm%') ";
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
		echo "<td>"."<a href='checkFiling.php?check={$row['tech_id']}'><font color='green'><i class='fa fa-map-marked-alt'></i>"; echo $row['tech_name']; echo "</font></a>"."</td>";
		echo "<td>"; echo $row['tech_description']; echo "</td>";
		echo "<td>"; echo $row['tech_owner']; echo "</td>";
		echo "<td>"; echo $row['tech_username']; echo "</td>";
		echo "<td>"; echo $row['tech_acct']; echo "</td>";
		echo "<td>"."<a href='download.php?dl={$row['tech_id']}'>"; echo $row['tech_filename']; echo "</a>"."</td>";
		echo "<td>"; echo $row['status']; echo "</td>";
		echo "<td>"; echo $row['file_type']; echo "</td>";
		echo "<td>"; echo $row['date_approved']; echo "</td>";
		echo "<td>"; echo $row['date_request']; echo "</td>";
		echo "</tr>";
	} 

	echo "</table>";

?>