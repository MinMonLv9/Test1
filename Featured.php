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

<div id="ww_92544c1c47c74" v='1.20' loc='id' a='{"t":"ticker","lang":"en","ids":["wl3888"],"cl_bkg":"#000000","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722","sl_sot":"celsius","sl_ics":"one_a","font":"Arial"}'>Weather for the Following Location: <a href="https://2ua.org/usa/new_york_city/map/" id="ww_92544c1c47c74_u" target="_blank">New York City on map</a></div><script async src="https://srv1.weatherwidget.org/js/?id=ww_92544c1c47c74"></script>
<div class="section-title">
<form action="#" method="POST">
    <h2><span>Featured Products</span></h2>
</form>
</div>
<div class="flex-box">
	<div class="review-card-columns listfeaturedtag">
<form action="" method="POST">
<!-- begin post -->
<div class="review-card">
	<div class="row">
		<div class="review-img">
				<a href="ProductDetails.php?ProductID=4&qty=1">
					<img class="img-fluid" src="unentriedproductimages\Apple Watch\Smart watch.jpg" alt="">
				</a>
		</div>
		<div class="col-md-7">
			<div class="card-block-1">
			<h2 class="card-title"><a href="ProductDetails.php?ProductID=4&qty=1">Apple Watch S5 Gold Alu Pink </a></h2>
				<h4 class="card-text">Second</h4>
				<h4 class="card-text">$478.29</h4>
				<h4 class="card-text">56 pieces sold out</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="assets\img\avatar.png" alt="Sal"></a>
						</span>
						<span class="author-meta">
						<span class="post-name"><a href="author.html">Maria</a></span><br/>
						<span class="post-date">25 July 2022</span><span class="dot"></span><span class="post-read">6 min read</span>
						</span>
						<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
						<h4 class="card-text">The Apple Watch Series 5 was the first Apple Watch to sport an always-on display — and what a difference it made. In previous years, the Apple Watch's face remained dark.....</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end post -->
<!-- begin post -->
<div class="review-card">
	<div class="row">
		<div class="review-img">
				<a href="ProductDetails.php?ProductID=3&qty=1">
					<img class="img-fluid" src="unentriedproductimages\Samsung Watch\samsung-galaxy-watch-4-promotion-amazon-1.jpeg" alt="">
				</a>
		</div>
		<div class="col-md-7">
			<div class="card-block-1">
			<h2 class="card-title"><a href="ProductDetails.php?ProductID=3&qty=1">Samsung Galaxy Watch 4</a></h2>
				<h4 class="card-text">Second</h4>
				<h4 class="card-text">$219.99</h4>
				<h4 class="card-text">48 pieces sold out</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="assets\img\avatar.png" alt="Sal"></a>
						</span>
						<span class="author-meta">
						<span class="post-name"><a href="author.html">Smith</a></span><br/>
						<span class="post-date">23 July 2022</span><span class="dot"></span><span class="post-read">6 min read</span>
						</span>
						<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
						<h4 class="card-text">The Samsung Galaxy Watch 4 feels familiar.There's no question the Galaxy Watch 4 is best smartwatch and yet for people with Samsung smartphones, and the best Samsung watch ever....</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end post -->
<!-- begin post -->
<div class="review-card">
	<div class="row">
		<div class="review-img">
				<a href="ProductDetails.php?ProductID=25&qty=1">
					<img class="img-fluid" src="unentriedproductimages\Smart earphones\61k32U6RKNL._AC_SL1000_.jpg" alt="">
				</a>
		</div>
		<div class="col-md-7">
			<div class="card-block-1">
			<h2 class="card-title"><a href="ProductDetails.php?ProductID=25&qty=1">Bose Sport Earbuds</a></h2>
				<h4 class="card-text">Brandnew</h4>
				<h4 class="card-text">$69.99</h4>
				<h4 class="card-text">50 pieces sold out</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="assets\img\avatar.png" alt="Sal"></a>
						</span>
						<span class="author-meta">
						<span class="post-name"><a href="author.html">William</a></span><br/>
						<span class="post-date">22 July 2022</span><span class="dot"></span><span class="post-read">6 min read</span>
						</span>
						<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
						<h4 class="card-text">Excellent sound and fit with one downside. I first wrote about the Bose Sport Earbuds way back in June 2019. Back then, Bose was calling them the Earbuds 500... </h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end post -->
<!-- begin post -->
<div class="review-card">
	<div class="row">
		<div class="review-img">
				<a href="post.html">
					<img class="img-fluid" src="unentriedproductimages\SMartshoes\Nike is finally making the self-lacing shoes from Back To The Future.png" alt="">
				</a>
		</div>
		<div class="col-md-7">
			<div class="card-block-1">
			<h2 class="card-title"><a href="ProductDetails.php?ProductID=36&qty=1">Nike Sports Self-lacing Shoes</a></h2>
				<h4 class="card-text">Brand New</h4>
				<h4 class="card-text">$699.99</h4>
				<h4 class="card-text">29 pieces sold out</h4>
				<div class="metafooter">
					<div class="wrapfooter">
						<span class="meta-footer-thumb">
						<a href="author.html"><img class="author-thumb" src="assets\img\avatar.png" alt="Sal"></a>
						</span>
						<span class="author-meta">
						<span class="post-name"><a href="author.html">Lil T-Jay</a></span><br/>
						<span class="post-date">28 July 2022</span><span class="dot"></span><span class="post-read">6 min read</span>
						</span>
						<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
						<h4 class="card-text">This shoe is just lit and bring the vibe of back to the future. Easy to wear and so hype wearing and running with this. 10 out of 10 I recommend because.......</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end post -->
</form>
</div>
	<div class="card-columns listrecent right-list">
		<div class="section-title">
	<h4><span>Wearable Technology Catagories</span></h4>
	</div>
	<div class="card-columns listrecent">
		<div class="right-container-card">
			<a href="post.html">
				<img class="img-fluid" src="unentriedproductimages\Smartglasses\Solos Smart Glasses for Cyclists - Cool Wearable.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="ProductDetails.php?ProductID=38&qty=1">Smart Glasses</a></h2>
				<h4 class="card-text">Suitable for walkers, cyclists and gym goers. It shows in-built functions of showing heart rates, temperatures and your body needs.</h4>
			</div>
		</div>
		<div class="right-container-card">
			<a href="post.html">
				<img class="img-fluid" src="unentriedproductimages\Smart earphones\The Best Running Headphones, According to People Who Run a Crapton.png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="ProductDetails.php?ProductID=37&qty=1">Smart Earphones</a></h2>
				<h4 class="card-text">Headphones, including earbuds, in-ear headphones, and on-ear headphones surround you with high-performance sound in comfortable and stylish designs.</h4>
			</div>
		</div>
		<div class="right-container-card">
			<a href="post.html">
				<img class="img-fluid" src="unentriedproductimages\SMartshoes\20170824MMM.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="ProductDetails.php?ProductID=39&qty=1">Smart Shoes</a></h2>
				<h4 class="card-text">Smart shoes can be used to track your activity levels. With the help of a few small devices, these shoes can measure how active you are by monitoring how many steps you've taken, your pace, how many calories you've burned, and more.</h4>
			</div>
		</div>
	</div>
	</div>
	</div>
	
	
<!-- End Site Title
================================================== -->

	
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