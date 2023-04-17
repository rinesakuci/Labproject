<?php


// Start a session

session_start();

include "menagdb.php";



// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Validate input and sanitize data

    $name=$_POST['name'];
    
    $rating=$_POST['rating'];
    $comment=$_POST['comment'];
 

$sqlInsert="Insert into review(name, rating, comment)
VALUES (:name,  :rating,:comment)";

$statement=$pdo->prepare($sqlInsert);
$statement-> execute(array(':name'=>$name,  ':rating'=>$rating,':comment'=>$comment ));

if (!$statement) {
  // Redirect to error page with message
  header('Location: error.php?msg=Unable to submit review');
  exit();
}

// Redirect to a success page
header('Location: index.php');
exit();
}

?>











<!DOCTYPE html>
<html>
  <head>
    <title>Mrizi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="css/main.css" />
    
   
    <style>
      .mySlides {display:none;}
      body {
        background-image:  url("lik.jpg");
        font-family: "Times New Roman", Georgia, Serif;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Playfair Display";
        letter-spacing: 8px;
      }
      .w3-bar {
  height: 65px;
}



      .button {
        display: inline-block;
        margin: 0 20px;
        padding: 50px 80px;
        background-color: #2F4F4F;
        color: black ;
        border-radius: 5px;
        text-decoration: none;
      }
 
      .review-container {
  width: 500px;
  margin: auto;
  text-align: center;
  font-family: Arial, sans-serif;
}

.rating {
  display: inline-block;
}

.rating input {
  display: none;
}


.review-item {
  border: 1px solid #ccc;
  padding: 15px;
  margin-bottom: 15px;
}

.review-item h4 {
  margin-bottom: 5px;
}

.review-item .rating {
  margin-bottom: 5px;
}

.review-item .comment {
  margin-bottom: 10px;
}


.review-container {
  width: 70%;
  margin: auto;
  text-align: center;
  padding: 20px;
  background-color: #f2f2f2;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.review-container label {
  display: inline-block;
  text-align: left;
  margin-left: 15%;
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
}

.review-container input[type="text"],
.review-container input[type="email"],
.review-container select,
.review-container textarea {
  display: inline-block;
  width: 70%;
  padding: 10px;
  margin: 5px 0;
  border: none;
  border-radius: 5px;
  background-color: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
}

.review-container select {
  width: 73%;
}

.review-container .rating-comment {
  text-align: center;
  margin-left: 15%;
}

.review-container textarea {
  height: 100px;
}

.review-container input[type="submit"] {
  background-color: #c0392b;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 10px;
}

.vintage {
  background-color: #f8c7b1;
}

.vintage label {
  font-size: 20px;
  color: #fff;
  margin-left: 0;
  text-shadow: 1px 1px #9a8f8a;
}

.vintage input[type="text"],
.vintage input[type="email"],
.vintage select,
.vintage textarea {
  background-color: #f4e4d4;
  border: none;
  box-shadow: none;
  padding: 10px;
  border-radius: 5px;
  color: #7c6e68;
  font-size: 18px;
  font-family: 'Roboto', sans-serif;
}

.vintage input[type="submit"] {
  background-color: #9a8f8a;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  margin-top: 10px;
  text-shadow: none;
}







select[name="rating"] {
  background-image: url(star.png);
  background-repeat: no-repeat;
  background-position: 0 0;
  padding-left: 80px; /* adjust as needed */
}

select[name="rating"] option[value="1"] {
  background-position: 0 0; /* position of unfilled star */
}

select[name="rating"] option[value="2"] {
  background-position: -20px 0; /* position of half-filled star */
}

select[name="rating"] option[value="3"] {
  background-position: -40px 0; /* position of filled star */
}

/* add similar styles for 4 and 5 star ratings */


      
    </style>

  </head>
  
  <body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
  

      <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
        <a href="index.php" class="w3-bar-item w3-button">Mrizi</a>
     
       



        <!-- Right-sided navbar links. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
          <a href="index.php" class="w3-bar-item w3-button">Rreth Nesh</a>
          <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
          <a href="portfolio.php" class="w3-bar-item w3-button">Portfolio</a>
          <a href="registeer.php" class="w3-bar-item w3-button">Rezervimet</a>
          <a href="lokacioni.php" class="w3-bar-item w3-button">Lokacioni</a>
         
        </div>
      </div>
    </div>
  
    
    <div class="w3-container">
  <h2>Slideshow Caption</h2>
  
</div>



<br><br>


      <div class="review-container">
      <form method="post" action="review.php">
  
  <br><br>
  <label for="name">Emri:</label>
  <input type="text" name="name" required>
  <br><br>
  <label for="rating">Rate:</label>
  <br>
  <select name="rating" required>
  
    <option value="">Selekto rating</option>
    <option value="1">1 star</option>
    <option value="2">2 stars</option>
    <option value="3">3 stars</option>
    <option value="4">4 stars</option>
    <option value="5">5 stars</option>
  </select>
  <br><br>
  <label for="comment">Bej Koment:</label>
  <textarea name="comment" required></textarea>
  <br>
  <input type="submit" value="Dergoje">
</form>

</div>











<script>


function submitReview() {
  const rating = document.querySelector('input[name="rating"]:checked').value;
  const comment = document.getElementById("comment").value;
  console.log(`Rating: ${rating}, Comment: ${comment}`);
  // send the data to server or do something else with it
}








reviewsForm.addEventListener('submit', function(e) {
  e.preventDefault();
  
  const name = this.elements['name'].value;
  const email = this.elements['email'].value;
  const rating = rating.getAttribute('data-rating');
  const comment = this.elements['comment'].value;
  
  const reviewItem = document.createElement('li');
  reviewItem.classList.add('review-item');
  
  const reviewName = document.createElement('h4');
  reviewName.innerText = name;
  reviewItem.appendChild

}
)
  </script>

  </body>
  </html>