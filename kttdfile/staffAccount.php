<?php
	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	if($_SESSION['username'] == 'admin'){
		header('location: adminpage.php');
	}
	else{
	$var = $_SESSION['username'];
	
	$checkType = "SELECT account_type from account where username='$var'";
	$res = mysqli_query($db,$checkType);

	$res1 = mysqli_fetch_assoc($res);

	if($res1['account_type'] == 'Client'){
		header('location: home.php');
	}
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Staff Account</title>
</head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>

<body>
	<h1>STAFF ACCOUNT</h1>
    <br>

	<button><a href="staff_info.php">My Info</a></button>
	<br>
    <br>
	<button><a href="staff_tech.php">My Technologies</a></button>
	<br>
    <br>
	<button><a href="viewAccounts.php">View Accounts</a></button>
	<br>
    <br>
    <button><a href="approvedTech.php">Approved technologies</a></button>
    <br>
    <br>
    <button><a href="changePassword.php">Change Password</a></button>
    <br>
    <br>
	<button id="myBtn">Adde New Tech</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <center>
	<div class"container">
	  <form action="staffAccount.php" method="post" enctype="multipart/form-data">
	  	<h1>Add New Technology</h1>
    <p>Please fill in this form to add new tech.</p>
    <hr>
		
		Technology Name:
		<br>
		<input type="text" name="tech_name">
		<br>
        Technology Description:
        <br>
        <textarea name="tech_description" rows="10" cols="60"></textarea>
        <br>
        Attach some file here: <input type="file" name="file" value="" required>
        <br>
        <input type="radio" name="radio" value="Copyright"> Copyright
        <input type="radio" name="radio" value="Patent"> Patent
        <br>
        <input type="submit" name="techSubmit" value="Submit">
 
	</form>
</div>
</center>
  </div>

</div>
	<br>
    <br>
	<?php echo $_SESSION['username']?>
	<br>
    <br>
	<form action="staffAccount.php" method="post">
            <input type="submit" name="btnLogout" value="Logout">
    </form>


   <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

/*// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}*/
</script>

</body>
</html>