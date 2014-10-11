<?php
require_once("support.php");
$con = dbconnect();

$resultAnchor = mysqli_query($con,"SELECT * FROM anchors"); 
while($row = mysqli_fetch_array($resultAnchor)) {
	$a1=$row['a1'];
	$a2=$row['a2'];
	$a3=$row['min'];
	$a4=$row['max'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HackVT 2014</title>
	<link rel="shortcut icon" href="img/icon.ico">
	<link href="css/mainStyle.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="/js/jquery-min.js"></script>
</head>

<body class="sf-home">
	<div id="content-left">
		<form>
		<div class="viewItem">
			<div class="viewTitle">First name:</div>
			<div class="viewField"><input type="text" name="firstname"></div>
		</div>
		<div class="viewItem">
			<div class="viewTitle">City (Home):</div>
			<div class="viewField"><input type="text" name="home-address"></div>
		</div>
		<div class="viewItem">
			<div class="viewTitle">City (Work):</div>
			<div class="viewField"><input type="text" name="work-address"></div>
		</div>
		
		<div class="viewItem">
			<div class="viewTitle">Mode of Transport:</div>
			<div class="viewField">
				<select id="transport" name="transport">
					<option value="-1" disabled="disabled" selected="selected">Select a Method of Transportation</option>
					<option value="electric">Walk</option>
					<option value="solar">Bike</option>
					<option value="wind">Drive</option>
				</select>
			</div>
		</div>
		<div id="transportDiv"></div>
		
		<div class="viewItem">
			<div class="viewTitle">Rent or Buy:</div>
			<div class="viewField">
				<div class="checkRent">
					<input type="checkbox" value="1" id="checkRent" name="checkRent"  style="display:none"/>
					<label for="checkRent"></label>
				</div>
			</div>
		</div>
			
		<div class="viewItem">
			<div class="viewTitle">How Long Will You Stay:</div>
			<div class="viewField">
				<input type="range" name="years" id="years" value="5" data-popup-enabled="true" data-hightlight="true" min="0" max="80">
			</div>
		</div>
		
		<div class="viewItem">
			<div class="viewTitle">Current Heat Source:</div>
			<div class="viewField">
				<select name="heat" id="heat">
					<option value="-1" disabled="disabled" selected="selected">Select a Heat Source</option>
					<option value="wood">Wood</option>
					<option value="pellet">Pellet Stove</option>
					<option value="natural gas">Natural Gas</option>
					<option value="oil">Oil</option>
					<option value="propane">Propane</option>
					<option value="kerosene">Kerosene</option>
					<option value="geothermal">Geothermal</option>
					<option value="heatPump">Heat Pump</option>
					<option value="baseboard">Baseboard</option>
				</select>
			</div>
		</div>
		<div id="heatUse"></div>
		
		<div class="viewItem">
			<div class="viewTitle">Type of Power:</div>
			<div class="viewField">
				<select id="power" name="power">
					<option value="-1" disabled="disabled" selected="selected">Select a Power Source</option>
					<option value="electric">Electric (Grid)</option>
					<option value="solar">Solar</option>
					<option value="wind">Wind</option>
					<option value="hydro">Hydro</option>
				</select><br>
			</div>
		</div>
		<div id="powerUse"></div>
		
		</form>
	</div>
	<div id="content-right">
		A BIG HONKING CHART GOES HERE
	</div>
</body>

</html>
<?php dbdisconnect($con); ?>