<?php

	include('server.php');

	$nm = $_GET['nm'];

	if(empty($nm)){
		
	$sql = "SELECT * from technologies order by date_approved DESC";
	$result = mysqli_query($db,$sql);

	echo "<table>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td width=1%>"."<a href='checkFiling.php?check={$row['tech_id']}'>"; echo $row['tech_name']; echo "</a>"."</td>";
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
	else{

	

	$sql = "SELECT * from technologies where tech_name like('%$nm%') ";
	$result = mysqli_query($db,$sql);

	echo "<table>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td width=1%>"."<a href='checkFiling.php?check={$row['tech_id']}'>"; echo $row['tech_name']; echo "</a>"."</td>";
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