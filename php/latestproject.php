<?php
try{
    $config = parse_ini_file('../dbweb.ini');
}catch(Exception $e){
    echo 'Error: '.$e->getMessage();
}

// Create connection
$conn = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['database']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM projectshort WHERE end IS NULL";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo '<table class="files">';
	echo '<tr>';
		echo '<th>Type</th>';
		echo '<th>Name</th>';
		echo '<th>Date</th>';
		echo '<th>Description</th>';
	echo '</tr>';	
    while($row = $result->fetch_assoc()){   
		echo '<tr>';
			if(file_exists('./img/'.$row["picture"].'.png')){
				echo '<td><img alt="'.$row["picture"].'" title="'.$row["picture"].'" class= "icon" src= "./img/'.$row["picture"].'.png">'.'</td>';
			}
			else{
				echo '<td><img alt="No picture" title="No picture yet" class= "icon" src="./img/noIcon.png">'.'</td>';
			}
			echo '<td>'.$row["title"]. '</td>';
			if(is_null($row["end"])){
				echo'<td>'.date("d-m-Y");
			}else{
				echo '<td>'.date("d-m-Y", strtotime($row["end"])). '</td>';
			}
			echo'<td>'.$row["info"].'</td>';
			
        echo '</tr>';
    }
	echo '</table>';
}else{
    echo "0 results";
}

mysqli_close($conn); 
?> 