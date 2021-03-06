<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
	      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161854092-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-161854092-1');
</script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="../js/loader.js"></script>
	<link rel="icon" type="image/png" href="../img/favicon.png"/>
	<script type="text/javascript" src="../js/mousemove.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css" />
    <title>Protyme: Education</title>
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
		<?php include '../php/allcourse.php';?>
		</div>
	</article>
	</div>
	<div id="loader"></div>
	<footer><?php include '../php/footer.php';?></footer>
  </body>
</html>
