<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />
		<link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <title>Protyme Portfolio</title>
  </head>
  <body>	
	<header>
		<?php include './php/header.php';
			showHeader(basename(__FILE__));
		?>
	</header>	
	<div class ="flex">
	<article>
		<p id="info">
			Welcome to my website which I use to develop my skills and also host information about my projects.<br><br>
			This website is still in active development with new design and features being added often.
		</p>
		
		<?php include './php/selectProjectGrid.php';
				getProjects("LATEST");
			?>
		<?php include './php/latestcourse.php';?>
	</article>
	<footer><?php include './php/footer.php';?></footer>
	</div>
  </body>
</html>
