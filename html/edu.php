<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Protyme: Education</title>
  </head>
  <body>	
	<header>
			<?php include '../php/header.php';
			showHeader(basename(__FILE__));
			?>
	</header>	
	<article>
	<div class="article-font">
		<p class="tableText">Below are the details of some of my recent courses and education.
		</p>
		<?php include '../php/allcourse.php';?>
		</div>
	</article>
	<footer><?php include '../php/footer.php';?></footer>
  </body>
</html>
