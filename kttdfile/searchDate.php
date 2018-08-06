<?php

	include('server.php');

	$nm = $_GET['nm'];


	$sql = "SELECT * from approvedreq where reqdate like('%$nm%') ";
	$result = mysqli_query($db,$sql);

echo "<table>";
	 echo "<table>";
     echo "<tbody>";
     echo "<tr class='row100 body'>";
     echo "<td class='cell100 column2-aat'><b>Name</b></td>";
     echo "<td class='cell100 column3-aat'><b>Reason</b></td>";
     echo "<td class='cell100 column4-aat'><b>Email</b></td>";
     echo "<td class='cell100 column5-aat'><b>Contact</b></td>";
     echo "<td class='cell100 column6-aat'><b>Date Request</b></td>";
     echo "<td class='cell100 column7-aat'><b>Status</b></td>";
     echo "</tr>";

	while($row=mysqli_fetch_assoc($result)){
        echo "<td class='cell100 column2-aaa'>".$row['firstname']." ".$row['lastname'];
        echo "<td class='cell100 column3-aat'>"; echo $row['reason']; echo "</td>";
        echo "<td class='cell100 column4-aat'>"; echo $row['email']; echo "</td>";
        echo "<td class='cell100 column6-aat'>"; echo $row['contact']; echo "</td>";
        echo "<td class='cell100 column6-aat'>"; echo $row['reqdate']; echo "</td>";
        echo "<td class='cell100 column7-aaa'>"."<font color='green' size='5>'<i class='fas fa-check fa-fw'></i></font>"." &nbsp ".""."</td>";
        echo "</tr>";
	} 

	echo "</table>";

?>