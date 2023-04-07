<?php require_once("config.php"); ?>

<?php 

  if(isset($_GET['id'])) {
    $query = query("SELECT * FROM categories WHERE category_id = " . escape_string($_GET['id']) . " ");
    confirm($query);

    while($row = fetch_array($query)) {

      $category_title = escape_string($row['category_title']);

    }
  }

?>


<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="icon" href="logo/ozrosee.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="dropdown.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	    <?php include("navbar.php") ?>

	<div class="small-container">
	  <div class="row row-2">
        <h2><?php echo $category_title; ?></h2>
    </div>
    <br>
    <br>
    <br>
           <div class="row">
                <?php get_category_products(); ?>


           </div>
           
</div>

    <?php include("footer.php") ?>

