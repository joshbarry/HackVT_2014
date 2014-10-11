<?php
/**
 * @package		SFHackVT	
 * @subpackage	SUPPORT
 * 
 * @author		Tyler J. Sawyer
 * @date		2014-10-10 20:54:48
 * @version		1.0.0
 * @copyright	Copyright (C) Tyler J. Sawyer, All Rights Reserved.
 */

/* ----------------------------------------------------------------------------------------------- */
/**
* dbconnect : Allows connection to the specified database. 
* 
* @version 1.0
* @author Tyler J. Sawyer
* @access public
* @return connection to specified database
*/ 
function dbconnect () {
	// Establish connection
	$con=mysqli_connect("webdb.uvm.edu","root","=Hodod3ndron","hackvt");
	//Validate Server Connection
	if (mysqli_connect_errno($con)) { die('ERROR : Failed to connect to MySQL Database (W): ' . mysqli_connect_error()); }
	// Also ensure our connection is using utf-8 encoding.
	if (!mysqli_set_charset($con, "utf8")) {
		die('ERROR : Could not load character set "utf8": ' . mysqli_error($con));
	}
	// Return the connection variable
	return $con;
}

/* ----------------------------------------------------------------------------------------------- */
/**
* dbdisconnect : Determines whether or not an active link to a database exists.
* If so, the function will close the opened link.
* 
* @version 1.0
* @author Tyler J. Sawyer
* @access public
* @param string con variable used to hold the sql connection.
* @return closed connection to any opened databases (should a connection exist).
*/ 

function dbdisconnect ($con) {
	// Check to see if there is an active connection.
	// if so, close that connection.
	if ($con) { mysqli_close($con); }
}

/* ----------------------------------------------------------------------------------------------- */
/**
* dbGetResultsRows : Uses some mysqli prepared statements functions and magic
* to replicate the '$row['field']' result we had in the regular mysql statements.
* SOURCE: http://stackoverflow.com/questions/750648/select-from-in-mysqli
* 
* @version 1.0
* @author Tyler J. Sawyer
* @access public
* @param stmt The mysqli statement session to retrieve information from
* @return results associative array of row values and titles.
*/ 

function dbGetResultRows ($stmt) {

	// Grab all data from statement (?)
	$meta = $stmt->result_metadata();
	
	// Grab parameters from each row
	while ($field = $meta->fetch_field()) {
		$parameters[] = &$row[$field->name];
	}
	
	// Assemble array of parameters and key values
	call_user_func_array(array($stmt, 'bind_result'), $parameters);
	
	// Save each key -> value into the results array
	while ($stmt->fetch()) {
		foreach($row as $key => $val) {
			$x[$key] = $val;
		}
		$results[] = $x;
	}
	
	// Return results
	return $results;
}

/* ----------------------------------------------------------------------------------------------- */

?>