var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        // if (slideIndex==i)
        // {
        //     slides[i].className = slides[i].className.replace("sunactive", "sunactive");
        // }
        // else
        // {
        //
        // }

    }

    slideIndex++;


    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    slides[slideIndex-1].animate({opacity:0},2000)

    slides[slideIndex-1].animate({opacity:1},2000)

    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}
