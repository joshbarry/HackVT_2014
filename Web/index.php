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
	<h1>Environmental Calculator V.II.V</h1>
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
					<input type="range" name="cost" id="cost" value="0" data-popup-enabled="true" data-hightlight="true" min="0" max="1500">
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Average Solar Cost:</div>
				<div class="viewField">
				Foo
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Average Hydro Cost:</div>
				<div class="viewField">
				Foo
				</div>
			</div>
			<div class="viewItem">
				<div class="viewTitle">Average Wind Cost:</div>
				<div class="viewField">
				Foo
				</div>
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