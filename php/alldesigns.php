<?php
try{
    $config = parse_ini_file('../../dbweb.ini');
}catch(Exception $e){
    echo 'Error: '.$e->getMessage();
}

// Create connection
$conn = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['database']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM designs ORDER BY date DESC";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo '<table class="files">';
	echo '<tr>';
		echo '<th>Date</th>';
		echo '<th>Link</th>';
	echo '</tr>';	
    while($row = $result->fetch_assoc()){   
		echo '<td>'.date("d-m-Y", strtotime($row["date"])). '</td>';
		echo '<td>'.$row["link"]. '</td>';
        echo '</tr>';
    }
	echo '</table>';
}else{
    echo "0 results";
}

mysqli_close($conn); 
?> 