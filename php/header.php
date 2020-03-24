<?php
	function showHeader($origin){
		if($origin === 'index.php'){
			echo'<nav class="navbar navbar-expand-md navbar-dark fixed-top">';
				echo'<a class="navbar-brand" href="./index.php"><img class = "banner" src = "./img/bannerTextBlue.png" alt="Banner Text"></a>';
			echo'<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">';
          echo'<span class="navbar-toggler-icon"></span>';
        echo'</button>';
        echo'<div class="collapse navbar-collapse" id="navbarCollapse">';
          echo'<ul class="navbar-nav mr-auto">';
            echo'<li class="nav-item active"><a class="nav-link" href="#">Home</a></li>';		
				echo'<li class="header-nav"><a class="nav-link" href="./html/projects.php">Projects</a></li>';		
				echo'<li class="header-nav"><a class="nav-link" href="./html/edu.php">Education</a></li>';		
          echo'</ul>';
          echo'<form class="form-inline mt-2 mt-md-0">';
            echo'<a class="navbar-brand" href="https://www.linkedin.com/in/tym-l-963833174/"><img class="socialIcon" src="./img/linkedin.png" alt="LinkedIn">';
            echo'<a class="navbar-brand" href="https://github.com/TymLen"><img class="socialIcon" src="../img/GitHub.png" alt="gitHub"></a>';
          echo'</form>';
        echo'</div>';
      echo'</nav>';
		}else{
			echo'<nav class="navbar navbar-expand-md navbar-dark fixed-top">';
				echo'<a class="navbar-brand" href="../index.php"><img class = "banner" src = "../img/bannerTextBlue.png" alt="Banner Text"></a>';
			echo'<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">';
          echo'<span class="navbar-toggler-icon"></span>';
        echo'</button>';
        echo'<div class="collapse navbar-collapse" id="navbarCollapse">';
          echo'<ul class="navbar-nav mr-auto">';
            echo'<li class="header-nav"><a class="nav-link" href="../../index.php">Home</a></li>';		
        if($origin ==='projects.php'){echo'<li class="nav-item active"><a class="nav-link" href="../html/projects.php">Projects</a></li>';}
        else{echo'<li class="header-nav"><a class="nav-link" href="../html/projects.php">Projects</a></li>';}		
        if($origin ==='edu.php'){echo'<li class="nav-item active"><a class="nav-link" href="../html/edu.php">Education</a></li>';}
        else{echo'<li class="header-nav"><a class="nav-link" href="../html/edu.php">Education</a></li>';}		
          echo'</ul>';
          echo'<form class="form-inline mt-2 mt-md-0">';
          echo'<a class="navbar-brand" href="https://www.linkedin.com/in/tym-l-963833174/"><img class="socialIcon" src="../img/linkedin.png" alt="LinkedIn">';
          echo'<a class="navbar-brand" href="https://github.com/TymLen"><img class="socialIcon" src="../img/GitHub.png" alt="gitHub"></a>';
          echo'</form>';
        echo'</div>';
      echo'</nav>';
		}
	}
?> 

