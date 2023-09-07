<?php


session_start();
include('connect.php');
include('Shopping_Cart_Functions.php');
if(isset($_REQUEST['Action']))
{
    $Action = $_REQUEST['Action'];
    if($Action === "Remove")
    {
        $ProductID = $_REQUEST['ProductID'];
        RemoveShoppingCart($ProductID);
    }
    elseif($Action === "Buy")
    {
        $ProductID = $_REQUEST['ProductID'];
        $BuyQuantity = $_REQUEST['BuyQuantity'];
        AddShoppingCart($ProductID,$BuyQuantity);
    }
    elseif($Action === "checkout")
    {
        echo "<script>alert('Thank you for shopping with us')</script>";
        echo "<script>window.location='home.php'</script>";
        ClearShoppingCart();
    }
    else
    {
        ClearShoppingCart();
    }
}
else
{
    $Action="";
}
?>

<!DOCTYPE html>
    <head>
<html lang="en">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="assets/img/logo.png">
        <title>Home Gym Equipment (HGE)</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&family=Racing+Sans+One&display=swap" rel="stylesheet">
        <link href="assets\css\cssforallpages\bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="assets\css\cssforallpages\fontawesome.min.css">
        <link href="assets\css\cssforallpages\style.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/templatemo.css">
        <link rel="stylesheet" href="assets\css\cssforallpages\shoppingcart.css">
    </head>
    <body>
    <!-- Begin Nav
================================================== -->
<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
	
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <!-- Begin Logo -->
        <a class="navbar-brand" href="home.php">
        <img src="assets/img/logo.png" alt="logo">
        </a>
        <!-- End Logo -->
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <!-- Begin Search -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
            </form>
            <!-- End Search -->
        </div>
    </div>
    </nav>
    <!-- End Nav
    ================================================== -->
    <!-- Begin Site Title
================================================== -->
        <form action="shoppingcart.php" method="GET"> 
                <div class="wrap cf">
                    <div><h1 class="bannertitle">HGE</h1></div>
                    <div class="heading cf">
                        <h1>My Cart</h1>
                        <a href="gallary.php" class="btn continue">Continue Shopping</a>
                    </div>
            <?php
                if(!isset($_SESSION['ShoppingCartFunctions']))
                {
                    echo "<p>Shopping Cart is empty.</p>";
                }
                else
                {
            ?>
                <div class="cart">
                            <?php
                                $size = count($_SESSION['ShoppingCartFunctions']);

                                for($i=0; $i <$size ; $i++)
                                {
                                    $Image=$_SESSION['ShoppingCartFunctions'][$i]['Image1'];
                                    $ProductID=$_SESSION['ShoppingCartFunctions'][$i]['ProductID'];
                                    $ProductName=$_SESSION['ShoppingCartFunctions'][$i]['ProductName'];
                                    $ProductPrice=$_SESSION['ShoppingCartFunctions'][$i]['ProductPrice'];
                                    $BuyQuantity=$_SESSION['ShoppingCartFunctions'][$i]['BuyQuantity'];
                                    $SubTotal = $_SESSION['ShoppingCartFunctions'][$i]['ProductPrice']*$_SESSION
                                    ['ShoppingCartFunctions'][$i]['BuyQuantity'];
                                
                            ?>
                    <ul class="cartWrap">
                        <li class="items odd">
                            <div class="infoWrap"> 
                                <div class="cartSection">
                                <div class="cartSection2">
                                    <div class="cartimage">
                                    <img src='<?php echo$Image ?>' width="200px" height="200px">
                                    </div>
                                    <div class="cartSection3">
                                    <p class="itemNumber"><?php echo $ProductID?></p>
                                    <h3><?php echo $ProductName?></h3>
                                    <p><?php echo $BuyQuantity?>x $<?php echo $ProductPrice?></p>
                                    </div>
                                </div>
                                </div>    
                                <div class="cartSection4 removeWrap">
                                    <p>$<?php echo $BuyQuantity*$ProductPrice?></p>
                                    <?php echo "<a href='shoppingcart.php?ProductID=$ProductID&Action=Remove'>Remove</a>";?>
                                </div>
                                
                            </div>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>
                </div>
                <div class="subtotal cf">
                    <ul>
                        <li class="totalRow"><span class="label">Subtotal</span><span class="value">$<?php echo CalculateTotalAmount() ?></span></li>
                            <li class="totalRow"><span class="label">VAT (5%)</span><span class="value">$<?php echo CalculateVAT() ?></span></li>
                            <li class="totalRow final"><span class="label">Total</span><span class="value">$<?php echo CalculateTotalAmount()+ CalculateVAT() ?></span></li>
                        <div class="btn-container-bottom" style="display: flex; flex-direction:row; justify-content:space-between">
                            <li class="totalRow"><a href="shoppingcart.php?Action=checkout" class="btn continue">Checkout</a></li>
                            <li class="totalRow"><a href="shoppingcart.php?Action=ClearAll" class="btn continue">Empty</a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </form>
    </body>
</html>
<?php
                }
                ?>
                <script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<!-- Start Script -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/templatemo.js"></script>
<script src="assets/js/custom.js"></script>

<!-- End Script -->