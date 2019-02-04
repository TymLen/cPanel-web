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
				echo '<div class="grid-box">';
				
				while($row = $result->fetch_assoc()){  
					echo '<div class="grid-item">';
					echo '<a title="'.$row["info"].'" href="../html/protemplate.php?projectid='.$row["proid"].'">';
						if(file_exists('../img/'.$row["picture"].'.png')){
							echo '<img alt="'.$row["picture"].'" title="'.$row["picture"].'" class= "projectIcon" src= "../img/'.$row["picture"].'.png"><br>';
						}
						else{
							echo '<img alt="No picture" title="No picture yet" class= "icon" src="./img/noIcon.png"><br>';
						}
						if($row["longdisc"] === NULL){
							$disc = $row["info"];
						}else{
							$disc = $row["longdisc"];
						}
						echo '<a title="'.$row["info"].'" href="../html/protemplate.php?projectid='.$row["proid"].'">'.$row["title"].'<br>';
						if(is_null($row["end"])){
							echo'<td>(In Development)</td>';
						}else{
							echo '<td>'.date("d-m-Y", strtotime($row["end"])). '</td>';
						}	
					echo '</a>';
					echo '</div>';
				}
				echo '</div>';
			}else{
				echo "Database Error";
			}	
			break;

		case "LATEST":
			$sql = "SELECT * FROM projectshort LEFT JOIN projectlong ON projectshort.id=projectlong.proid WHERE end IS NULL";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				echo '<table class="files">';
				echo'<caption><div class ="protitle"><a href="./html/projects.php" title="See all Projects">Recent Projects</a></div><br>';
				echo '<tr>';
					echo '<th>Icon</th>';
					echo '<th>Name</th>';
					echo '<th>Date</th>';
				echo '</tr>';	
				while($row = $result->fetch_assoc()){   
					echo '<tr>';
						if(file_exists('./img/'.$row["picture"].'.png')){
							echo '<td><img alt="'.$row["picture"].'" title="'.$row["picture"].'" class= "icon" src= "./img/'.$row["picture"].'.png">'.'</td>';
						}
						else{
							echo '<td><img alt="No picture" title="No picture yet" class= "icon" src="./img/noIcon.png">'.'</td>';
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