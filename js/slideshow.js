var slideIndex = 0;
$(document).ready(function(){
    startSlideShow();
});

function startSlideShow(){
    
    var slides = document.getElementsByClassName("proSlide");
    for(var i = 0; i < slides.length; i++){
        slides[i].style.display = "none";
    }
    slides[0].style.display = "block";
}   
function plusSlides(num){
    showSlides(slideIndex += num);
}

function currentSlide(num){
    showSlides(slideIndex = num);
}

function showSlides(num){
    
    var i;
    var slides = document.getElementsByClassName("proSlide");
    if(slides.length === 1){
        slides[0].style.display = "block";
    }else{
        if(num >= slides.length){slideIndex = 0}
        
        for(i = 0; i < slides.length; i++){
            slides[i].style.display = "none";
        }
        slides[slideIndex].style.display = "block";
        if(num <= 0){slideIndex = slides.length}
    }
    
}