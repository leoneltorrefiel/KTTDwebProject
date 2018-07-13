<?php
    
    include('server.php');

    if(empty($_SESSION['username'])){
        header('location: main.php');
    }

    $var = $_SESSION['username'];

    $sql = "SELECT account_type from account where username='$var' ";
    $res = mysqli_query($db,$sql);

    $checkType = mysqli_fetch_assoc($res);

    if($checkType['account_type'] == 'Client'){
        header('location: home.php');
    }

    $sql1 = "SELECT * FROM technologies order by date_approved DESC";
    $view1 = mysqli_query($db,$sql1);

    
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Account</title>


</head>
<body>
    <h1>Approved Technologies</h1>

    <div>
            <center>
                <div>
                    <b>Search: </b> 
                    <input type="text" name="searchNAme" id="searchName" placeholder="Search Technology Name" onKeyUp="search();" autocomplete="off">
                </div>
                <div class="contentHeader">
                    <table id="pos">
                        <tr>
                            <th width=1% align=center>Tech Name</th>
                            <th width=1% align=center>Tech Description</th>
                            <th width=1% align=center>Tech Owner</th>
                            <th width=1% align=center>Tech Username</th>
                            <th width=1% align=center>Account Type</th>
                            <th width=1% align=center>Attached File</th>
                            <th width=1% align=center>Steps Status</th>
                            <th width=1% align=center>File Type</th>
                            <th width=1% align=center>Date Approved</th>
                            <th width=1% align=center>Date Request</th>
                        </tr>
                    </table>
                </div>
                <div id="result">
                    <?php
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
                    ?>
                </div>

                
            </center>
        </div>
        <br>
        <br>
        <a href="adminpage.php">Go back</a>
        <br>
        <br>
        <form action="adminpage.php" method="post">
          <input type="submit" name="btnLogout" value="Logout">
    </form>
<script type="text/javascript">
    function search(){
        xmlhttp= new XMLHttpRequest();
        xmlhttp.open("GET","searchBar.php?nm="+ document.getElementById("searchName").value,false);
        xmlhttp.send(null);
        document.getElementById("result").innerHTML=xmlhttp.responseText;
        document.getElementById("result").style.visibility='visible';
    }
        
</script>


</body>

</html>

