
<?php
session_start();
include_once '../../Controllers/cardControl.php';
include_once '../../Controllers/DBController.php';
include_once '../../Controllers/TicketControl.php';
include_once '../../Models/card_data.php';
include_once '../../Models/ticket_data.php';
include_once '../../Controllers/MovieControl.php';
include_once '../../Controllers/feedbackControl.php';
$show=new ticketC;
$sid=$_SESSION["userId"];
$show_loop=$show->show_T_main($sid);
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Movies</title>
	<link rel="stylesheet" href="../assets/css/style-starter.css">
    <link rel="stylesheet" href="../assets/css/ticket.css">
	<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap"
		rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

	
</head>

<body>
	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="main.php"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
							MyShowz </a></h1>
				<!-- if logo is image enable this   
							<a class="navbar-brand" href="#index.html">
								<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
							</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="main.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="book.php">Booking</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="watchlist.php">watch-list</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="search_filter.php">Movies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../Auth/Login.php">Log_out</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="feedbackpage.php">Feedback</a>
						</li>
					</ul>

					<!--/search-right-->
					<!--/search-right-->
					
					<div class="Login_SignUp" id="login"
						style="font-size: 2rem ; display: inline-block; position: relative;">
						<!-- <li class="nav-item"> -->
						<a class="nav-link" href="sign_in.html"><i class="fa fa-user-circle-o"></i></a>
						<!-- </li> -->
					</div>
				</div>
				<!-- toggle switch for light and dark theme -->
				<div class="mobile-position">
					<nav class="navigation">
						<div class="theme-switch-wrapper">
							<label class="theme-switch" for="checkbox">
								<input type="checkbox" id="checkbox">
								<div class="mode-container">
									<i class="gg-sun"></i>
									<i class="gg-moon"></i>
								</div>
							</label>
						</div>
					</nav>
				</div>
			</div>
		</nav>
	</header>
	<!--/breadcrumbs -->
	<div class="w3l-breadcrumbs">
		<nav id="breadcrumbs" class="breadcrumbs">
			<div class="container page-wrapper">
				<a href="main.php">Home</a> » <span class="breadcrumb_last" aria-current="page">movies</span>
			</div>
		</nav>
	</div>
	<!--/movies -->
	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-4">
			<div class="container py-lg-4">
				<div class="headerhny-title">
	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-4">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<div class="headerhny-left">
							<h3 class="hny-title">Latest Movies</h3>
						</div>
                       
						<!-- <div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="movies.php">Show all</a></h4>
						</div> -->
					</div>
				</div>
                    <!-- ---------------------------------------------------------------------------------------- -->
                    <?php 
                    foreach($show_loop as $l_i){
                        ?>
					<div class="wholeticket">
                    <div class="cardWrap">
                 <div class="card cardLeft">
                   <h1>Startup <span>Cinema</span></h1>
                  <div class="title">
                  <span>movie</span>
                 <h2><?php echo $l_i["movie"]?></h2>
                
               </div>
                  <div class="name">
               <!-- <h2>Vladimir Kudinov</h2> -->
              <!-- <span>name</span> -->
              </div>
      <div class="seat">
      <span>seat</span>
      <h2><?php echo $l_i["Seat_Number"]?></h2>
      
    </div>
	<span style="color:grey;">food</span>
      <h3 style="color:black;font-size:15px;"><?php echo $l_i["food"]?></h3>
    <div class="time">
    <span>time</span>

      <h2><?php echo $l_i["Hall_Number"]?></h2>
	  
    </div>
    
  </div>
  <div class="card cardRight">
    <div class="eye"></div>
    <div class="number">
      <h3><?php echo $l_i["Seat_Number"]?></h3>
      <!-- <span>seat</span> -->
	  <div class="number">
	  
      
    </div>
    <div class="barcode"></div>
  </div>

</div>
</div>
<?php
}
?>
                    <!-- ------------------------------------------------------------------ -->
					
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
</body>

</html>
<script src="../assets/js/jquery-3.3.1.min.js"></script>
<!--/theme-change-->
<script src="../assets/js/theme-change.js"></script>
<script src="../assets/js/owl.carousel.js"></script>
<script>
	$(document).ready(function () {
		$('.owl-four').owlCarousel({
			loop: true,
			margin: 20,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					nav: true
				},
				1000: {
					items: 2,
					nav: true
				}
			}
		})
	})
</script>
<script>
	$(document).ready(function () {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 40,
			nav: false,
			responsiveClass: true,
			autoplay: true,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 2,
					nav: true
				},
				667: {
					items: 2,
					margin: 20,
					nav: true
				},
				1000: {
					items: 3,
					nav: true
				}
			}
		})
	})
</script>
<!-- script for owlcarousel -->
<!-- disable body scroll which navbar is in active -->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
	$(window).on("scroll", function () {
		var scroll = $(window).scrollTop();

		if (scroll >= 80) {
			$("#site-header").addClass("nav-fixed");
		} else {
			$("#site-header").removeClass("nav-fixed");
		}
	});

	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
		$("header").toggleClass("active");
	});
	$(document).on("ready", function () {
		if ($(window).width() > 991) {
			$("header").removeClass("active");
		}
		$(window).on("resize", function () {
			if ($(window).width() > 991) {
				$("header").removeClass("active");
			}
		});
	});
</script>
<script src="../assets/js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		//Horizontal Tab
		$('#parentHorizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion
			width: 'auto', //auto or any width like 600px
			fit: true, // 100% fit in a container
			tabidentify: 'hor_1', // The tab groups identifier
			activate: function (event) { // Callback function if tab is switched
				var $tab = $(this);
				var $info = $('#nested-tabInfo');
				var $name = $('span', $info);
				$name.text($tab.text());
				$info.show();
			}
		});
	});
</script>

<script src="../assets/js/bootstrap.min.js"></script>