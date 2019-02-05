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
	echo '<div class ="protitle">'.$row["title"].'</div><br><br>';
	if(!is_null($row["folder"])){
		$directory = "../img/".$row["folder"];
		$images = glob($directory ."/*.png");
		$max = 0;
		$count = 0;
		
		
		foreach($images as $image){
			
			$max = $max +1;
		}if(!$max <= 0){
			echo 	'<div class="slideshow-box">';
			foreach($images as $image){
				$count = $count + 1;
				echo 	'<div class="proSlide">';
				echo 		'<div class="slideNum">'.$count.'/'.$max.'</div>';
				echo 		'<img class="projectPic" src="'.$image.'">';
				$caption = explode("/", $image);
				$file = explode(".", $caption[sizeof($caption)-1]);
				echo 		'<div class="slideCaption">'.$file[0].'</div>';
				echo 	'</div>';
			}
			echo '<a class="backPic" onclick="plusSlides(-1)">&#10094; Back</a>';
			echo '<a class="forwardPic" onclick="plusSlides(1)">Next &#10095;</a>';
			echo '</div>';
		}
	}
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