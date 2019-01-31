//overlay.js
function showOverlay(info){
	document.getElementById("overlay").style.display = "block";
	document.getElementById("longdesc").innerHTML = info;
}
function hideOverlay(){
	document.getElementById("longdesc").innerHTML = "";
	document.getElementById("overlay").style.display = "none";
}
	