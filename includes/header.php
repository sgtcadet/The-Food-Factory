<?php
	$companyName = "The Food Factory";
	include('includes/arrays.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo TITLE?></title>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/styles.css">
	<!--Awesome Font-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<div id="cover"></div>
<body>
	<header>
		<div id="header-top">
			<a href="index.html"><img src="img/logo.png" id="factory-logo" alt="The Food Factory">
			<h1>THE FOOD FACTORY</h1>
				
				<p>EXTRAORDINARY FOOD</p>
			</a>
			<div id="social_icons">
				<a href="#"><img src="img/fb.png" alt="Facebook"></a>
				<a href="#"><img src="img/twitter.png" alt="Twiter"></a>
				<a href="#"><img src="img/linkedin.png" alt="LinkedIn"></a>
				<a href="#"><img src="img/ig.png" alt="Instagram"></a>
			</div><!--social_icons-->
		</div><!--header-top-->	
		<nav class="cf nav">
			<?php include('includes/nav.php');?>
		</nav>
	</header>

	<div id="content">
		