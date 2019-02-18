<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
		<title>Protyme Portfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/> 
		<script type="text/javascript" src="./js/welcomeSlides.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
  </head>
  <body>	
	<header>
		<?php 
			include './php/header.php';
			showHeader(basename(__FILE__));
		?>
	</header>	
	<div class ="flex">
	<article>
	<div class = "splash">
		<a href ="./html/projects.php">
		<img class="welcome" src="./img/icons/EscapeIcon.png">
		<img class="welcome" src="./img/icons/IoTIcon.png">
		<img class="welcome" src="./img/icons/MobWebIcon.png">
		<img class="welcome" src="./img/icons/protymeicon.png">
		<img class="welcome" src="./img/icons/Q4FIcon.png">
			<img class ="splashText" src="/./img/slidecover.png">
			<p class="splashSubText">Projects by Tym</p>
		</a>
	</div>
	</article>
	<footer><?php include './php/footer.php';?></footer>
	</div>
  </body>
</html>
