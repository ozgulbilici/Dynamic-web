<?php require_once("config.php"); ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
	<link rel="icon" href="logo/ozrosee.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<?php include("navbar.php") ?>

	<div class="small-container">
		<div class="row row-2">
			
		</div>
	   <div class="row row-2">


	       <div class="row">
	       	<div class="col" style="padding-right: 50px;">
	       		<?php search(); ?>
	       		<form class="" action="" method="post" enctype="multipart/form-data">
	       			<div class="form-group">
			       		<input type="text" name="search" placeholder="Search"> <input type="submit" name="search_product" class="btn btn-primary" value="Search">
			       	</div>
			    </form>
	       	</div>

	       </div>
	       
	   </div>   
           <div class="row" >				   		

              <?php get_products(); ?>

           </div>
           
</div>

	

    <?php include("footer.php") ?>

