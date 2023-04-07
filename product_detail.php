<?php require_once("config.php"); ?>

    <?php $query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['id']) . " ");
          confirm($query);

          $row = fetch_array($query);
          $product_id = $row["product_id"]; 
          $category = $row["product_category_id"];
          $product_image = $row["product_image"];          

      ?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link rel="icon" href="logo/ozrosee.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include("navbar.php") ?>

       
<div class="small-container single-product">
    <div class="row">


        <div class="col-2">
          <?php
            $image = <<<DELIMETER
            <img src="products/{$row['product_image']}" width="100%" id="ProductImg">
            DELIMETER;
            echo $image;
            
              ?>
        </div>
        <div class="col-2">
            <h1><?php echo $row["product_title"]; ?></h1>
            <h4 style="color: #7f5a65;"><?php echo "&#36;" . $row["product_price"]; ?></h4>
            
            <a href="cart.php?add=<?php echo $row['product_id']; ?>" class="btn">Add To Cart</a>
            
            <h3>PRODUCT DESCRIPTION </h3>
            <br>
            <p><?php echo $row["product_description"]; ?></p>
        </div>
    </div>
</div>

<div class="small-container">
   <div class="row row-2">
       <h2>You may also be interested in!</h2>
   </div>
    
</div>
    
<div class="small-container">
         
             <div class="row">

              <?php $query = query("SELECT * FROM products WHERE product_category_id = " . escape_string($category) . " ");
                    confirm($query);

                    
                    while ($row = fetch_array($query)) {

                      if ($row['product_id'] != $product_id) {
                        $product = <<<DELIMETER
                            <div class="col-4">
                            <a href="product_detail.php?id={$row['product_id']}"><img width='100' src="products/{$row['product_image']}"></a>
                            <h4>{$row['product_title']}</h4>
                           <p style="color: #7f5a65;">&#36;{$row['product_price']}</p> 
                       </div> 
                       DELIMETER;
                       echo $product;
                        
                      }
                      
                    }
                ?>
           </div>
           
       </div>
  
     
    <?php include("footer.php") ?>


