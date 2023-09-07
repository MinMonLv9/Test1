<?php  
include('connect.php');
session_start();
?>
<?php
if(isset($_POST['btnSearch']))
{
    $brandnew=$_POST['txtSearch'];
    $query="SELECT * FROM Product
            WHERE EquipmentType='brandnew'
            AND ProductName LIKE '%$brandnew%'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);

    if($count>0)
    {
        for ($i=0; $i < $count; $i+=5)
        {
        $query1="SELECT * FROM Product
                 WHERE EquipmentType='brandnew'
                 AND ProductName LIKE '%$brandnew%' Limit $i,5";
        $result1=mysqli_query($connect,$query1);
        $count1=mysqli_num_rows($result1);
?>

    <div class="card-columns listrecent">
        <?php
        for ($j=0; $j < $count1; $j++)
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
	<form action="gallary.php" method="GET">
            <a href="ProductDetails.php?ProductID=<?php echo $ProductID ?>&qty=1">
                <img src="<?php echo $Image1 ?>" width='100%' >
            </a>
			<div class="card-block">
				<h2 class="card-title"><a href="ProductDetails.php?PID=<?php echo $ProductID ?>&qty=1"> <div> <?php echo $name?> </div></a></h2>
				<h4 class="card-text">
					<div class="equipmenttype"><?php echo $equipmenttype ?></div>
                    <div class="description"><?php echo $des ?></div>
                    <div class="price">$<?php echo $price ?></div>
                    <div>
                    <button><i><a href="ProductDetails.php?ProductID=<?php echo $ProductID ?>&qty=1">Add To Cart</a></i></button>
                    </div>
				</h4>
			</div>
					</form>
	</div>
 <?php
}
echo "</div>";
 }
}
else
{
    echo "<h1><b>Search Record Not Found</b></h1>";
}
 }
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
<!-- Cookie -->
<div class="cookie-container">
	<div class="cookie-content">
      <p>
        We use cookies in this website to give you the best experience on our
        site and show you relevant ads. To find out more, read our
        <a href="#">privacy policy</a> and <a href="#">cookie policy</a>.
      </p>
	  <button onclick="myFunction()" class="cookie-btn">
        Okay
      </button>
	  </div>
</div>

<!--Cookie-->
<!-- Begin Site Title
================================================== -->
<div class="container">
	<br>
<div class="section-title">
<form class="form-inline my-2 my-lg-0" action="gallary.php" method="POST">
			<input class="form-control mr-sm-2" type="text" name="txtSearch" placeholder="Search Brand New Products ">
			<div style="display: none;">
			<button  name="btnSearch"> Search</button>
			</div>
		</form>
</div>
	<div class="mainheading">
		<h1 class="bannertitle">Home Gym Equipment</h1>
		<p class="lead">
			HGE has a well-deserved cult following. We have been known as a top Gym Equipment Shop for quality items you are sure to love.
		</p>
		
	</div>
	<div class="card-columns listrecent top-container">
		<div class="top-container-card">
			<a href="post.html">
				<img class="img-fluid" src="assets\img\p1.png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="post.html">Equipments for men</a></h2>
				<h4 class="card-text">As a man, you want to feel strong and look good, which is why we offer only the highest quality products.</h4>
			</div>
		</div>
		<div class="top-container-card">
			<a href="post.html">
				<img class="img-fluid" src="assets\img\smartwatch.png" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="post.html">Wearable Technology</a></h2>
				<h4 class="card-text">Introducing HGE - your go-to source for wearable technology!Stay connected, active, and healthy. </h4>
			</div>
		</div>
		<div class="top-container-card">
			<a href="post.html">
				<img class="img-fluid" src="assets\img\skirt.jpg" alt="">
			</a>
			<div class="card-block">
				<h2 class="card-title"><a href="post.html">Equipments for women</a></h2>
				<h4 class="card-text">Not all women are the same, creating stylish and functional products that help our customers achieve their fitness goals. </h4>
			</div>
		</div>
	</div>
	
	
<!-- End Site Title
================================================== -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/c1.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="sitetitle">Home Gym Equipment</h1>
                                <h3 class="h2">Be fit and healthy at home</h3>
                                <p>
                                    HGE is an e-commerce shop where we pleasure our customers with our high quality products.<a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank"></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/c2.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="sitetitle">Sportwears</h1>
                                <h3 class="h2">Nice and Comfort</h3>
                                <p>
                                    Do exercise with your favourite sport outfits.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/c3.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="sitetitle">Gym equipments and tools</h1>
                                <h3 class="h2">Quality first</h3>
                                <p>
                                    Up to 6 Months Warranty 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <p> < </p>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
			<p> > </p>
        </a>
    </div>
    <!-- End Banner Hero -->
	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
		<h2><span>Featured products</span></h2>
	</div>
	<div class="video-card-columns listfeaturedtag">

		<!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<video width="98%" autoplay loop muted>
								<source src="assets\img\videos\new balance.mp4" type="video/mp4">
							</video>
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block-1">
						<h2 class="card-title"><a href="post.html">2022 New Balance trainers</a></h2>
						<h4 class="card-text">The trainers are made with the latest technology and have a futuristic look which will keep you looking stylish and fresh. Push your boundaries and achieve more.</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-7">
					<div class="card-block-2">
						<h2 class="card-title"><a href="post.html">Samsung Galaxy Watch 4</a></h2>
						<h4 class="card-text">The Samsung Galaxy Watch 4 is the latest and greatest addition to the Galaxy Watch line. It features a sleek, new design, a powerful processor, and long-lasting battery life.</h4>
					</div>
				</div>
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<video width="98%" autoplay loop muted>
								<source src="assets\img\videos\11.mp4" type="video/mp4">
							</video>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!--end post -->

		<!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<video width="98%" autoplay loop muted>
								<source src="assets\img\videos\AMNIG Commercial Video.mp4" type="video/mp4">
							</video>
						</div>
					</a>
				</div>
				<div class="col-md-7">
					<div class="card-block-1">
						<h2 class="card-title"><a href="post.html">AMNIG Sportwears</a></h2>
						<h4 class="card-text">AMNIG Sportswear is a line of performance clothing that has been designed to meet the needs of athletes at every level.</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- end post -->

		<!-- begin post -->
		<div class="card3">
			<div class="row">
				<div class="col-md-7">
					<div class="card-block-2">
						<h2 class="card-title"><a href="post.html">Optimum Nutrition</a></h2>
						<h4 class="card-text">High-quality ingredients and free from artificial flavorings, sweeteners, and colors. The perfect balance of protein, carbs, and fats, and comes in a variety of delicious flavors.</h4>
					</div>
				</div>
				<div class="col-md-5 wrapthumbnail">
					<a href="post.html">
						<div class="thumbnail">
							<video width="98%" autoplay loop muted>
								<source src="assets\img\videos\Protein.mp4" type="video/mp4">
							</video>
						</div>
					</a>
				</div>
			</div>
		</div>
		<!-- end post -->

	</div>
	</section>
	
	<!-- End Featured
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
<script>
	const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

cookieButton.addEventListener("click", () => {
  cookieContainer.classList.remove("active");
  localStorage.setItem("cookieBannerDisplayed", "true");
});

setTimeout(() => {
  if (!localStorage.getItem("cookieBannerDisplayed")) {
    cookieContainer.classList.add("active");
  }
}, 2000);
</script>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assetsjs/cookie.js"></script>
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