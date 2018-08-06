<?php

	include('server.php');

	$nm = $_GET['nm'];


	$sql = "SELECT * from approvedreq where reqdate like('%$nm%') ";
	$result = mysqli_query($db,$sql);

	 echo "<table>";
     echo "<tbody>";
     echo "<tr class='row100 body'>";
     echo "<td class='cell100 column2-aaa'><b>Name</b></td>";
     echo "<td class='cell100 column3-aaa'><b>Reason</b></td>";
     echo "<td class='cell100 column4-aaa'><b>Email</b></td>";
     echo "<td class='cell100 column5-aaa'><b>Contact</b></td>";
     echo "<td class='cell100 column6-aaa'><b>Date Requested</b></td>";
     echo "<td class='cell100 column7-aaa'><b>Status</b></td>";
     echo "</tr>";

	while($row=mysqli_fetch_assoc($result)){
        echo "<td class='cell100 column2-aaa'>".$row['firstname']." ";$row['lastname'];
        echo "".$row['lastname']."</td>";
        echo "<td class='cell100 column3-aaa'>"; echo $row['reason']; echo "</td>";
        echo "<td class='cell100 column4-aaa'>"; echo $row['email']; echo "</td>";
        echo "<td class='cell100 column6-aaa'>"; echo $row['contact']; echo "</td>";
        echo "<td class='cell100 column6-aaa'>"; echo $row['reqdate']; echo "</td>";
        echo "<td class='cell100 column7-aaa'>"."<font color='green' size='5>'<i class='fas fa-check fa-fw'></i></font>"." &nbsp ".""."</td>";
        echo "</tr>";
	} 

	echo "</table>";

?>