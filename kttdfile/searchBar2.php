<?php

	include('server.php');

	$nm = $_GET['nm'];

	$tableNum = 1;

	$sql = "SELECT * from account where username like('%$nm%')";
	$result = mysqli_query($db,$sql);

	echo "<table>";

	 echo "<table>";
     echo "<tbody>";
     echo "<tr class='row100 body'>";
     echo "<td><b></b></td>";
     echo "<td class='cell100 column1-aaa'><b></b></td>";
     echo "<td class='cell100 column2-aaa'><b>Fullname</b></td>";
     echo "<td class='cell100 column3-aaa'><b>Username</b></td>";
     echo "<td class='cell100 column4-aaa'><b>Email</b></td>";
     echo "<td class='cell100 column5-aaa'><b>Contact</b></td>";
     echo "<td class='cell100 column6-aaa'><b>Type</b></td>";
     echo "<td class='cell100 column7-aaa'><b>Action</b></td>";
     echo "</tr>";

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>"; echo $tableNum; echo "</td>";
		echo "<td class='cell100 column1-aaa'>"."<center><img  height='50' width='50' src='"; echo $row['file_path']; echo "'>"."</center>"."</td>";
		echo "<td class='cell100 column2-aaa'>"; echo $row['firstname']; echo " ";
        echo ""; echo $row['lastname']; echo "</td>";
        echo "<td class='cell100 column3-aaa'>"; echo $row['username']; echo "</td>";
		echo "<td class='cell100 column4-aaa'>"; echo $row['email']; echo "</td>";
		echo "<td class='cell100 column5-aaa'>"; echo $row['contact']; echo "</td>";
		echo "<td class='cell100 column6-aaa'>"; echo $row['account_type']; echo "</td>";
		echo "<td class='cell100 column7-aaa'>"; echo "<a href='staff-update-account.php?update={$row['account_id']}'><submit><font color='green' size='5'><i class='fa fa-edit'></i></font></submit></a>"."</td>";
		echo "</tr>";

		$tableNum++;
	}
	echo "</table>";


	

	

?>