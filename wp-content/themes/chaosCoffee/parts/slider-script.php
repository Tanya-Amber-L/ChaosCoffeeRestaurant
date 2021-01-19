<script>


//slider

let slideIndex = 1;
showSlides(slideIndex);

function nextSlide() {
    showSlides(slideIndex += 1);
}

function previousSlide() {
    showSlides(slideIndex -= 1);  
}


function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = [...document.querySelectorAll('.slide-only')];
    
    if (n > slides.length) {
      slideIndex = 1
    } //revenir au début du slider

    if (n < 1) {
        slideIndex = slides.length
    } //revenir à la fin 
  
    for (let slide of slides) {
        slide.style.display = "none";
    }   
    slides[slideIndex - 1].style.display = "flex"; 
}


</script>