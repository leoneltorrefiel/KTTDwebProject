<?php

	include('server.php');

	$nm = $_GET['nm'];


	$sql = "SELECT * from technologies where tech_name like('%$nm%') ";
	$result = mysqli_query($db,$sql);

	echo "<table class='w3-table w3-striped w3-white'>";
    echo "<tbody>";
    echo "<tr class='row100 body'>";
    echo "<td class='cell100 column1-aat'>Technology Name</th>";
    echo "<td class='cell100 column1-aat'>Attached File</th>";
    echo "<td class='cell100 column1-aat'>Tech Owner</th>";
    echo "<td class='cell100 column1-aat'>Filing Type</th>";
    echo "<td class='cell100 column1-aat'>Filing Date</th>";
    echo "<td class='cell100 column1-aat'>Step Status</th>";
    echo "</tr>";

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td class='cell100 column1-aat'>"."<a href='checkFiling.php?check={$row['tech_id']}'><font color='green'> </i> "; echo $row['tech_name']; echo "</font></a>"."</td>";
        echo "<td class='cell100 column5-aat'>"."<a href='download.php?dl={$row['tech_id']}'>"; echo $row['tech_filename']; echo "</a>"."</td>";
        echo "<td class='cell100 column3-aat'>"; echo $row['tech_owner']; echo "</td>";
        echo "<td class='cell100 column4-aat'>"; echo $row['file_type']; echo "</td>";
        echo "<td class='cell100 column5-aat'>"; echo $row['date_request']; echo "</a>"."</td>";
        echo "<td class='cell100 column6-aat'>"; echo $row['status']; echo "</td>";
        echo "</tr>";
	} 

	echo "</table>";

?>