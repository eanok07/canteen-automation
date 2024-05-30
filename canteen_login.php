<?php
extract($_POST);
session_start(); 
include("dbconnect.php");
if(isset($_POST['Submit'])) 
{
	$uname=$_REQUEST['username'];
	$password=$_REQUEST['password'];

	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	} 
	else
	{
	 $qry="select * from  canteen where username='$uname' and  password='$password'";
	$result = mysqli_query($conn, $qry);
	 if (mysqli_num_rows($result)) 
	{
	$_SESSION['uname']=$uname;
	?>					
	<script language="javascript">
	alert("Canteen login Success");
	window.location.href="canteen_home.php";
	</script>
	<?php

	}  
	else
	{
 
	?>					
	<script language="javascript">
	alert("Invalid username and password");
	</script>
	<?php

	}
  
}
 
$conn->close();
 }
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Canteen Automation System</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Noto+Sans+JP:100,300,400,500,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>

	<!--w3l-header-->
	<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light px-lg-0 py-0 px-3 stroke">
			<div class="container">
				<h1><a class="navbar-brand" href="#">Canteen<span> Automation</span></a></h1>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link" href="index.php">HOME</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="canteen_login.php">CANTEEN</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="user_login.php">USER</a>
						</li>
						
					</ul>
					<!--/search-right-->
					
						<!-- /search popup -->
			  </div>
					<!--//search-right-->

		  </div>
			</div>
		</nav>
		<!--//nav-->
	</header>
	<!-- //w3l-header -->
	<!--banner-slider-->
	<!-- main-slider -->
	<section class="w3l-main-slider" id="home">
	  <div class="banner-content">
			<div id="demo-1"
				data-zs-src='["assets/images/1.jpg", "assets/images/2.jpg","assets/images/3.jpg", "assets/images/4.jpg"]'
				data-zs-overlay="dots">
				<div class="demo-inner-content">
					<div class="container">
						<div class="banner-infhny">
							<span>Let's go, Canteen .</span>
							<h3>Is a type of food service location</h3>
							<p class="pr-lg-5">Canteen Automation System</p>

						</div>
					</div>
				</div>
			</div>
		   
      </div>
	</section>
	<!-- /main-slider -->
 <form name="form1" method="post" action="">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <h1 align="center">Canteen Login</h1>
            <p align="center">&nbsp; </p>
            <table width="353" height="163" border="0" align="center">
              <tr>
                <td>Username</td>
                <td><label>
                  <input name="username" type="text" id="username">
                </label></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><label>
                  <input name="password" type="password" id="password">
                </label></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="Submit" value="Login">
                </label></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
 </form>
	<footer class="w3l-footer-66">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
						  <div class="row sub-columns"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p>©  All rights reserved | Designed by <a
									href="#">Admin</a></p>
						</div>
						<ul class="columns text-lg-right">
							
						</ul>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<button onClick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				window.onscroll = function () {
					scrollFunction()
				};

				function scrollFunction() {
					if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
						document.getElementById("movetop").style.display = "block";
					} else {
						document.getElementById("movetop").style.display = "none";
					}
				}

				// When the user clicks on the button, scroll to the top of the document
				function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
			</script>
			<!-- /move top -->

		</section>
	</footer>
	<!--//footer-66 -->
</body>

</html>

<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/modernizr-2.6.2.min.js"></script>
<script src="assets/js/jquery.zoomslider.min.js"></script>
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!--pop-up-box-->

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>

<!--//pop-up-box-->
<!-- for blog carousel slider -->
<script src="assets/js/owl.carousel1.js"></script>
<script>
	$(document).ready(function () {
		$("#owl-demo1").owlCarousel({
			loop: true,
			margin:20,
			responsiveClass: true,
			responsive: {
				0: {
					items:1,
					nav: true
				},
				600: {
					items: 2,
					nav: false
				},
				1000: {
					items: 3,
					nav: true,
					loop: false
				}
			}
		})
	})
</script>
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>