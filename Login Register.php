<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="assets/img/logo.png">
  <title>Home Gym Equipment (HGE)</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="assets\css\cssforloginregister\layout\styles\layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&family=Racing+Sans+One&display=swap" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php
session_start();
include ('connect.php');
if(isset($_POST['btnlogin']))
{
    $CustomerLoginEmail=$_POST['customerloginemail'];
    $CustomerLoginPassword=$_POST['customerloginpassword'];
    $insert="SELECT * FROM customer where CustomerEmail='$CustomerLoginEmail' and CustomerPassword='$CustomerLoginPassword'";
    $query=mysqli_query($connect,$insert);
    
    $count=mysqli_num_rows($query);
    if($count>0)
        {
        $update = "UPDATE Customer set ViewCount=ViewCount+1 where CustomerEmail='$CustomerLoginEmail' and CustomerPassword='$CustomerLoginPassword'";
        mysqli_query($connect,$update);
        $data=mysqli_fetch_array($query);
        $customerid = $data['CustomerID'];
        $_SESSION['CustomerID']=$customerid;
        echo "<script>alert('Customer Login Successfully')</script>";
        echo "<script>window.location='home.php'</script>";
        }
    else
    {
        if (isset($_SESSION['loginError']))
            {
                $countError=$_SESSION['loginError'];
                if ($countError==1)
                {
                    $_SESSION['loginError']=2;
                    echo "<script>window.alert('Login failed! Please try again! Error Attempt 2')</script>";
                }
                if ($countError==2)
                {
                    echo "<script>window.alert('Login failed! Error Attempt 3! Account is locked for 10mins! Please try again later.')</script>";
                    echo "<script>window.location='LoginTimer.php'</script>";
                }

            }
        else
        {
            $_SESSION['loginError']=1;
            echo "<script>window.alert('Login failed! Please try again! Error Attempt 1')</script>";
        }
    }
}
?>
<?php
    if(isset($_POST['btnregister']))
    {
        $CustomerRegisterUsername = $_POST['customerregisterusername'];
        $CustomerRegisterEmail = $_POST['customerregisteremail'];
        $CustomerRegisterAddress = $_POST['customerregisteraddress'];
        $CustomerRegisterPassword = $_POST['customerregisterpassword'];
        $CustomerRegisterPhone = $_POST['customerregisterphone'];

        $select = "SELECT * FROM customer where CustomerEmail='$CustomerRegisterEmail'";
        $query = mysqli_query($connect,$select);
        $count = mysqli_num_rows($query);
    
        if($count>0){
                  echo"<script> alert('Customer email already exists.')</script>";
                  echo "<script>window.location='login%20register.php'</script>";
        }
        else{
            $insert = "INSERT INTO customer(CustomerUsername,CustomerEmail,CustomerAddress,CustomerPassword,CustomerPhone,ViewCount)
            values('$CustomerRegisterUsername','$CustomerRegisterEmail','$CustomerRegisterAddress','$CustomerRegisterPassword','$CustomerRegisterPhone',1)";

            $query = mysqli_query($connect,$insert);
            if($query)
            {
                echo "<script>alert('Customer Register Successfully')</script>";
                echo "<script>window.location='login%20register.php'</script>";
                
            }
        }
    }
?>
</head>
<body>
<!-- Top Background Image Wrapper -->
<section class="showcase">
  <header>
    <h2 style="font-family: 'Racing Sans One', cursive;" class="logo">HGE</h2>
  </header>
  <video src="assets\img\videos\video.mp4" muted loop autoplay></video>
  <div class="overlay2"></div>
  <div class="text">
    <div>
    <h2>Addicted To </h2> 
    <h3>Getting Stronger</h3>
    <p>The piece of equipment can help you build strength and increase your
    endurance. Protect your joints with this workout equipments, whilst burning a 
    high amount of calories at the same time. Home Gym Equipment is suitable for all ages 
    and abilities.</p>
  
    </div>
    <div class="loginbox">
      <form action="#" method="POST">
      <div class="inputbox">
        <input name="customerloginemail" type="text" autocomplete="off" placeholder="Email">
      </div> 
      <div  class="inputbox">
        <input name="customerloginpassword" type="password" autocomplete="off" placeholder="Password">
      </div>
      <div class="logregbut">
        <input type="submit" name="btnlogin" value="Log in">
      </div>
    </form> 
    </div>

  </div>
  <ul class="social">
    <li><a href="#"><img src="https://i.ibb.co/x7P24fL/facebook.png"></a></li>
    <li><a href="#"><img src="https://i.ibb.co/Wnxq2Nq/twitter.png"></a></li>
    <li><a href="#"><img src="https://i.ibb.co/ySwtH4B/instagram.png"></a></li>
  </ul>
