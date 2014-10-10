
<?php

?>
<!DOCTYPE html>
<html>

<head>
	<title>HackVT 2014</title>
	<link rel="shortcut icon" href="img/icon.ico">
	<link href="styleMain.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="./js/jquery-min.js"></script>
</head>

<body class="sf-home">

	<form>
	First name: <input type="text" name="firstname"><br>
	City, State (Home):<input type="text" name="home-address">
	City, State (Work):<input type="text" name="work-address">
	Rent or Buy?: <input type="checkbox" data-role="flipswitch" name="ownership" id="switch">
	Current Heat Source:<select name="heat">
		<option value="wood">Wood</option>
		<option value="pellet">Pellet Stove</option>
		<option value="natural gas">Natural Gas</option>
		<option value="oil">Oil</option>
		<option value="steam">Steam</option>
		<option value="geothermal">Geothermal</option>
		<option value="baseboard">Baseboard</option>
		</select>
	Heat Usage: <input type="range" name="heatusage" id="heatusage" value="50" min="0" max="100">
	Type of Power<select name="power">
		<option value="electric">Electric (Grid)</option>
		<option value="solar">Solar</option>
		<option value="wind">Wind</option>
		<option value="hydro">Hydro</option>
		</select>
	Power Usage: <input type="range" name="powerusage" id="powerusage" value="50" min="0" max="100">
	</form>
</body>

</html>
