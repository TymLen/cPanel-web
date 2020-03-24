<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<script type="text/javascript" src="../js/loader.js"></script>
	<link rel="icon" type="image/png" href="../img/favicon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Protyme: Projects</title>
  </head>
  <body onload="timeout()" style="margin:0;">	
	<header>
			<?php include '../php/header.php';
			showHeader(basename(__FILE__));
			?>
	</header>	
	<article>
	<div id="content" class="animate-bottom">
	<div class="article-font">
		<div class="card-deck">
			<?php include '../php/selectProjectGrid.php';
				getProjects("ALL");
			?>
		</div>
		</div>
	</article>
</div>
<div id="loader"></div>
	<footer><?php include '../php/footer.php';?></footer>
  </body>
</html>
