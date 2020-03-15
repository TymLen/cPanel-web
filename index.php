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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>	
		<?php 
			include './php/header.php';
			showHeader(basename(__FILE__));
		?>
	
	<article>
	<div class = "splash">
		<a href ="./html/projects.php">
		<?php 
			$directory = "./img/icons/original/";
			$images = glob($directory ."/*.png");
			$max = 0;
			$count = 0;	
			foreach($images as $image){	
				$max = $max +1;
			}
			foreach($images as $image){	
				echo '<img class="welcome" src="'.$image.'">';
			}
		?>
			<img class ="splashText" src="./img/slidecover2.png">
			<p class="splashSubText">Projects by Tym</p>
		</a>
	</div>
	</article>
	<footer><?php include './php/footer.php';?></footer>
  </body>
</html>
