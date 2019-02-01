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
				$disc = "";
				echo '<table class="files">';
				echo '<tr>';
					echo '<th>Type</th>';
					echo '<th>Name</th>';
					echo '<th>Date</th>';
				echo '</tr>';	
				while($row = $result->fetch_assoc()){   
					echo '<tr>';
						if(file_exists('../img/'.$row["picture"].'.png')){
							echo '<td><img alt="'.$row["picture"].'" title="'.$row["picture"].'" class= "icon" src= "../img/'.$row["picture"].'.png">'.'</td>';
						}
						else{
							echo '<td><img alt="No picture" title="No picture yet" class= "icon" src="./img/noIcon.png">'.'</td>';
						}
						if($row["longdisc"] === NULL){
							$disc = $row["info"];
						}else{
							$disc = $row["longdisc"];
						}
						echo '<td><a title="'.$row["info"].'" href="../html/protemplate.php?projectid='.$row["proid"].'">'.$row["title"]. '</a></td>';
						if(is_null($row["end"])){
							echo'<td>Ongoing</td>';
						}else{
							echo '<td>'.date("d-m-Y", strtotime($row["end"])). '</td>';
						}
					echo '</tr>';
				}
				echo '</table>';
			}else{
				echo "Database Error";
			}	
			break;

		case "LATEST":
			$sql = "SELECT * FROM projectshort LEFT JOIN projectlong ON projectshort.id=projectlong.proid WHERE end IS NULL";
			$result = $conn->query($sql);
			
			if($result->num_rows > 0){
				echo '<table class="files">';
				echo '<tr>';
					echo '<th>Type</th>';
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
				echo '</table>';
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