
<?php

?>
<!DOCTYPE html>
<html>

<head>
	<title>HackVT 2014</title>
	<link rel="shortcut icon" href="img/icon.ico">
	<link href="css/mainStyle.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<body class="sf-home">
	
	<form>
	First name: <input type="text" name="firstname"><br>
	City (Home):<input type="text" name="home-address"><br>
	City (Work):<input type="text" name="work-address"><br>
	Rent or Buy: <div class="checkRent">
  		<input type="checkbox" value="1" id="checkRent" name="checkRent"  style="display:none"/>
	  	<label for="checkRent"></label></div><br><br>
	How Long Will You Stay:<input type="range" name="years" id="years" value="5" data-popup-enabled="true" data-hightlight="true" min="0" max="80"><br>
	Current Heat Source:<select name="heat">
		<option value="wood">Wood</option>
		<option value="pellet">Pellet Stove</option>
		<option value="natural gas">Natural Gas</option>
		<option value="oil">Oil</option>
		<option value="propane">Propane</option>
		<option value="kerosene">Kerosene</option>
		<option value="geothermal">Geothermal</option>
		<option value="heatPump">Heat Pump</option>
		<option value="baseboard">Baseboard</option>
		</select><br>
	<?php //insert SQL code to update anchor text ?>
	Heat Usage: <?php echo "Anchor 1" ?><input type="range" name="heatusage" id="heatusage" value="50" min="0" max="100"><?php echo "Anchor 2" ?><br>
	Type of Power<select name="power">
		<option value="electric">Electric (Grid)</option>
		<option value="solar">Solar</option>
		<option value="wind">Wind</option>
		<option value="hydro">Hydro</option>
		</select><br>
	<?php //insert SQL code to update anchor text ?>
	Power Usage: <?php echo "Anchor 1" ?><input type="range" name="powerusage" id="powerusage" value="50" min="0" max="100"><?php echo "Anchor 2" ?><br>
	</form>

</body>

</html>
