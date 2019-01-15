<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB" lang="en-GB">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="./css/stylesheet.css" />
    <title>Protyme Underconstruction</title>
  </head>
  <body>	
	<header>
		<h1>Portfolio</h1><br>
	</header>	
	<article>
		<p id="info">Welcome to my website where I host information about myself and my projects<br>
			This website is under construction but my node.js portfolio can be accessed by the link below (please allow a couple of seconds for free server to start up)
		</p>
		<div id ="deskShort">
			<a href="https://protyme.herokuapp.com/" rel="noopener noreferrer" target="_blank"><img class = "deskIcon" src = "./img/nodeIcon.png"><br>Node.js Portfolio</a><br><br>
		</div>
		</article>
	<article>
		<div id ="window"> 
			<div id = "title"> <img class="icon" src = "./img/folder95.png">    Projects </div> 
			<div id = "navi">
				<table class="files">
					<tr>
						<th>Directory</th>
					</tr>
					<tr>
						<td><img class="icon" src = "./img/meIcon.png">   About Me</td>
					</tr>
					<tr>
						<td><img class="icon" src = "./img/folder95.png">  Projects</td>
					</tr>
				</table>	
			</div>
			<div id = "contents">
				<?php include './php/testdb2.php';?>
			</div>
			<div id = "bottomgrey">///</div>
		</div>	
	</article>
  </body>
</html>