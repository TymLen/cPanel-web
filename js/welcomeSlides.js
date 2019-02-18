var slidenum = 0;
$(document).ready(function(){
    carousel();
});

function carousel(){
    var i;
    var x = document.getElementsByClassName("welcome");
    for(i = 0; i <x.length; i++){
        x[i].style.display= "none";
    }
    slidenum++;
    if(slidenum > x.length){slidenum = 1}
    x[slidenum-1].style.display = "block";
    setTimeout(carousel, 5000);

}