<?php

	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}

	
	$var1 = $_SESSION['copyStatus'];
	$var2 = $_SESSION['copyName'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Technology Status</title>
</head>
<body>
	<h1>Copyright Technology Status</h1>

	<a href=""><h3><?php echo $_SESSION['copyName']; ?></h3></a>
	<a href=""><h3><?php echo $_SESSION['copyStatus']; ?></h3></a>

	<form action="cr_tech_status.php" method="post">
	<button name="copyrightStep" id="step1">Step 1</button>
	<button name="copyrightStep" id="step2">Step 2</button>
	<button name="copyrightStep" id="step3">Step 3</button>
	<button name="copyrightStep" id="step4">Step 4</button>
	<button name="copyrightStep" id="step5">Step 5</button>
	<button name="copyrightStep" id="step6">Step 6</button>
	</form>
	
	<br>
	
	<a href="approvedTech.php">Go Back</a>

<script type="text/javascript">
	var temp = <?php echo $var1; ?>

	if(temp == 0){
		document.getElementById("step1").disabled = false;
		document.getElementById("step2").disabled = true;
		document.getElementById("step3").disabled = true;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
	}	

	if(temp == 1){
		document.getElementById("step1").disabled = false;
		document.getElementById("step2").disabled = false;
		document.getElementById("step3").disabled = true;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		
	}

	if(temp == 2){
		document.getElementById("step1").disabled = false;
		document.getElementById("step2").disabled = false;
		document.getElementById("step3").disabled = false;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		
	}

	if(temp == 3){
		document.getElementById("step1").disabled = false;
		document.getElementById("step2").disabled = false;
		document.getElementById("step3").disabled = false;
		document.getElementById("step4").disabled = false;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		
	}
	if(temp == 4){
		document.getElementById("step1").disabled = false;
		document.getElementById("step2").disabled = false;
		document.getElementById("step3").disabled = false;
		document.getElementById("step4").disabled = false;
		document.getElementById("step5").disabled = false;
		document.getElementById("step6").disabled = true;
		
	}

	if(temp == 5){
		document.getElementById("step1").disabled = false;
		document.getElementById("step2").disabled = false;
		document.getElementById("step3").disabled = false;
		document.getElementById("step4").disabled = false;
		document.getElementById("step5").disabled = false;
		document.getElementById("step6").disabled = false;
		
	}



</script>
</body>
</html>