<?php
require_once("support.php");
$con = dbconnect();
$arrayMonthDatas = array();
for ($i = 1; $i < 13; $i++) {
	$val = str_pad($i, 1, "0", STR_PAD_LEFT);
	$query = "SELECT * from energy_summary where read_date between '2013-".$val."-01' and '2013-".$val."-31'";
	$getstuff_stmt = $con->prepare($query);
	$getstuff_stmt->execute();
	$results = dbGetResultRows($getstuff_stmt);
	$wind = array();
	$hydro = array();
	$solar = array();
	$day = array();
	if(is_array($results)) {
		foreach($results as $row) {
			$wind[]=$row['wind'];
			$hydro[]=$row['hydro'];
			$solar[]=$row['solar'];
			$day[]=substr($row['read_date'], -2);
		}
	}
	$arrayMonthDatas[]=[$wind,$hydro,$solar,$day];
}
dbdisconnect($con);
include('jquery-graphy.php');
?>
<script>
$(function() {
    $("#month").on("change",  getMonthyValue);
    $("#cost").on("change",  getCostyValue);
});
function getMonthyValue(){
	makifyGraph($("#month").val(),$("#cost").val()/30);
}
function getCostyValue(){
	makifyGraph($("#month").val(),$("#cost").val()/30);
}
</script>