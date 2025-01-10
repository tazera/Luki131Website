document.addEventListener('DOMContentLoaded', function() {
  let currentSlide = 0;
  const slides = document.querySelectorAll('.slide');
  const totalSlides = slides.length;

  let autoAdvance; // will hold our 40s timer

  // Show exactly one slide, hide the rest
  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.opacity = (i === index) ? '1' : '0';
    });
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    console.log("Next to slide:", currentSlide);
    showSlide(currentSlide);
    restartTimer();
  }
  
  function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    console.log("Prev to slide:", currentSlide);
    showSlide(currentSlide);
    restartTimer();
  }
  

  // Clear any existing timer and start a fresh 40s wait
  function restartTimer() {
    clearTimeout(autoAdvance);
    autoAdvance = setTimeout(nextSlide, 15000); 
    // after 40s, go to the next slide
  }

  // Arrow event listeners
  document.querySelector('.arrow.left').addEventListener('click', prevSlide);
  document.querySelector('.arrow.right').addEventListener('click', nextSlide);

  // Initialize
  showSlide(currentSlide); // start on slide #0
  restartTimer(); // start the 40s auto-advance
});
