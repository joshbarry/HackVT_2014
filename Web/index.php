<!DOCTYPE html>
<html>
<head>
	<title>HackVT 2014</title>
	<link rel="shortcut icon" href="img/icon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.css">
	<script src="//code.jquery.com/mobile/1.4.4/jquery.mobile-1.4.4.min.js"></script>
	<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="excanvas.js"></script><![endif]-->
	<script language="javascript" type="text/javascript" src="/lib/jqplot/jquery.jqplot.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/lib/jqplot/jquery.jqplot.css" />
	<script language="javascript" type="text/javascript" src="/lib/jqplot/plugins/jqplot.barRenderer.min.js"></script>
	<link href="css/mainStyle.css" type="text/css" rel="stylesheet">
	<?php include 'jquery-min.php' ?>
</head>

<body class="sf-home">
	<h1 style="text-align:center;">The Cost of <i>Going Green</i></h1>
	<div id="content">
		<div id="content-left">
			<form>
			<div class="viewItem" id="monthClick">
				<div class="viewTitle">Month of the Year:</div>
				<div class="viewField">
					<input type="range" name="month" id="month" value="1" data-popup-enabled="true" data-hightlight="true" min="1" max="12">
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Monthly KW/H Usage:</div>
				<div class="viewField">
					<input type="range" name="cost" id="cost" value="0" data-popup-enabled="true" data-hightlight="true" min="0" max="999">
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Number of Solar Panels:</div>
				<div class="viewField">
					<input type="range" name="solar" id="solar" value="1" data-popup-enabled="true" data-hightlight="true" min="1" max="10">
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Your Current Average Cost:</div>
				<div class="viewField" style="margin:8px; display:block;">
				<div id="avgcostfld">$</div>
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Average Solar Cost:</div>
				<div class="viewField" style="margin:8px; display:block;">
				<div id="solarcostfld">$</div>
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Average Hydro Cost:</div>
				<div class="viewField" style="margin:8px; display:block;">
				<div id="hydrocostfld">$</div>
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Average Wind Cost:</div>
				<div class="viewField" style="margin:8px; display:block;">
				<div id="windcostfld">$</div>
				</div>
			</div>
			<div class="viewItem">
			<table>
			<tr>
			<td><label for="switch">Solar:</label></td>
			<td><input type="checkbox" data-role="flipswitch" name="switch" id="switch"></td>
			</tr>
			</table>
			</div>
			</form>
		</div>
		<div id="content-right">
			<?php include ("legraph.php"); ?>
		</div>
	</div>
</body>

</html>
<?php dbdisconnect($con); ?>