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
  height: 67px;
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



.caption {
  padding-bottom: 35px;
  background-color: rgba(238, 207, 161, 0.9);
  border-radius: 0;
  border: 6px solid #f7dcb4;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  font-family: "Times New Roman", Georgia, Serif;
  font-size: 19px;
  justify-content: center;
  align-items: center;
  position: absolute;
  text-align: center;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
  top: 50%;
  left: 17%;
  transform: translate(-50%, -50%);
  transition: all 0.3s ease-in-out;
  width: 420px;
  height: auto;
  max-height: 200px;
  overflow-y: auto;
  clip-path: polygon(0 0, 100% 0, 100% 90%, 50% 100%, 0 90%);
  box-shadow: inset 0px 0px 20px 10px rgba(255,255,255,0.8);
}



.caption p {
margin: 40px;
}



.caption::before {
  /* Existing styles */
  content: "\1F37D";
  font-family: "Noto Color Emoji";
  margin-right: 10px;
  font-size: 25px;
  margin-bottom: 10px;
  

}


























</style>
    
    <!-- Slides -->
    <div class="slide">
        <img src="images/pasti.jpg" alt="Pasta">
        <div class="caption">Pasta, një nga përgatitjet 
           është spaghetti, i cili është i gjatë dhe i hollë, 
          por ka shumë lloje të tjera si penne dhe të tjera. </div>
    </div>
    <div class="slide">
        <img src="images/mish.jpg" alt="Kotlet">
        <div class="caption">Kotlet, është një pjatë e përgatitur nga mish viçi të copëtuar në pjesë të vogla dhe i skuqur në vaj të nxehtë. </div>
    </div>
    <div class="slide">
        <img src="images/flia.jpg" alt="Flia">
        <div class="caption">Flia, gatim tradicional shqiptar me shije unike dhe shoqeruar me kos. E pjekur ne menyre te vjeter nga shtresa te miellit!</div>
    </div>
    
    <div class="slide">
        <img src="images/salle.jpg" alt="Sallate pule">
        <div class="caption">Sallate pule, shtë një pjatë e shëndetshme dhe e
           shijshme përgatitet me mish të përgatitur pule, perime dhe lëng limoni.</div>
    </div>
    <div class="slide">
        <img src="images/piz.jpg" alt="Pizza">
        <div class="caption">Pizza, pjatë popullore italiane që 
          konsiston nga një bazë e hollë e miellit, domate, djathë dhe mish ose perime të ndryshme. </div>
    </div>
    <div class="slide">
        <img src="images/burek.jpg" alt="Pite">
        <div class="caption">Pite, shtë një pjatë tradicionale shqiptare që konsiston nga dy baza te holla te 
          miellit, shoqeruar me kos.</div>
    </div>
    <!-- Navigation arrows -->
   
</div>

<script>
class Slideshow {
  constructor(slides) {
    this.slides = slides;
    this.currentSlideIndex = 0;
    this.numSlides = slides.length;
    this.init();
  }
  init() {
    // Set initial slide
    this.showSlide(this.currentSlideIndex);
    
    // Automatically move to next slide every 3 seconds
    setInterval(() => {
      this.nextSlide();
    }, 2700);
  }
  nextSlide() {
    this.currentSlideIndex++;
    if (this.currentSlideIndex >= this.numSlides) {
      this.currentSlideIndex = 0;
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
const slideshow = new Slideshow(slides);
</script>




</body>
</html>