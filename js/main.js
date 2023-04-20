class Slideshow {
    constructor(slides, prevBtn, nextBtn) {
      this.slides = slides;
      this.prevBtn = prevBtn;
      this.nextBtn = nextBtn;
      this.currentSlideIndex = 0;
      this.numSlides = slides.length;
      this.init();
    }
  
    init() {
      // Set initial slide
      this.showSlide(this.currentSlideIndex);
      
      // Handle navigation buttons
      this.prevBtn.addEventListener('click', () => this.prevSlide());
      this.nextBtn.addEventListener('click', () => this.nextSlide());
    }
  
    nextSlide() {
      this.currentSlideIndex++;
      if (this.currentSlideIndex >= this.numSlides) {
        this.currentSlideIndex = 0;
      }
      this.showSlide(this.currentSlideIndex);
    }
  
    prevSlide() {
      this.currentSlideIndex--;
      if (this.currentSlideIndex < 0) {
        this.currentSlideIndex = this.numSlides - 1;
      }
      this.showSlide(this.currentSlideIndex);
    }
  
    showSlide(index) {
      // Remove active class from all slides
      this.slides.forEach(slide => slide.classList.remove('active'));
      // Add active class to current slide
      this.slides[index].classList.add('active');
    }
  }
  
  // Usage:
  const slides = document.querySelectorAll('.slide');
  const prevBtn = document.querySelector('.prev');
  const nextBtn = document.querySelector('.next');
  
  const slideshow = new Slideshow(slides, prevBtn, nextBtn);
  