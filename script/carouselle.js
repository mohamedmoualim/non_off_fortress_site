// Get the carousel elements
const carousel = document.querySelector('.carousel');
const carouselInner = document.querySelector('.carousel__inner');
const carouselItems = document.querySelectorAll('.carousel__item');
const prevButton = document.querySelector('.carousel__button--left');
const nextButton = document.querySelector('.carousel__button--right');

// Set up some variables
let currentIndex = 0;
let interval;

// Set up the carousel to autoplay
function startCarousel() {
  interval = setInterval(() => {
    goToNextItem();
  }, 5000);
}

// Stop the carousel autoplay when the user interacts with it
function stopCarousel() {
  clearInterval(interval);
}

// Go to the next carousel item
function goToNextItem() {
  // Hide the current item
  carouselItems[currentIndex].classList.remove('active');
  // Update the index to the next item
  currentIndex = (currentIndex + 1) % carouselItems.length;
  // Show the next item
  carouselItems[currentIndex].classList.add('active');
  // Move the carousel inner to show the next item
  carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Go to the previous carousel item
function goToPrevItem() {
  // Hide the current item
  carouselItems[currentIndex].classList.remove('active');
  // Update the index to the previous item
  currentIndex = (currentIndex - 1 + carouselItems.length) % carouselItems.length;
  // Show the previous item
  carouselItems[currentIndex].classList.add('active');
  // Move the carousel inner to show the previous item
  carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
}

// Set up event listeners
prevButton.addEventListener('click', () => {
  goToPrevItem();
  stopCarousel();
});
nextButton.addEventListener('click', () => {
  goToNextItem();
  stopCarousel();
});
carousel.addEventListener('mouseenter', stopCarousel);
carousel.addEventListener('mouseleave', startCarousel);

// Start the carousel
startCarousel();

