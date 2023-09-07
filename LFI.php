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
<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="video-card-columns listfeaturedtag">

		<!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<img src="assets\img\informationimages\This 2-Week Total-Body Challenge Takes Just a Few Minutes a Day.png" alt="">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block-3">
						<h2 class="card-title"><a href="post.html">5 Tips for Warming Up Before a Workout</a></h2>
						<h4 class="card-text">The advice drilled into most Americans since elementary school gym class has long encouraged always warming up before exercising and cooling down after. But in reality, many people – including some serious athletes and even some personal trainers – ditch these elements, often in the interest of time or pursuit of higher workout intensity, says Jim White, a personal trainer, dietitian and owner of Jim White Fitness & Nutrition Studios in Virginia Beach and Norfolk, Virginia. "People are just busy, and they skip the warmup and cool down," he says.</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<img src="assets\img\informationimages\11 Awesome At Home Workouts for Men [With Video].jpg" alt="">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block-3">
						<h2 class="card-title"><a href="post.html">11 Awesome At Home Workouts for Men </a></h2>
						<h4 class="card-text">Today, it seems like everyone from the leading men we see in movies to the acne-riddled kid who takes our tickets at the theater tends to have huge arms, a square jaw and less than 10 percent body fat.

For guys who want to make their look elite and join the ranks of the attractive masses, at least some degree of physical fitness is an absolute must.</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<img src="assets\img\informationimages\40 Personal Home Gym Design Ideas For Men - Workout Rooms.png" alt="">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block-3">
						<h2 class="card-title"><a href="post.html">Mental Health Gyms</a></h2>
						<h4 class="card-text">The COVID-19 pandemic triggered a significant surge in mental health therapy with increased cases of anxiety and depression. A survey conducted by the American Psychological Association found that nearly one-third of adults said sometimes they are so stressed about the coronavirus pandemic that they struggle to make basic decisions, such as what to wear or what to eat.This new way of treating emotional well-being provides a different way for people to build and maintain mental wellness and tackle issues like stress and burnout.</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<img src="assets\img\informationimages\How to find a personal trainer _ Well+Good.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block-3">
						<h2 class="card-title"><a href="post.html">The Benefits of Getting a Personal Trainer</a></h2>
						<h4 class="card-text">A personal trainer comes with tons of benefits for people with absolutely no gym experience and people who have been training for years. They do come with extra costs, but that doesn’t mean that it isn’t worth it.Everyone is different. We all have different physiques, needs, body types, goals and abilities. When you hire a personal trainer, all of the advice, tips and workouts you get will be completely tailored to you.
You’ll be able to find personal trainers that will be able to help you with strength training, weight loss, proper form, and much more, depending on your goals.</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->
        <!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<img src="assets\img\informationimages\10 Best Outdoor Workouts to Burn Fat and Build Muscle.jpg" alt="">
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block-3">
						<h2 class="card-title"><a href="post.html">Are Short Workouts Worth It?</a></h2>
						<h4 class="card-text">Firstly, the answers to these questions depend on you. Are you the type of person who plans to do long workouts, but finds them too daunting to start or too difficult to complete? If you are, you’re not alone, and you’re also more likely to benefit more from shorter workouts.Short workouts are effective. One of the biggest benefits of short workouts is that they’re great for people who don’t have much time to spare, but still want to dedicate some of the free time they do have to fitness. </h4>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

	</div>
	</section>
	
	<!-- End Featured
	================================================== -->
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