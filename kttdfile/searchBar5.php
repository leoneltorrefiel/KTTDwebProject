<?php

	include('server.php');

	$nm = $_GET['nm'];

	$tableNum = 1;

	$sql = "SELECT * from pending_account where username like('%$nm%')";
	$result = mysqli_query($db,$sql);

	echo "<table>";
                                            echo "<tbody>";
                                            echo "<tr class='row100 body'>";
                                            echo "<td><b></b></td>";
                                            echo "<td class='cell100 column1-apa'><b></b></td>";
                                            echo "<td class='cell100 column2-apa'><b>Full Name</b></td>";
                                            echo "<td class='cell100 column3-apa'><b>Username</b></td>";
                                            echo "<td class='cell100 column4-apa'><b>Email</b></td>";
                                            echo "<td class='cell100 column5-apa'><b>Contact</b></td>";
                                            echo "<td class='cell100 column6-apa'><b>Type</b></td>";
                                            echo "<td class='cell100 column7-apa'><b>Action</b></td>";
                                            echo "</tr>";

	while($pending=mysqli_fetch_assoc($result)){
                                            echo "<tr><td>".$tableNum."</td>";
                                            echo "<td class='cell100 column1-apa'>"."<center><img  height='50' width='50' src='".$pending['file_path']."'></center>"."</td>";
                                            echo "<td class='cell100 column2-apa'>".$pending['firstname']." ";
                                            echo "".$pending['lastname']."</td>";
                                            echo "<td class='cell100 column3-apa'>".$pending['username']."</td>";
                                            echo "<td class='cell100 column4-apa'>".$pending['email']."</td>";
                                            echo "<td class='cell100 column5-apa'>".$pending['contact']."</td>";
                                            echo "<td class='cell100 column6-apa'>".$pending['account_type']."</td>";
                                            echo "<td class='cell100 column7-apa'>"."<submit><a href='approve.php?approve={$pending['pending_account_id']}'><font color='green' size='5'><i class='fa fa-thumbs-up'></i></font></a></submit>"." &nbsp "."<submit><a href='decline.php?decline={$pending['pending_account_id']}'><font color='red' size='5'><i class='fa fa-trash'></i></font></a></submit>"."</td></tr>";

                                            $tableNum++;
                      
                                        }
	echo "</table>";


	

	

?>