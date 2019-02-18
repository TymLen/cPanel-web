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
mysqli_set_charset($conn, 'utf8');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM projectshort LEFT JOIN projectlong ON projectshort.id=projectlong.proid  WHERE id = '".$id."' ORDER BY begin DESC";

$result = $conn->query($sql);

if($result->num_rows > 0){
	$row = $result->fetch_assoc();
	echo '<div class ="protitle">'.$row["title"].'</div><br>';
	echo'<div class ="proNav"><img class="downIcon" src="../img/downarrow.png"><a href="#disc"> Description</a> 
	<a href="#challenge">Challenges</a> <a href=#solution>Solution</a> <a href="#media">Media</a><img class="downIcon" src="../img/downarrow.png"></div><br>';
	echo'<a name="disc"></a><div class="subheading">Description:</div><br>';
	echo'<div class="description">'.$row["longdisc"].'</div><br><br>';
	echo'<a name="challenge"></a><div class="subheading">Challenges: <div class="rightnav"><a href="#">Back to top <img class="upicon" src="../img/uparrow.png"></a></div></div><br>';
	echo'<div class="description">'.$row["challenges"].'</div><br><br>';
	echo'<a name="solution"></a><div class="subheading">Solution: <div class="rightnav"><a href="#">Back to top <img class="upicon" src="../img/uparrow.png"></a></div></div><br>';
	echo'<div class="description">'.$row["solution"].'</div><br><br>';
	echo'<a name="media"></a><div class="subheading">Media: <div class="rightnav"><a href="#">Back to top <img class="upicon" src="../img/uparrow.png"></a></div></div><br>';
	if(!is_null($row["folder"])){
		$directory = "../img/".$row["folder"];
		$images = glob($directory ."/*.png");
		$max = 0;
		$count = 0;
		
		
		foreach($images as $image){
			
			$max = $max +1;
		}
		if(!$max <= 0){
			echo 	'<div class="slideshow-box">';
			foreach($images as $image){
				$count = $count + 1;
				echo 	'<div class="proSlide">';			
				echo 		'<img class="projectPic" src="'.$image.'">';
				$caption = explode("/", $image);
				$file = explode(".", $caption[sizeof($caption)-1]);
				echo 		'<div class="slideNum">'.$count.'/'.$max.'</div>';
				echo 		'<div class="slideCaption">'.$file[0].'</div>';
				echo 	'</div>';
			}
			echo '<a class="backPic" onclick="plusSlides(-1)">&#10094; Back</a>';
			echo '<a class="forwardPic" onclick="plusSlides(1)">Next &#10095;</a>';
			echo '</div>';
		}
	}
	if(!is_null($row["media"])){
		echo'<div class="media">'.$row["media"].'</div>';
	}
	

}else{
    echo "0 results";
}

mysqli_close($conn); 
?> 