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
<?php include('jquery-graphy.php'); ?>
<script>
function addFields(){
  $("#heatUse").replaceWith('<div id="heatUse"> <p>Heat Usage: </p><?php echo $a1 ?><input type="range" name="heatusage" id="heatusage" value="1" min=<?php $a3 ?> max=<?php $a4 ?>><?php echo $a2 ?><br></div>');
}
function addPower(){
	$("#powerUse").replaceWith('<div id="powerUse"> <p>Heat Usage: </p><?php echo $a1 ?><input type="range" name="heatusage" id="heatusage" value="1" min=<?php $a3 ?> max=<?php $a4 ?>><?php echo $a2 ?><br></div>');
}

function addTrans(){
	$("#transportDiv").replaceWith('<div id="trnasportDiv"> <select id="car" name="car"><option value="-1" disabled="disabled" selected="selected">Select a Vehicle Type</option><option value="suv">SUV</option><option value="Sedan">Sedan</option><option value="Hybrid">Hybrid</option><option value="ev">Electric Vehicle</option></select><br>');
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