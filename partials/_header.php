<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<meta name="description" content="Site de Pythagoras"/>
		<meta name="author" content="Groupe afpa"/>
		
		<title>
			<?php
				echo isset($title) ? $title.' - '.WEBSITE_NAME :WEBSITE_NAME.'-Plateforme moderne de cours en ligne.';
				?>
		</title>
		
		<!-- Feuilles de styles Bootstrap -->
		<link rel="stylesheet" href="assets/css/theme.css"/>
		<link rel="stylesheet" href="assets/js/google-code-prettify/prettify.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<?php 
			include('partials/_menu.php');
		?>