<!DOCTYPE html>
<html>
<head>
<title>Mrizi</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href= css/main.css type= "text/css">





    </head>
<body>


    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
            <a href="#home" class="w3-bar-item w3-button">Mrizi</a>
            <!-- Right-sided navbar links. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
                <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
                <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
                <a href="registeer.php" class="w3-bar-item w3-button">Rezervo</a>
                <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
									

            </div>
        </div>
    </div>
<style>
    body {
    font-family: "Times New Roman", Georgia, Serif;
}
.w3-bar-item {
    font-size: 15px;
  }
  .w3-bar {
  height: 63px;
}


h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
.w3-content {
    position: relative;
}
/* Style for navigation buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: #fff;
  font-size: 32px;
  font-weight: bold;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "prev" button to the left */
.prev {
  left: 0;
  background-color: rgba(0, 0, 0, 0.3);
}

/* Position the "next" button to the right */
.next {
  right: 0;
  background-color: rgba(0, 0, 0, 0.3);
}

/* Style for navigation button on hover */
.prev:hover, .next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

</style>
    
    <!-- Slides -->
    <div class="slide">
        <img src="pasti.jpg" alt="Pasta">
        <div class="caption">Pasta</div>
    </div>
    <div class="slide">
        <img src="mish.jpg" alt="Kotlet">
        <div class="caption">Kotlet</div>
    </div>
    <div class="slide">
        <img src="flia.jpg" alt="Flia">
        <div class="caption">Flia</div>
    </div>
    
    <div class="slide">
        <img src="salle.jpg" alt="Sallate pule">
        <div class="caption">Sallate pule</div>
    </div>
    <div class="slide">
        <img src="piz.jpg" alt="Pizza">
        <div class="caption">Pizza</div>
    </div>
    <div class="slide">
        <img src="burek.jpg" alt="Pite">
        <div class="caption">Pite</div>
    </div>

    <!-- Navigation arrows -->
    <div class="prev">&lt;</div>
    <div class="next">&gt;</div>
</div>





<script>
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


</script>




</body>
</html>
