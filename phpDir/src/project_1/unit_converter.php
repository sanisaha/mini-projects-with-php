<!DOCTYPE html>
<html>
<head>
	<title>Measurement Conversion</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Measurement Conversion</h1>
	<h2>Temperature</h2>
	<form method="post">
		<label for="celsius">Celsius:</label>
		<input type="number" name="celsius" id="celsius">
		<input type="submit" name="convert_celsius" value="Convert to Fahrenheit">
		<input type="submit" name="convert_kelvin" value="Convert to Kelvin">
	</form>

	<?php
	if(isset($_POST['convert_celsius'])){
		$celsius = $_POST['celsius'];
		$fahrenheit = ($celsius * 1.8) + 32;
		echo "<p>" . $celsius . " Celsius is " . $fahrenheit . " Fahrenheit.</p>";
	}

	if(isset($_POST['convert_kelvin'])){
		$celsius = $_POST['celsius'];
		$kelvin = $celsius + 273.15;
		echo "<p>" . $celsius . " Celsius is " . $kelvin . " Kelvin.</p>";
	}
	?>

	<h2>Speed</h2>
	<form method="post">
		<label for="kmh">Kilometers per hour:</label>
		<input type="number" name="kmh" id="kmh">
		<input type="submit" name="convert_kmh" value="Convert to meters per second">
		<input type="submit" name="convert_knots" value="Convert to knots">
	</form>

	<?php
	if(isset($_POST['convert_kmh'])){
		$kmh = $_POST['kmh'];
		$meters_per_second = $kmh * 0.277778;
		echo "<p>" . $kmh . " kilometers per hour is " . $meters_per_second . " meters per second.</p>";
	}

	if(isset($_POST['convert_knots'])){
		$kmh = $_POST['kmh'];
		$knots = $kmh * 0.539957;
		echo "<p>" . $kmh . " kilometers per hour is " . $knots . " knots.</p>";
	}
	?>

	<h2>Mass</h2>
	<form method="post">
		<label for="kg">Kilograms:</label>
		<input type="number" name="kg" id="kg">
		<input type="submit" name="convert_kg" value="Convert to grams">
    <br>
    <label for="g">Grams:</label>
    <input type="number" name="g" id="g">
		<input type="submit" name="convert_g" value="Convert to kilograms">
	</form>

	<?php
	if(isset($_POST['convert_kg'])){
		$kg = $_POST['kg'];
		$grams = $kg * 1000;
		echo "<p>" . $kg . " kilograms is " . $grams . " grams.</p>";
	}

	if(isset($_POST['convert_g'])){
		$kg = $_POST['g'];
		$kilograms = $kg / 1000;
		echo "<p>" . $kg . " grams is " . $kilograms . " kilograms.</p>";
	}
	?>
</body>
</html>
