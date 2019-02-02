<?php
	function showHeader($origin){
		if($origin === 'index.php'){
			echo'<a href="./index.php"><img class = "banner" src = "./img/ProTyme.png" alt="Banner Text"></a>';
			echo'<div class="header-nav">';
				echo'<a class="here" href="#">Home</a>';
				echo'<a class= "active" href="./html/projects.php">Projects</a>';
				echo'<a class= "active" href="./html/designs.php">Designs</a>';
				echo'<a class= "active" href="./html/edu.php">Education</a>';
			echo'</div>';

		}else{
			echo'<a href="../index.php"><img class = "banner" src = "../img/ProTyme.png" alt="Banner Text"></a>';
			echo'<div class="header-nav">';
				echo'<a class= "active" href="../index.php">Home</a>';
				if($origin === 'projects.php'){echo'<a class="here"href="#">Projects</a>';}else{echo'<a class= "active" href="../html/projects.php">Projects</a>';}			
				if($origin === 'designs.php'){echo'<a class="here"href="#">Designs</a>';}else{echo'<a class= "active "href="../html/designs.php">Designs</a>';}	
				if($origin === 'edu.php'){echo'<a class="here"href="#">Education</a>';}else{echo'<a class= "active" href="../html/edu.php">Education</a>';}		
			echo'</div>';
		}
		
	}
?> 