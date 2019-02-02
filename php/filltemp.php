<?php
try{
    $config = parse_ini_file('../../dbweb.ini');
}catch(Exception $e){
    echo 'Error: '.$e->getMessage();
}
if(isset($_GET["projectid"])){
	$id = $_GET["projectid"];
}else{
	$id = 1;
}
// Create connection
$conn = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['database']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM projectshort LEFT JOIN projectlong ON projectshort.id=projectlong.proid  WHERE id = '".$id."' ORDER BY begin DESC";
$result = $conn->query($sql);

if($result->num_rows > 0){
	$row = $result->fetch_assoc();
	echo'<div class ="protitle">'.$row["title"].'</div><br><br>';
	echo '<img alt="'.$row["picture"].'" title="'.$row["picture"].'" class= "projectIconArt" src= "../img/'.$row["picture"].'.png">';
	echo'<div class="subheading">Description</div><br>';
	echo'<div class="description">'.$row["longdisc"];
	echo '</div><br><br>';
	echo'<div class="subheading">Media</div><br>';
	echo'<div class="media">'.$row["media"].'</div>';
}else{
    echo "0 results";
}

mysqli_close($conn); 
?> 