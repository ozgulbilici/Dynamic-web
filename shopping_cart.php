<?php require_once("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="icon" href="logo/ozrosee.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <?php include("navbar.php") ?>

       
<div class="small-container cart-page">

    <h4 class="text-center bg-danger"><?php display_message(); ?></h4>

   
   <table>
       <tr>
           <th>Product</th> 
           <th style= "padding-left: 900px">Quantity</th>
           <th style= "padding-left: 100px">Product Cost</th>

       </tr>
        <?php cart(); ?>

       
   </table>
    
    <div class="total-price" style= "padding-right:100px">
        <table>
            <tr>
                <td>Items</td>
                <td><?php echo isset($_SESSION['total_number']) ? $_SESSION['total_number'] : $_SESSION['total_number'] = "0"; ?></td>
            </tr>
            <tr>
                <td>Shipping Cost</td>
                <td>Free</td>
            </tr>
            <tr>
                <td>Total Price</td>
                <td>&#36;<?php echo isset($_SESSION['total_price']) ? $_SESSION['total_price'] : $_SESSION['total_price'] = "0"; ?></td>
            </tr>
            
        </table>
    </div>
    <div class="total-price">
       <a href="products.php" class="btn">Continue</a> <a> - </a>
        <a href="checkout.php" class="btn">Checkout</a>
    </div>
    
</div>
</div>

	<?php include("footer.php") ?>