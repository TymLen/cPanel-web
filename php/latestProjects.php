<?php
function getLatestProjects(){
	try{
		$config = parse_ini_file('../dbweb.ini');
	}catch(Exception $e){
		echo 'Error: '.$e->getMessage();
	}	
	
	$conn = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['database']);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM projectshort LEFT JOIN projectlong ON projectshort.id=projectlong.proid ORDER BY begin DESC LIMIT 3";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()){  
			echo '<div class="col-md-4">';
			echo '<div class="card border-secondary mb-3" style="max-width: 18rem;">';
			echo '<img class="img-thumbnail" src= "../img/icons/'.$row["picture"].'.png"></img>';
			echo '<div class="card-body">';
			if($row["longdisc"] === NULL){
				$disc = $row["info"];
			}else{
				$disc = $row["longdisc"];
			}
			echo '<p class="card-text" max-height="10px">'.$row["title"].'</p>';
			echo '<div class="d-flex justify-content-between align-items-center">';
			echo '<div class="btn-group">';
			if($row["end"]===NULL){
				$date = "Active Project";
			}else{
				$date = "Project Finished ".date("d/m/Y", strtotime($row["end"]));
			}
			echo '<p class="card-text"><small class="text-muted">'.$date.'</small></p>';
			echo '</div>';
			echo '<div class="btn-group">';
			echo '<button class="btn btn-sm btn-outline-secondary" onclick=window.location.href="../html/protemplate.php?projectid='.$row["proid"].';">View</button>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			echo '</div>';
			}	
			echo '</div>';
			echo '</div>';
	}
	mysqli_close($conn); 
}
?> 