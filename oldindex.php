<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
		<title>Protyme Portfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/> 
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
		<p id="info">
			Welcome to my website which I use to develop my skills and also host information about my projects.<br><br>
			This website is still in active development with new design and features being added often.
			
		</p>
		
		<?php 
				include './php/selectProjectGrid.php';
				getProjects("LATEST");
			?>
		<?php 
			include './php/latestcourse.php';
		?>
	</article>
	<footer><?php include './php/footer.php';?></footer>
	</div>
  </body>
</html>
