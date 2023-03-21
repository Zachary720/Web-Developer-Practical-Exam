<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css" media="all" onload="this.media='all'">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="script.js"></script>
	<title>JUAN'S AUTO PAINT</title>
</head>
<body>
	<header>
		<h1>JUAN'S AUTO PAINT</h1>
	</header>
	<nav><span class="active"><a href="index.php">NEW PAINT JOB</a></span><span><a href="paintjobs.php">PAINT JOBS</a></span></nav>
	<section>
		<h2>New Paint Job</h2>
		<div class="cars-wrapper">
			<div class="cars">
				<img src="assets/grey.car.png" class="c-grey active">
				<img src="assets/greencar.png" class="c-green">
				<img src="assets/redcar.png" class="c-red">
				<img src="assets/bluecar.png" class="c-blue">
			</div>
			<div class="middle-arrow">
				<img src="assets/arrow-right.png">
			</div>
			<div class="cars">
				<img src="assets/grey.car.png" class="t-grey active">
				<img src="assets/greencar.png" class="t-green">
				<img src="assets/redcar.png" class="t-red">
				<img src="assets/bluecar.png" class="t-blue">
			</div>
		</div>
		<div>
			<h4>Car Details</h4>
			<form action="/action_page.php">
			<label for="platenum">Plate No.:</label>
			<input type="text" id="platenum" name="platenum" value=""><br>
			<label for="c-color">Current Color:</label>
			<select id="c-color" name="c-color" form="carform">
				<option value=""></option>
				<option value="green">green</option>
				<option value="red">red</option>
				<option value="blue">blue</option>
			</select><br>
			<label for="t-color">Target Color:</label>
			<select id="t-color" name="t-color" form="carform">
				<option value=""></option>
				<option value="green">green</option>
				<option value="red">red</option>
				<option value="blue">blue</option>
			</select><br>
			<input type="submit" value="Submit">
			</form> 
		</div>
	</section>

</body>
</html>