</section>
<div class="main-w3layouts">
  <h1>Register here</h1>
  <div class="main-agileinfo">
    <div class="agileits-top">
      <form class="signup recaptchaForm" action="#" method="Post">
        <input class="text" type="text" name="customerregisterusername" placeholder="Username" autocomplete="off" required="">
        <input class="text email" type="email" name="customerregisteremail" placeholder="Email" autocomplete="off" value="" required="">
        <input class="text password" type="password" name="customerregisterpassword" value="" autocomplete="off" placeholder="Password" required="">
        <input class="text email" type="text" name="customerregisteraddress" placeholder="Address" autocomplete="off" value="" required="">
        <input class="text" type="text" name="customerregisterphone" placeholder="Phone" value="" autocomplete="off" required="">
        <div class="wthree-text">
          <label class="anim">
            <input type="checkbox" class="checkbox" required="yes">
            I Agree To The Terms & Conditions
          </label>
          <div class="g-recaptcha" data-sitekey="6LdEpocgAAAAAOz2pK2fno58zC_S_wBJCUrMHhrw">
            
          </div>
        <input type="submit" name="btnregister" value="SIGNUP">
      </form>
    </div>
  </div>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 style="font-family: 'Racing Sans One', cursive;" class="logo">HGE</h2>
      <p class="nospace">Ultricies erat in iaculis hendrerit sem quis rutrum purus fermentum in nec libero.</p>
    </div>
    <hr class="btmspace-50">
    <div class="group">
      <div class="one_quarter first">
        <h6 class="title">Dolor nam dictum</h6>
        <p>Lobortis mauris at volutpat urna vestibulum vehicula mattis lorem at interdum ligula vulputate et nulla tempus dui in pharetra malesuada.</p>
        <p>Quam tortor rhoncus velit in elementum justo quam quis tortor donec id magna sed felis pharetra varius non vel.</p>
      </div>
      <div class="one_quarter">
        <h6 class="title">Massa nisi nulla</h6>
        <ul class="nospace linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            Street Name &amp; Number, Town, Postcode/Zip
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
            +00 (123) 456 7890</li>
          <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Semper purus ut</h6>
        <ul class="nospace linklist">
          <li><a href="#">Semper libero ornare sit</a></li>
          <li><a href="#">Amet mauris mattis euismod</a></li>
          <li><a href="#">Ex sit amet porta tellus</a></li>
          <li><a href="#">Facilisis pulvinar vestibulum</a></li>
          <li><a href="#">In tellus nec nunc porttitor</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Ipsum suspendisse</h6>
        <ul class="nospace linklist">
          <li>
            <article>
              <h2 class="nospace font-x1"><a href="#">Venenatis arcu a commodo</a></h2>
              <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
              <p class="nospace">Augue vivamus finibus nec urna non faucibus nunc&hellip;</p>
            </article>
          </li>
          <li>
            <article>
              <h2 class="nospace font-x1"><a href="#">Eget consequat euismod</a></h2>
              <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
              <p class="nospace">Arcu nulla faucibus orci eget consequat erat risus amet&hellip;</p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2016 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
</body>
</html>
<script>
    const menuToggle = document.querySelector('.toggle');
      const showcase = document.querySelector('.showcase');

      menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        showcase.classList.toggle('active');
      })
</script>