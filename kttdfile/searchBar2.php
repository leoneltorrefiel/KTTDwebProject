<?php

	include('server.php');

	$nm = $_GET['nm'];


	$sql = "SELECT * from account where username like('%$nm%')";
	$result = mysqli_query($db,$sql);

	echo "<table class='w3-table w3-striped w3-white'>";

	echo "<tr>";
    echo "<th align=center>Image</th>";
    echo "<th align=center>Username</th>";
    echo "<th align=center>Password</th>";
    echo "<th align=center>Firstname</th>";
    echo "<th align=center>Lastname</th>";
    echo "<th align=center>Email</th>";
    echo "<th align=center>Address</th>";
    echo "<th align=center>Contact</th>";
    echo "<th align=center>Date Applied</th>";
    echo "<th align=center>Date Approved</th>";
    echo "<th align=center>Account Type</th>";
    echo "<th align=center>Action</th>";
    echo "</tr>";

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>"."<img  height='30' width='30' src='"; echo $row['file_path']; echo "'>"."</td>";
		echo "<td>"; echo $row['username']; echo "</td>";
		echo "<td>"; echo $row['password']; echo "</td>";
		echo "<td>"; echo $row['firstname']; echo "</td>";
		echo "<td>"; echo $row['lastname']; echo "</td>";
		echo "<td>"; echo $row['email']; echo "</td>";
		echo "<td>"; echo $row['address']; echo "</td>";
		echo "<td>"; echo $row['contact']; echo "</td>";
		echo "<td>"; echo $row['dateApplied']; echo "</td>";
		echo "<td>"; echo $row['dateApproved']; echo "</td>";
		echo "<td>"; echo $row['account_type']; echo "</td>";
		echo "<td>"; echo "<a href='updateAccount.php?update={$row['account_id']}'><submit><font color='green' size='5'><i class='fa fa-edit'></i></font></submit></a>"." &nbsp "."<a href='deleteAccount.php?remove={$row['account_id']}'><submit><font color='red' size='5'><i class='fa fa-trash'></i></font></submit></a>"; echo "</td>";
		echo "</tr>";
	}
	echo "</table>";


	

	

?>