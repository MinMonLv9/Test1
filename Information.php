<?php
    session_start();
    include('Connect.php');
?>

 <!DOCTYPE html>
 <!DOCTYPE html>
<html lang="en">
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
<div class="container">
<div class="section-title">
		<h2><span><a class="gallarylink" href="Information.php">Latest Products</a></span>
		<span></span>
		<span><a href="LFI.php" class="gallarylink">Latest Fitness Information</a></span>
		</h2>
</div>

	<section>
	<div class="card-columns listrecent">
	<?php 
$query="SELECT * from Product WHERE EquipmentType='latest'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);

 if($count>0)
    {
    for ($i=0; $i <$count ; $i+=5)
    {
        $query1="SELECT * from Product WHERE EquipmentType='latest'
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
	<form action="#" method="GET">
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
			</h4>
		</div>
	</form>
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
</body>
</html>
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
<!-- End Script -->