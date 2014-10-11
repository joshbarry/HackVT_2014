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
$(function() {
    $("#month").on("change",  getMonthyValue);
    $("#cost").on("change",  getCostyValue);
});
function getMonthyValue(){
	makifyGraph($("#month").val(),$("#cost").val());
}
function getCostyValue(){
	makifyGraph($("#month").val(),$("#cost").val());
}
</script>