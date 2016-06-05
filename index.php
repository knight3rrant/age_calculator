<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<link rel="stylesheet" href="style.css">
</head>

<body>



		<div class="text">
		<?php if (isset($_GET['dob']) ): ?>
		<?php
		$datetime1 = new DateTime($_GET['dob']);
		$datetime2 = new DateTime('now');
		$interval = $datetime1->diff($datetime2);
		?>

		<h1>Bravo!</h1>
		 <h1><?php echo $interval->format('You\'re %y years %m months and %d days old'); ?></h1>

		 <a href="index.php">Check for another?</a>
		 <?php else: ?>
			<h1>Enter Your Birth Year</h1>
			<form action="" method="get">
				<input class="heda" type="text" name="dob" placeholder="Enter your Birth Year">
			<button class="button" type="submit">Submit</button>
			</form>
		<?php endif; ?>
		</div>	
<a href="age_calculator.zip" style="bottom:20px;right:20px ; color:green;position:absolute">Source Code</a>
</body>
</html>