$(document).ready(function() {
    let slideIndex = 1;
    showSlides(slideIndex);
  
// Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }
// Automatic slideshow
let slideInterval = setInterval(function() {
    plusSlides(1);
}, 9000);
// Previous and next buttons
let prevButton = document.getElementById("prevButton");
let nextButton = document.getElementById("nextButton");
prevButton.addEventListener("click", function() {
  plusSlides(-1);
});
nextButton.addEventListener("click", function() {
  plusSlides(1);
});  
function showSlides(n) {
    let i;
    let slides = $(".mySlides");
    let dots = $(".demo");
    let captionText = $(".caption");
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.html(dots[slideIndex - 1].alt);
    }
// Stop previous interval and start new one
    clearInterval(slideInterval);
    slideInterval = setInterval(function() {
      plusSlides(1);
    }, 9000);
});

// testimonial 


