<?php
    session_start();
    include('Connect.php');
?>
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

<!-- Begin Site Title
================================================== -->
<div class="container">
	<div class="mainheading">
		<h1 class="bannertitle">Home Gym Equipment Workshop</h1>
		<p class="lead">
			HGE workshop provides services and repairs to home equipments.
		</p>
	</div>
	<div class="section-title">
		<h2><span>Services</span></h2>
	</div>
	<div class="card-columns listrecent top-container">
		<div class="top-container-card">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\How to Move_ The Ultimate Game Plan and Timeline.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Door to Door Delivery</a></h2>
				<h4 class="card-text">HGE provides with fastest and safest way to avoid our customers from COVID. Our staffs will also set up equipments in your house.</h4>
			</div>
		</div>
		<div class="top-container-card">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\services in gym repair - Google Search.png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Fix and Repair</a></h2>
				<h4 class="card-text">Nothing to worry for broken equipments. Just contact us to repair your precious equipments with our highly-trained staffs.</h4>
			</div>
		</div>
		<div class="top-container-card">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\gym equipment clean - Google Search.png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Cleaning service</a></h2>
				<h4 class="card-text">Gym Equipmets can get dirty as workers sweat. Don't worry. Just call us and we will provide you with masked gym cleaners.</h4>
			</div>
		</div>
		
	</div>
	
	
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Completed Repairs</span></h2>
	</div>
	<div class="card-columns2 listrecent">

		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\download.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">ALTAS Strength 6005B Sissy Squat Black Adjustable Squat Machine </a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">31 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\gym equipments before and after repair - Google Search (1).png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">G5 Life Fitness Fit 1.0 Cable Motion</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">30 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\gym equipments before and after repair - Google Search.png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Life Fitness G5 Adjustable Cables System</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">29 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\home gym equipment - Google Search (1).png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Bowflex Bike</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">28 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\home gym equipment - Google Search (2).png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">apex style rogue rack</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">27 July 2022</span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\home gym equipment - Google Search (3).png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Rare Fitness Equipment</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">26 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\home gym equipment - Google Search (4).png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Home Gym Equipment</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">25 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\home gym equipment - Google Search (5).png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">gymbeing dumbbell bench</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">24 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\home gym equipment - Google Search.png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Flex Bike</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">23 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\POWER PRO 44.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Home Gym Equipment </a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">22 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\The Black Power Cage Is so In!!.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">IM2000 Self-Spotting Machine</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">21 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
		<!-- begin post -->
		<div class="card2">
			<a href="#">
				<img class="img-fluid" src="assets\img\Workshop\Completed Repairs\VA SEVEN.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="#">Heavy Flat Bench</a></h2>
				<h4 class="card-text">This is the equipment that HGE has finished fixing out lately. Our customers are very pleased that we take only a few amount of time to finish fixing this machine.</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="author-meta">
						<span class="post-date">20 July 2022</span><span class="dot"></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

	</div>

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
<!-- /.container -->

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