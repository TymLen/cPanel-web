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
$sql = "SELECT * FROM courses ORDER BY date DESC LIMIT 1";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo '<table class="files">';
	echo '<tr>';
		echo '<th>Name</th>';
		echo '<th>School</th>';
		echo '<th>Date</th>';
	echo '</tr>';	
    while($row = $result->fetch_assoc()){   
		echo '<tr>';
			echo '<td>'.$row["name"]. '</td>';
			echo '<td>'.$row["school"]. '</td>';
			echo '<td>'.date("d-m-Y", strtotime($row["date"])). '</td>';
        echo '</tr>';
    }
	echo '</table>';
}else{
    echo "0 results";
}

mysqli_close($conn); 
?> 