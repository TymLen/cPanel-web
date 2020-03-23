<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
		<title>Protyme Portfolio</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon"/> 
		<script type="text/javascript" src="./js/welcomeSlides.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link href="Carousel%20Template%20%C2%B7%20Bootstrap_files/carousel.css" rel="stylesheet">
		<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>	
		<?php 
			include './php/header.php';
			showHeader(basename(__FILE__));
		?>
	
	<article>
		<div class=caraBack>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
	  <img class="caraImage" src="./img/icons/original/MobIcon.png" alt="First slide">
        <div class="container">
          <div class="carousel-caption"><div class="caraText">
            <p class="caraTextBig">Android</p>
            <p>Developing Android Solutions using Android Studio.</p>
          </div></div>
        </div>
      </div>
      <div class="carousel-item">
	  <img class="caraImage" src="./img/icons/original/RevistIcon.png" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
			  <div class="caraText">
			 <p class="caraTextBig">Front-end</p>
            <p>Frontend development using PHP, JavaScript, and Bootstrap.</p>
          </div>
		</div>
	</div>
      </div>
      <div class="carousel-item">
	  <img class="caraImage" src="./img/icons/original/ServerIcon.png" alt="First slide">
        <div class="container">
          <div class="carousel-caption">
			  <div class="caraText">
            <p class="caraTextBig" >Back-end</p>
			<p>Dynamic webpages using server and databases.</p>
	</div>
		  </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	</div>
	<div class="article-font">
		<p class="latestProjectText">Latest Projects</p>
		<div class="card-deck">
		<?php include './php/latestProjects.php';
		getLatestProjects();
		?>
	</div>
	</div>
	</article>
	<footer><?php include './php/footer.php';?></footer>
  </body>
  
</html>
