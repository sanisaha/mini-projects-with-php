<!DOCTYPE html>
<html>
<head>
<style>
  <?php include "style.css" ?>
</style>
	<title>Measurement Conversion</title>
</head>
<body>
<div class="container">

<div class="wrapper">
      <header>Temperature Converter</header>
      <form method="post">
        <div>
          <p>Enter Value</p>
          <input type="number" name="celsius" id="celsius" placeholder="°C">
        </div>
        <div class="drop-list">
          <div class="from">
            <p>From</p>
            <div class="select-box">
              <p>Celsius</p>
            </div>
          </div>
          
          <div class="to">
            <p>To</p>
            <div class="select-box">
              <select name="convert">
				<option value="convert_celsius"> Fahrenheit
				</option>
				<option value="convert_kelvin">kelvin
				</option>
			  </select>
            </div>
          </div>
        </div>
        <button type="submit">Convert</button>
      </form>
	  <div>
		<?php
	if(isset($_POST['convert'])){
    if(($_POST['convert'] == "convert_celsius")){
      $celsius = $_POST['celsius'];
		$fahrenheit = ($celsius * 1.8) + 32;
		echo "<p>" . $celsius . " Celsius is " . $fahrenheit . " Fahrenheit.</p>";
    }
		
	}

	if(isset($_POST['convert'])){
    if(($_POST['convert']==="convert_kelvin")){
      $celsius = $_POST['celsius'];
		$kelvin = $celsius + 273.15;
		echo "<p>" . $celsius . " Celsius is " . $kelvin . " Kelvin.</p>";
    }
		
	}
	?>
	</div>
    </div>

	<div class="wrapper">
      <header>Speed Converter</header>
      <form method="post">
        <div>
          <p>Enter Value</p>
          <input type="number" name="kmh" id="kmh" placeholder="km/h">
        </div>
        <div class="drop-list">
          <div class="from">
            <p>From</p>
            <div class="select-box">
              <p>km/h</p>
            </div>
          </div>
          
          <div class="to">
            <p>To</p>
            <div class="select-box">
              <select name="convert">
				<option value="convert_kmh"> m/s
				</option>
				<option value="convert_knots">knots
				</option>
			  </select>
            </div>
          </div>
        </div>
        <button type="submit">Convert</button>
      </form>
	  <div>
		<?php
	if(isset($_POST['convert'])){
    if($_POST['convert'] === "convert_kmh"){
      $kmh = $_POST['kmh'];
		$meters_per_second = $kmh * 0.277778;
		echo "<p>" . $kmh . " kilometers per hour is " . $meters_per_second . " meters per second.</p>";
    }
	}

	if(isset($_POST['convert'])){
    if($_POST['convert']==="convert_knots"){
      $kmh = $_POST['kmh'];
		$knots = $kmh * 0.539957;
		echo "<p>" . $kmh . " kilometers per hour is " . $knots . " knots.</p>";
    }
		
	}
	?>
	</div>
    </div>
	<div class="wrapper">
      <header>Mass Converter</header>
      <form method="post">
        <div>
          <p>Enter Value</p>
          <input type="number" name="kg" id="kg" placeholder="kg">
        </div>
        <div class="drop-list">
          <div class="from">
            <p>From</p>
            <div class="select-box">
              <p>kg</p>
            </div>
          </div>
          
          <div class="to">
            <p>To</p>
            <div class="select-box">
              <select name="convert">
				<option value="convert_kg"> gram
				</option>
				<option value="convert_mg">milligram
				</option>
			  </select>
            </div>
          </div>
        </div>
        <button type="submit">Convert</button>
      </form>
	  <div>
		<?php
	if(isset($_POST['convert'])){
    if($_POST['convert'] === "convert_kg"){
      $kg = $_POST['kg'];
		$grams = $kg * 1000;
		echo "<p>" . $kg . " kilograms is " . $grams . " grams.</p>";
    }
		
	}

	if(isset($_POST['convert'])){
    if($_POST['convert']==="convert_mg"){
      $kg = $_POST['kg'];
		$milligrams = $kg * 1000000;
		echo "<p>" . $kg . " kilograms is " . $milligrams . " milligrams.</p>";
    }
		
	}
	?>
	</div>
    </div>

</div>
</body>
</html>
