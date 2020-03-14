<?php
	function showHeader($origin){
		if($origin === 'index.php'){
			echo'<div class="headBox">';
			echo'<table class="social"><tr><td><a class="socialLink" href="https://www.linkedin.com/in/tym-l-963833174/"><img class="socialIcon" src="./img/linkedin.png" alt="LinkedIn"></a><td></tr>';
			echo'<tr><td><a class="socialLink" href="https://github.com/TymLen"><img class="socialIcon" src="./img/GitHub.png" alt="gitHub"></a></td></tr></table>';
			echo'<a href="./index.php"><img class = "banner" src = "./img/bannerTextBlue.png" alt="Banner Text"></a>';	
			echo'<div class="header-nav">';
				echo'<a class="here" href="#">Home</a>';
				echo'<a class= "active" href="./html/projects.php">Projects</a>';
				echo'<a class= "active" href="./html/edu.php">Education</a>';
			echo'</div>';	
			echo'</div>';
		}else{
			echo'<div class="headBox">';
			echo'<table class="social"><tr><td><a class="socialLink" href="https://www.linkedin.com/in/tym-l-963833174/"><img class="socialIcon" src="../img/linkedin.png" alt="LinkedIn"></a><td></tr>';
			echo'<tr><td><a class="socialLink" href="https://github.com/TymLen"><img class="socialIcon" src="../img/GitHub.png" alt="gitHub"></a></td></tr></table>';
			echo'<a href="../index.php"><img class = "banner" src = "../img/bannerTextBlue.png" alt="Banner Text"></a>';
			echo'<div class="header-nav">';
				echo'<a class= "active" href="../index.php">Home</a>';
				if($origin === 'projects.php'){echo'<a class="here"href="#">Projects</a>';}else{echo'<a class= "active" href="../html/projects.php">Projects</a>';}			
				if($origin === 'edu.php'){echo'<a class="here"href="#">Education</a>';}else{echo'<a class= "active" href="../html/edu.php">Education</a>';}		
			echo'</div>';
			echo'</div>';
		}
	}
?> 