<?php

	include('server.php');

	$nm = $_GET['nm'];

	$sql = "SELECT * from account where username like('%$nm%')";
	$result = mysqli_query($db,$sql);

	echo "<table>";

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td width=2%>"."<img  height='30' width='30' src='"; echo $row['file_path']; echo "'>"."</td>";
		echo "<td width=2%>"; echo $row['username']; echo "</td>";
		echo "<td width=1.5%>"; echo $row['password']; echo "</td>";
		echo "<td width=2%>"; echo $row['firstname']; echo "</td>";
		echo "<td width=1%>"; echo $row['lastname']; echo "</td>";
		echo "<td width=1%>"; echo $row['email']; echo "</td>";
		echo "<td width=1%>"; echo $row['address']; echo "</td>";
		echo "<td width=1%>"; echo $row['contact']; echo "</td>";
		echo "<td width=1%>"; echo $row['dateApplied']; echo "</td>";
		echo "<td width=1%>"; echo $row['dateApproved']; echo "</td>";
		echo "<td width=1%>"; echo $row['account_type']; echo "</td>";
		echo "<td width=1.5%>"; echo "<a href='updateAccount.php?update={$row['account_id']}'><submit>UPDATE</submit></a>"." &nbsp "."<a href='deleteAccount.php?remove={$row['account_id']}'><submit>DELETE</submit></a>"; echo "</td>";
		echo "</tr>";
	}

?>