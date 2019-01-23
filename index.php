<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />
    <title>Protyme Underconstruction</title>
  </head>
  <body>	
	<header>
		<a href="./index.php"><img class = "banner" src = "./img/bannertext.png" alt="Banner Text"></a>
			<div class="navbar">
				<a href="../html/projects.php">Projects</a>
				<a href="../html/designs.php">Designs</a>
				<a href="../html/edu.php">Education</a>
			</div>
	</header>	
	<article>
		<p id="info">
			Welcome to my website which I use to develop my skills and also host information about my projects.<br><br>
			This website is under construction but my node.js portfolio can be accessed by the link below (please allow a couple of seconds for free server to start up)
		</p>
		<div id ="deskShort">
			<a href="https://protyme.herokuapp.com/" rel="noopener noreferrer" target="_blank"><img class = "deskIcon" src = "./img/nodeIcon.png" alt="nodejs Icon"><br>Node.js Portfolio</a><br><br>
		</div>
		<h2><a href="#" title="See all Projects">Recent Projects</a>:</h2> 
		<?php include './php/latestproject.php';?>
		<h2><a href="#" title="See all Education">Recent Education</a>: </h2>
		<?php include './php/latestcourse.php';?>
	</article>
	<footer><?php include './php/footer.php';?></footer>
  </body>
</html>
