<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
	<script src="../html/overlay.js"></script>
    <title>Protyme Underconstruction</title>
  </head>
  <body>	
	<header>
			<?php include '../php/header.php';?>
	</header>	
	<div class ="flex">
	<article>
	<div id="projects"></div>
		<p id="info">
			This is where information about all my IT projects is hosted.<br><br>
			This page is still under construction.	
		</p>
		<?php include '../php/allproject.php';?>
	</article>
	<footer><?php include '../php/footer.php';?></footer>
	</div>
	<div id="overlay" onclick="hideOverlay()"><div id="longdesc"></div></div>
  </body>
  
</html>
