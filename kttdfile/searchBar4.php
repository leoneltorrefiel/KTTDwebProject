<?php

	include('server.php');

	$nm = $_GET['nm'];

    $tableNum = 1;

	$sql = "SELECT * from pending_tech where pending_tech_name like('%$nm%') ";
	$result = mysqli_query($db,$sql);

echo "<table>";
	 echo "<table>";
     echo "<tbody>";
     echo "<tr class='row100 body'>";
     echo "<td><b></b></td>";
     echo "<td class='cell100 column6-aat'><b>Technology Name</b></td>";
     echo "<td class='cell100 column6-aat'><b>Inventor</b></td>";
     echo "<td class='cell100 column2-aat'><b>Description</b></td>";
     echo "<td class='cell100 column3-aat'><b>Attached File</b></td>";
     echo "<td class='cell100 column4-aat'><b>Filing Type</b></td>";
     echo "<td class='cell100 column5-aat'><b>Date Filed</b></td>";
     echo "<td class='cell100 column6-aat'><b>Action</b></td>";
     echo "</tr>";

	 while($pending=mysqli_fetch_assoc($result)) { 
                                            echo "<tr>";
                                             echo "<td>".$tableNum."</td>";
                                            echo "<td class='cell100 column6-aat'>".$pending['pending_tech_name']."</td>";
                                            echo "<td class='cell100 column6-aat'>".$pending['inventor']."</td>";
                                            echo "<td class='cell100 column2-aat'>".$pending['pending_tech_description']."</td>";
                                            echo "<td class='cell100 column3-aat'>"."<a href='download.php?download={$pending['pending_tech_id']}'>".$pending['p_tech_filename']."</a>"."</td>";
                                            echo "<td class='cell100 column4-aat'>".$pending['pen_file_type']."</td>";
                                            echo "<td class='cell100 column5-aat'>".$pending['datetime']."</td>";
                                            
                                            echo "<td class='cell100 column6-aat'>"."<submit><a href='approve2.php?approve={$pending['pending_tech_id']}'><font color='green' size='5'><i class='fa fa-thumbs-up'></i></font></a></submit>"." &nbsp "."<submit><a href='decline2.php?decline={$pending['pending_tech_id']}'><font color='red' size='5'><i class='fa fa-trash'></i></font></a></submit>"."</td>";
                                            echo "</tr>";

                                            $tableNum++;

                                          }
	echo "</table>";

?>