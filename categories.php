<?php require_once("config.php"); ?>


<!DOCTYPE html>
<html>
<title>Admin Panel</title>
<link rel="icon" href="logo/ozrosee.png">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body class="w3-light-grey">

<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>	
   <a href="homepage.php" class="w3-bar-item w3-left">Homepage</a>
   <a href="admin_index.php" class="w3-bar-item w3-left">Admin Panel</a>
  <a href="logout.php" class="w3-bar-item w3-right">Log out</a>
</div>

        <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <header class="w3-container" style="padding-top:22px">

  </header>

  <div class="w3-container">
  	<h5 style="color: #7f5a65;" class="bg"><?php display_message();?></h5>
  	<h3> Product Categories </h3>
  	<hr style="border-color: black;">
  </div>

  <br>
  <br>

  <div class="w3-container">
  	
    <table class="table">
        <thead>
        <tr>
            <th>id</th>
            <th style="padding-left: 50px;">Title</th>
        </tr>
            </thead>


	    <tbody>
	        <?php show_categories_in_admin(); ?>
	    </tbody>

        </table>
  </div>

</body>
</html>
