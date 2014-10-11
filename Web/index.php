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
	<script src="./js/jquery-min.js"></script>
	<script>
function addFields(){
  $("#heatUse").replaceWith('<div id="heatUse"> <p>Heat Usage: </p><?php echo $a1 ?><input type="range" name="heatusage" id="heatusage" value="1" min=<?php $a3 ?> max=<?php $a4 ?>><?php echo $a2 ?><br></div>');
}
function addPower(){
	$("#powerUse").replaceWith('<div id="powerUse"> <p>Heat Usage: </p><?php echo $a1 ?><input type="range" name="heatusage" id="heatusage" value="1" min=<?php $a3 ?> max=<?php $a4 ?>><?php echo $a2 ?><br></div>');
}

function addTrans(){
	$("#transportDiv").replaceWith('<p>Vehicle Type</p><div id="trnasportDiv"> <select id="car" name="car"><option value="-1" disabled="disabled" selected="selected">Select a Vehicle Type</option><option value="suv">SUV</option><option value="Sedan">Sedan</option><option value="Hybrid">Hybrid</option><option value="ev">Electric Vehicle</option></select><br>');
}
$(function(){
	$('#heat').click(function(){
		addFields();
	});
	
	$('#power').click(function(){
		addPower();
	});
	
	$('#transport').click(function(){
		addTrans();
	});
});
</script>
</head>

<body class="sf-home">
	
	<form>
	First name: <input type="text" name="firstname"><br>
	City (Home):<input type="text" name="home-address"><br>
	City (Work):<input type="text" name="work-address"><br>
	Mode of Transport: <select id="transport" name="transport">
		<option value="-1" disabled="disabled" selected="selected">Select a Method of Transportation</option>
		<option value="electric">Walk</option>
		<option value="solar">Bike</option>
		<option value="wind">Drive</option>
		</select><br>
	<div id="transportDiv"> </div>
	Rent or Buy: <div class="checkRent">
  		<input type="checkbox" value="1" id="checkRent" name="checkRent"  style="display:none"/>
	  	<label for="checkRent"></label></div><br><br>
	How Long Will You Stay:<input type="range" name="years" id="years" value="5" data-popup-enabled="true" data-hightlight="true" min="0" max="80"><br>
	Current Heat Source:<select name="heat" id="heat">
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
		</select><br>
	<div id="heatUse"> </div>
	Type of Power<select id="power" name="power">
		<option value="-1" disabled="disabled" selected="selected">Select a Power Source</option>
		<option value="electric">Electric (Grid)</option>
		<option value="solar">Solar</option>
		<option value="wind">Wind</option>
		<option value="hydro">Hydro</option>
		</select><br>
	<div id="powerUse"> </div>
	
	</form>

</body>

</html>
<?php dbdisconnect($con); ?>