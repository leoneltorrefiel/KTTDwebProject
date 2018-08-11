<?php

	include('server.php');

	$nm = $_GET['nm'];

    $tableNum = 1;

	$sql = "SELECT * from peding_request where reqDate like('%$nm%') ";
	$result = mysqli_query($db,$sql);

	 echo "<table>";
     echo "<tbody>";
     echo "<tr class='row100 body'>";
     echo "<td><b></b></td>";
     echo "<td class='cell100 column6-aat'><b>Name</b></td>";
     echo "<td class='cell100 column1-aat'><b>Reason</b></td>";
     echo "<td class='cell100 column3-aat'><b>Email</b></td>";
     echo "<td class='cell100 column4-aat'><b>Contact</b></td>";
     echo "<td class='cell100 column5-aat'><b>Date</b></td>";
     echo "<td class='cell100 column6-aat'><b>Time</b></td>";
     echo "<td class='cell100 column7-aat'><b>Action</b></td>";
     echo "</tr>";

	while($row=mysqli_fetch_assoc($result)){
        echo "<td>"; echo $tableNum; echo "</td>";
        echo "<td class='cell100 column6-aaa'>".$row['firstname']." ".$row['lastname'];
        echo "<td class='cell100 column1-aat'>"; echo $row['reason']; echo "</td>";
        echo "<td class='cell100 column3-aat'>"; echo $row['email']; echo "</td>";
        echo "<td class='cell100 column4-aat'>"; echo $row['contact']; echo "</td>";
        echo "<td class='cell100 column5-aat'>"; echo $row['reqDate']; echo "</td>";
        echo "<td class='cell100 column6-aat'>"; echo $row['reqTime']; echo "</td>";
         echo "<td class='cell100 column6-aprs'>"."<submit><a href='approveReq.php?approve={$row['id']}'><font color='green' size='5'><i class='fa fa-thumbs-up'></i></font></a></submit>"." &nbsp "."<submit><a href='declineReq.php?decline={$row['id']}'><font color='red' size='5'><i class='fa fa-trash'></i></font></a></submit>"."</td></tr>";
        
        $tableNum++;
	} 
    echo "</tbody>";
	echo "</table>";

?>