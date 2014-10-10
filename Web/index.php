
<?php

?>
<!DOCTYPE html>
<html>

<head>
	<title>Hello World!</title>
	<link rel="shortcut icon" href="img/icon.ico">
	<link href="styleMain.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="./js/jquery-min.js"></script>
</head>

<body class="sf-home">

	<header id="sf-header-top">
		<div class="sf-container">
			<div class="logo">
				<img src="img/MorrowLogo.png" alt="Office" class="imgBanner">
			</div>
			<div class="sf-nav-block">
				<nav id="sf-navigation">
					<ul class="sf-nav-menu">
						<li class="sf-nav-item">
							<a id="jq-home" href="/home">Home</a>
						</li>
						<li class="sf-nav-item">
							<a id="jq-about" href="/about">Credentials</a>
						</li>
						<li class="sf-nav-item">
							<a id="jq-products" href="/products">Services</a>
							<ul class="sf-subnav">
								<li class="sf-nav-item">
									<a id="jq-about" href="/about">Clinical Services</a>
								</li>
								<li class="sf-nav-item">
									<a id="jq-about" href="/about">Supervision & Case Consultation</a>
								</li>
							</ul>
						</li>
						<li class="sf-nav-item">
							<a id="jq-products" href="/products">Therapy</a>
						</li>
						<li class="sf-nav-item">
							<a id="jq-products" href="/products">Common Questions</a>
						</li>
						<li class="sf-nav-item">
							<a id="jq-products" href="/products">Fees and Forms</a>
						</li>
						<li class="sf-nav-item">
							<a id="jq-contact" href="/contact">Contact Me</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
	<?php include_once 'includes/router.php'; ?>
	
	<div class="sf-container">
		<div class="sf-grid-12 sf-footer">
			<p>Home | Contact Me</p>
			<p>Copyright &copy; <?php echo date("Y"); ?> Sternforce Technologies LLC. All Rights Reserved.</p>
		</div>
	</div>

</body>

</html>
