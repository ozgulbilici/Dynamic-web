<?php require_once("config.php"); ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="icon" href="logo/ozrosee.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   
   <div class="header">
   <?php include("navbar.php") ?>
       
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="products/pinkbergere.jpg" style="width:1200px; height:550px">
  <div class="text">Don't Miss This Limited Edition Opportunity!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="products/yellowbluesofaset.jpg" style="width:1200px; height:550px">
  <div class="text">For Your Pleasant Conversations...</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="products/graygardenset.jpg" style="width:1200px; height:550px">
  <div class="text">Don't Miss the Discounts!</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
               
        
           
       </div>
       </div>
  
  
  <div class="small-container">
        <h2 class="title">Limited Edition Products</h2>
             <div class="row">
             	<?php get_three_products(); ?>
           </div>
           
       </div>
         

   <br>
   <br>


    <?php include("footer.php") ?>
    <script src="functions.js"></script>


   
