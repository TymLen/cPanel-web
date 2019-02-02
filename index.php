<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />
	<link rel="icon" type="image/png" href="./img/favicon.png">
    <title>Protyme Underconstruction</title>
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
		<h2><a href="./html/projects.php" title="See all Projects">Recent Projects</a>:</h2> 
		<?php include './php/selectProject.php';
				getProjects("LATEST");
			?>
		<h2><a href="./html/edu.php" title="See all Education">Recent Education</a>: </h2>
		<?php include './php/latestcourse.php';?>
	</article>
	<footer><?php include './php/footer.php';?></footer>
	</div>
  </body>
</html>
