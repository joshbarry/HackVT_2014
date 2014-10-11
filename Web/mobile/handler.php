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
	$grabtypes_stmt = $con->prepare('SELECT * FROM anchors');
	$grabtypes_stmt->execute();
	$results = dbGetResultRows($grabtypes_stmt);
	if(is_array($results)) {
		foreach($results as $row) {
			$ttype = $row['type'];
			$ta1 = $row['a1'];
			$ta2 = $row['a2'];
			$tmin = $row['min'];
			$tmax = $row['max'];
		}
	}
	dbdisconnect($con);

	$finalResponse = array(
		"Type" => $ttype,
		"Anchor1" => $ta1,
		"Anchor2" => $ta2,
		"MinValue" => $tmin,
		"MaxValue" => $tmax
	);
	
	// Send Output
	echo json_encode($finalResponse);
	
} else {
	$data['error'] = 'ERROR_999: SERVER UNAVAILABLE.';
	echo json_encode($data);
}

?>