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

$sql = "SELECT * FROM courses WHERE type = 'Cert' ORDER BY date DESC";
$result = $conn->query($sql);

if($result->num_rows > 0){
	echo '<table class="files"><caption>Certificates</caption>';
	echo '<tr>';
		echo '<th>Name</th>';
		echo '<th>School</th>';
		echo '<th>Date</th>';
	echo '</tr>';	
    while($row = $result->fetch_assoc()){   
		echo '<tr>';
		echo '<td>'.$row["name"].'</td>';
		echo '<td>'.$row["school"]. '</td>';
			echo '<td>'.date("d-m-Y", strtotime($row["date"])). '</td>';
        echo '</tr>';
    }
	echo '</table>';
}else{
    echo "0 results";
}
echo '<br><br>';
$sql = "SELECT * FROM courses WHERE type = 'Online' ORDER BY date DESC";
$result = $conn->query($sql);
if($result->num_rows > 0){
	echo '<table class="files"><caption>Online Courses</caption>';
	echo '<tr>';
		echo '<th>Name</th>';
		echo '<th>School</th>';
		echo '<th>Date</th>';
	echo '</tr>';	
    while($row = $result->fetch_assoc()){   
		echo '<tr>';
		echo '<td><a href="'.$row["link"].'" rel="noopener noreferrer" target="_blank">'.$row["name"]. '</a></td>';
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