<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
	<script src="../html/overlay.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

    <title>Protyme Underconstruction</title>
  </head>
  <body>	
	<header>
			<?php include '../php/header.php';
			showHeader(basename(__FILE__));
			?>
	</header>	
	<div class ="flex">
	<article>
	<div id="projects"></div>
		<?php include '../php/selectProjectGrid.php';
			getProjects("ALL");
		?>
	</article>
	<footer><?php include '../php/footer.php';?></footer>
	</div>
	<div id="overlay" onclick="hideOverlay()"><div id="longdesc"></div></div>
  </body>
  
</html>
