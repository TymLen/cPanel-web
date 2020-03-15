<?php
function getProjects($select){
	if($select === "LATEST"){
		try{
			$config = parse_ini_file('../dbweb.ini');
		}catch(Exception $e){
			echo 'Error: '.$e->getMessage();
		}	
	}else{
		try{
			$config = parse_ini_file('../../dbweb.ini');
		}catch(Exception $e){
			echo 'Error: '.$e->getMessage();
		}
	}
	
	$conn = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['database']);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	switch($select){
		case "ALL":
			$sql = "SELECT * FROM projectshort LEFT JOIN projectlong ON projectshort.id=projectlong.proid ORDER BY begin DESC";
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
						echo '<p class="card-text" max-height="10px">'.$row["info"].'</p>';
					echo '<div class="d-flex justify-content-between align-items-center">';
						echo '<div class="btn-group">';
							echo '<button class="btn btn-sm btn-outline-secondary" onclick=window.location.href="../html/protemplate.php?projectid='.$row["proid"].';">View</button>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
				}
			}else{
				echo "Database Error";
			}	
			echo '</div>';
			echo '</div>';
			break;

		case "LATEST":
			$sql = "SELECT * FROM projectshort LEFT JOIN projectlong ON projectshort.id=projectlong.proid WHERE end IS NULL";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				echo '<table class="files">';
				echo'<caption><a href="./html/projects.php" title="See all Projects">Recent Projects <img class = "rightIcon" src="./img/rightarrow.png"></a>';
				echo '<tr>';
					echo '<th>Icon</th>';
					echo '<th>Name</th>';
					echo '<th>Date</th>';
				echo '</tr>';	
				while($row = $result->fetch_assoc()){   
					echo '<tr>';
						if(file_exists('./img/'.$row["picture"].'.png')){
							echo '<td><img alt="'.$row["picture"].'" title="'.$row["picture"].'" class= "projectIconIndex" src= "./img/icons/'.$row["picture"].'.png">'.'</td>';
						}
						else{
							echo '<td><img alt="No picture" title="No picture yet" class= "projectIconIndex" src="./img/noIcon.png">'.'</td>';
						}
						echo '<td><a title="'.$row["info"].'" href="./html/protemplate.php?projectid='.$row["proid"].'">'.$row["title"]. '</a></td>';
						if(is_null($row["end"])){
							echo'<td>Ongoing</td>';
						}else{
							echo '<td>'.date("d-m-Y", strtotime($row["end"])). '</td>';
						}			
					echo '</tr>';
				}
				echo '</table><br><br>';
			}else{
				echo "Database error";
			}
			break;
		default:
			echo "Unrecognised request";
	}
	mysqli_close($conn); 
}
?> 