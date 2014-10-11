<?php 
/**
 * @package		SFHackVT
 * @subpackage	MOBILE_HANDLER
 * 
 * @author		Tyler J. Sawyer
 * @date		2014-10-10 21:01:36
 * @version		1.0.0
 * @copyright	Copyright (C) Tyler J. Sawyer, All Rights Reserved.
 */

require_once( '../support.php' );
 
// Request some data from our database.
if ($_GET['bacon']=="yes") {
	
	// Retrieve details from DB.
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

	$finalResponse = array(
		"Month1" => $arrayMonthDatas[0],
		"Month2" => $arrayMonthDatas[1],
		"Month3" => $arrayMonthDatas[2],
		"Month4" => $arrayMonthDatas[3],
		"Month5" => $arrayMonthDatas[4],
		"Month6" => $arrayMonthDatas[5],
		"Month7" => $arrayMonthDatas[6],
		"Month8" => $arrayMonthDatas[7],
		"Month9" => $arrayMonthDatas[8],
		"Month10" => $arrayMonthDatas[9],
		"Month11" => $arrayMonthDatas[10],
		"Month12" => $arrayMonthDatas[11]
	);
	
	// Send Output
	echo json_encode($finalResponse);
	
} else {
	$data['error'] = 'ERROR_999: SERVER UNAVAILABLE.';
	echo json_encode($data);
}

?>