<?php

	include('server.php');

	if(empty($_SESSION['username'])){
		header('location: main.php');
	}


	$var1 = $_SESSION['patentStatus'];
	$var2 = $_SESSION['patentName'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Technology Status</title>
	<link rel="stylesheet" type="style/css">
</head>
<body>
	<h1>Patent Technology Status</h1>

	<a href="#"><h3><?php echo $var2; ?></h3></a>
	<h3>Done steps: <?php echo $_SESSION['patentStatus']; ?></h3>
	<a href="#"><h3><?php echo $_SESSION['username']; ?></h3></a>

	<form action="patent_tech_status.php" method="post">
	<button name="patentStep" id="step1" class="fa fa-check">Step 1</button>
	<button name="patentStep" id="step2">Step 2</button>
	<button name="patentStep" id="step3">Step 3</button>
	<button name="patentStep" id="step4">Step 4</button>
	<button name="patentStep" id="step5">Step 5</button>
	<button name="patentStep" id="step6">Step 6</button>
	<button name="patentStep" id="step7">Step 7</button>
	<button name="patentStep" id="step8">Step 8</button>
	<button name="patentStep" id="step9">Step 9</button>
	<button name="patentStep" id="step10">Step 10</button>
	<button name="patentStep" id="step11">Step 11</button>
	<button name="patentStep" id="step12">Step 12</button>
	</form>
	
	<br>
	
	<a href="approvedTech.php">Go Back</a>
	<br>

<script type="text/javascript">
	var temp = <?php echo $var1; ?>
	

	if(temp == 0){
		document.getElementById("step1").disabled = false;
		document.getElementById("step2").disabled = true;
		document.getElementById("step3").disabled = true;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 1){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").disabled = false;
		document.getElementById("step3").disabled = true;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 2){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").disabled = false;
		document.getElementById("step4").disabled = true;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 3){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").disabled = false;
		document.getElementById("step5").disabled = true;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 4){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").disabled = false;
		document.getElementById("step6").disabled = true;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 5){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").disabled = false;
		document.getElementById("step7").disabled = true;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 6){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").disabled = false;
		document.getElementById("step8").disabled = true;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 7){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").disabled = false;
		document.getElementById("step9").disabled = true;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 8){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").disabled = false;
		document.getElementById("step10").disabled = true;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 9){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step10").disabled = false;
		document.getElementById("step11").disabled = true;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 10){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step10").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step11").disabled = false;
		document.getElementById("step12").disabled = true;
	}

	if(temp == 11){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step10").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step11").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step12").disabled = false;
	}

	if(temp == 12){
		document.getElementById("step1").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step2").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step3").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step4").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step5").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step6").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step7").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step8").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step9").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step10").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step11").innerHTML = '<img src="image/check.png" width="15" height="10" />';
		document.getElementById("step12").innerHTML = '<img src="image/check.png" width="15" height="10" />';
	}

	

</script>
</body>
</html>