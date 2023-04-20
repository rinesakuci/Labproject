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
        background-image:  url("blurr.jpeg");
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




/* Review Form Styling */
.review-container {
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  width: 45%;
  margin: 0 auto;
}

.review-container label {
  display: block;
  font-size: 1.2em;
  font-weight: bold;
  margin-bottom: 5px;
}

.review-container input[type="text"], 
.review-container textarea {
  padding: 10px;
  font-size: 1em;
  border-radius: 3px;
  border: none;
  width: 100%;
  margin-bottom: 20px;
  box-sizing: border-box;
}

.review-container select {
  padding: 10px;
  font-size: 1em;
  border-radius: 3px;
  border: none;
  width: 100%;
  margin-bottom: 10px;
  box-sizing: border-box;
  appearance: none;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 60 30' width='60' height='30'%3E%3Cpath d='M2,2h56c0,3.3-2.7,6-6,6H8C4.7,8,2,5.3,2,2z' fill='%23f5f5f5'/%3E%3Cpath d='M2,24c0-3.3,2.7-6,6-6h40c3.3,0,6,2.7,6,6s-2.7,6-6,6H8C4.7,30,2,27.3,2,24z' fill='%23f5f5f5'/%3E%3Cpath d='M2,16h56c0,3.3-2.7,6-6,6H8C4.7,22,2,19.3,2,16z' fill='%23555555'/%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: calc(100% - 10px) center;
  background-size: 10px 12px;
}

.review-container input[type="submit"] {
  background-color: #d3a625;
  border: none;
  color: #fff;
  font-size: 1.2em;
  font-weight: bold;
  padding: 10px 20px;
  border-radius: 3px;
  cursor: pointer;
  transition: background-color 0.2s ease-in-out;
}

.review-container input[type="submit"]:hover {
  background-color: #b38e1b;
}

/* Vintage Styling */
.review-container {
  background-image: linear-gradient(to bottom right, #f5f5f5, #d9d9d9);
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
}

.review-container label {
  color: #b38e1b;
}

.review-container input[type="text"], 
.review-container textarea {
  background-color: #f2f2f2;
  color: #666;
  border: 1px solid #ccc;
}

.review-container select {
  background-color: #



}

      
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