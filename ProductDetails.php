<?php
session_start();
include('connect.php');
include('Shopping_Cart_Functions.php');
if(isset($_GET['Buy']))
{
    $ProductID = $_GET['ProductID'];
    $BuyQuantity = $_GET['BuyQuantity'];
    AddShoppingCart($ProductID,$BuyQuantity);
}

if(isset($_GET['ProductID']))
{
    $ProductID = $_REQUEST['ProductID'];
    $query = "SELECT p.*,t.ProductTypeID,t.ProductType From product p, producttype t
                Where p.ProductID='$ProductID' AND p.ProductTypeID = t.ProductTypeID";
    $result = mysqli_query($connect,$query);

    $row = mysqli_fetch_array($result);
    $ProductName = $row ['ProductName'];
    $ProductPrice = $row ['ProductPrice'];
    $equipmenttype = $row['EquipmentType'];
    $ProductQuantity = $row ['Quantity'];
    $ProductDes = $row ['Description'];
    $ProductTypeID = $row ['ProductTypeID'];
    $ProductType = $row ['ProductType'];
    $ProductImage1=$row['Image1'];
    $ProductImage2=$row['Image2'];
    $ProductImage3=$row['Image3'];
    
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="assets/img/logo.png">
<title>Home Gym Equipment (HGE)</title>
<!-- Bootstrap core CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&family=Racing+Sans+One&display=swap" rel="stylesheet">
<link href="assets\css\cssforallpages\bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets\css\cssforallpages\fontawesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Custom styles for this template -->
<link href="assets\css\cssforallpages\style.css" rel="stylesheet">
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
		<!-- Begin Menu -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="Featured.php">Featured<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="Information.php">Information <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="wanted.php">Wanted <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="Workshop.php">Workshop <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="gallary.php">Gallary <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="Contact.php">Contact <span class="sr-only">(current)</span></a>
			</li>
		</ul>
		<!-- End Menu -->
		<!-- Begin Search -->
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<span class="search-icon"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg></span>
		</form>
		<!-- End Search -->
	</div>
</div>
<div class="viewcountbox">
			<div>
				Views:
			</div>
			<div>
	<?php
if(!isset($_SESSION['CustomerID']))
{
 echo "<script>alert('Please Login First')</script>";
 echo "<script>window.location='Login Register.php'</script>";
}
else
{
	$customerid = $_SESSION['CustomerID'];
	$insert = "SELECT * FROM Customer Where CustomerID = '$customerid'";
	$query = mysqli_query($connect,$insert);
	$count=mysqli_num_rows($query);
	if($count > 0)
	{
		$data=mysqli_fetch_array($query);
		$count1 = $data['ViewCount'];
		echo $count1;
	}
}
?>
</div>
</div>

</nav>
<!-- End Nav
================================================== -->
<br>
<!-- Begin Site Title
================================================== -->
<div class="container">
<div class="section-title">
</div>
<div class="contact-container">
<div class="justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div style="display: flex; flex-direction:column; width:100%;">
                                <div>
								<img style="border: 1px solid rgba(0,0,0,.125);" class="img-fluid" src="<?php echo $ProductImage1 ?>" alt="">
                                </div>
                                <div style="display:flex ; flex-direction:row;">
                                    <img style="width:50%;  border: 1px solid rgba(0,0,0,.125); " class="img-fluid" src="<?php echo $ProductImage2 ?>" alt="">
                                    <img style="width:50% ; border: 1px solid rgba(0,0,0,.125);" class="img-fluid" src="<?php echo $ProductImage3 ?>" alt="">
                                </div>
                                </div>
							</div>
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
								<div class="mainheading">
										<h1><?php echo$ProductName ?></h1>
										<p class="lead">
											<?php echo$ProductDes ?>
										</p>
										<p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
									</div>
									<form action="shoppingcart.php" method="GET" enctype="multipart/form-data">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<h1>$<?php echo$ProductPrice ?></h1>
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
                                                    <h1 >Type : <?php echo$equipmenttype ?></h1>
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
													<h1>Specifications:</h1>
												</div>
                                                <p class="lead">
											   Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione obcaecati magnam, adipisci corrupti vitae quia.
											</div>
											<div class="col-md-12">
                                                
                                                    <input type="hidden" name="Action" value="Buy">
                                                    <div class="row">
                                                        
                                                        <div class="col-md-12">
                                                            <ul class="list-inline pb-3">
                                                                <h2>
                                                                <li class="list-inline-item text-right">
                                                                    Quantity
                                                                    <input type="hidden" name="BuyQuantity" id="product-quanity" min="1" value="1" max="<?php echo $ProductQuantity ?>">
                                                                </li>
                                                                <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                                                <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                                                <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                                                </h2>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row pb-3">
                                                        <div class="col d-grid">
                                                            <input type="hidden" name="ProductID" value="<?php echo $ProductID ?>">
                                                            <input class="buttonaddtocart" type="submit" name="Buy" min="1" value="Add to Cart">
                                                        </div>
                                                    </div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="section-title">
		<h2><span><a class="gallarylink" href="gallary.php">Related Products</a></span>
		</h2>
</div>
<div class="section-title">

</div>
<br>
	<section>
	<div class="card-columns listrecent">
	<?php 
$query="SELECT * from Product WHERE ProductTypeID=$ProductTypeID";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);

 if($count>0)
    {
    for ($i=0; $i <$count ; $i+=5)
    {
        $query1="SELECT * from Product WHERE  ProductTypeID=$ProductTypeID
                ORDER BY ProductName LIMIT $i,5";
        $result1=mysqli_query($connect,$query1);
        $count1=mysqli_num_rows($result1);
 ?>

	
    
<?php
for ($j=0; $j <$count1 ; $j++)
{
$data=mysqli_fetch_array($result1);
$ProductID=$data['ProductID'];
$name=$data['ProductName'];
$price=$data['ProductPrice'];
$equipmenttype=$data['EquipmentType'];
$des=$data['Description'];
$Image1=$data['Image1'];
$Image2=$data['Image2'];
$Image3=$data['Image3'];
 ?>
 
    <div class="card">
	<form action="" method="GET">
		<div class="img-fluid">
            <a href="ProductDetails.php?ProductID=<?php echo $ProductID ?>&qty=1">
                <img src="<?php echo $Image1 ?>" width='100%'>
            </a>
		</div>
		<div class="card-block">
			<h2 class="card-title"><a href="ProductDetails.php?ProductID=<?php echo $ProductID ?>&qty=1"> <div> <?php echo $name?> </div></a></h2>
			<h4 class="card-text">
				<div class="equipmenttype"><?php echo $equipmenttype ?></div>
				<div class="description"><?php echo $des ?></div>
				<div class="price">$<?php echo $price ?></div>
				
				<div>
				<i><a class="button" href="ProductDetails.php?ProductID=<?php echo $ProductID ?>&qty=1">Add To Cart</a></i>
				</div>
				</form>
		</div>
	</div>
	
 <?php
}
 }
 echo "</div> </section>";
 }
?>
<!-- Begin Footer
	================================================== -->
	<div class="footer">
		<h2 align="center">You are here</h2>
		<div class="footer-container">
			<div class="footer-right">
				<ul class="social">
					<li><a href="#"><img src="assets\img\media-logo\facebook.png"></a></li>
					<li><a href="#"><img src="assets\img\media-logo\twitter.png"></a></li>
					<li><a href="#"><img src="assets\img\media-logo\instragram.jpg"></a></li>
				</ul>
			</div>
			<div class="footer-left">
				<p class="pull-left">
			 		Copyright &copy; 2022 Home Gym Equipment
				</p>
			</div>
		<div class="clearfix">
		</div>
		</div>
	</div>
	
	<!-- End Footer
	================================================== -->


</div>
<!-- /.search-container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
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

<script src="assets\js\jsforcontactus\jquery.min.js"></script>
  <script src="assets\js\jsforcontactus\popper.js"></script>
  <script src="assets\js\jsforcontactus\bootstrap.min.js"></script>
  <script src="assets\js\jsforcontactus\jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets\js\jsforcontactus\/google-map.js"></script>
  <script src="assets\js\jsforcontactus\/main.js"></script>
<!-- End Script -->
</html>