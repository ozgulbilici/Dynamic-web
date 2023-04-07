<div class="navbar">
        <link rel="stylesheet" href="style2.css">

    <nav>
     
        
    <div class="row">
        <div class="column left">
            <div class="dropdown">
                <i class="fa fa-bars" aria-hidden="true"></i><a href="homepage.php"> Home</a>
      
                <div class="dropdown-content">
                    <div class="column left">
        
                    <a href="products.php"> Products</a>
                    <a href="<?php echo isset($_SESSION['username']) ? "profile.php?id={$_SESSION['user_id']}" : "login_page.php"?>"> <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : "Login"?></a>
        
                    <a href="logout.php"><?php echo isset($_SESSION['username']) ? "Logout" : "" ?></a>
                    <a href="admin_index.php"><?php if(isset($_SESSION['username']) &&  ($_SESSION['username'] == 'admin') ) {
                    echo "Panel";
                    } else {
                    echo ""; 
                    } ?></a>


                     </div>
                </div>
            </div>
        </div>
        <div class="column middle"><div class="logo">
        <a href="homepage.php"><img src="logo/ozrosee.png" width="250px" ></a>
        </div></div>
        <div class="column right"><ul id="MenuItems">
        <li><?php get_categories();?></li>
        <li><i aria-hidden="true"></i><a  href="shopping_cart.php"><img src="logo/icon-cart.png" alt=""> </a></li></li>


     </ul></div>
    </div>
    <br><br><br><br>
        
    </nav>
    
</div>
<br><br>
