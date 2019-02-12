<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
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
		<p id="info">
			This page contains designs that are not part of a project that but I still liked.<br><br>
		</p>
		<?php include '../php/alldesigns.php';?>
	</article>
	<footer><?php include '../php/footer.php';?></footer>
	</div>
  </body>
</html>
