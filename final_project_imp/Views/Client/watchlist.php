<?php
session_start();
include_once '../../Controllers/cardControl.php';
include_once '../../Controllers/DBController.php';
include_once '../../Controllers/TicketControl.php';
include_once '../../Controllers/AuthController.php';
include_once '../../Models/card_data.php';
include_once '../../Models/ticket_data.php';
include_once '../../Controllers/MovieControl.php';
include_once '../../Controllers/feedbackControl.php';
$movie=new MovieC ;
// $mov_loop=$movie->/////;
$userid=$_SESSION["userId"];
$mov_loop=$movie->showfilmbyid($userid);

$fc= new fbc;
if(isset($_POST["delete-watch-list-butt"]))
{
    $movie->delete_watch_list($_POST["idfieldd"]);
    header("location:watchlist.php");	

}
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Movies</title>
	<link rel="stylesheet" href="../assets/css/style-starter.css">
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
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
							MyShowz <?php echo $userid?> </a></h1>
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
							<a class="nav-link" href="search_filter.php">Movies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="book.php">Booking</a>
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
					<div class="search-right">
						<a href="#search" class="btn search-hny mr-lg-3 mt-lg-0 mt-4" title="search">Search <span
								class="fa fa-search ml-3" aria-hidden="true"></span></a>
						<!-- search popup -->
						<div id="search" class="pop-overlay">
							<div class="popup">
								<form action="#" method="post" class="search-box">
									<input type="search" placeholder="Search your Keyword" name="search"
										required="required" autofocus="">
									<button type="submit" class="btn"><span class="fa fa-search"
											aria-hidden="true"></span></button>
								</form>
								<div class="browse-items">
									<h3 class="hny-title two mt-md-5 mt-4">Browse all:</h3>
									<ul class="search-items">
										<li><a href="movies.html">Action</a></li>
										<li><a href="movies.html">Drama</a></li>
										<li><a href="movies.html">Family</a></li>
										<li><a href="movies.html">Thriller</a></li>
										<li><a href="movies.html">Commedy</a></li>
										<li><a href="movies.html">Romantic</a></li>
										<li><a href="movies.html">Tv-Series</a></li>
										<li><a href="movies.html">Horror</a></li>
										<li><a href="movies.html">Action</a></li>
										<li><a href="movies.html">Drama</a></li>
										<li><a href="movies.html">Family</a></li>
										<li><a href="movies.html">Thriller</a></li>
										<li><a href="movies.html">Commedy</a></li>
										<li><a href="movies.html">Romantic</a></li>
										<li><a href="movies.html">Tv-Series</a></li>
										<li><a href="movies.html">Horror</a></li>
									</ul>
								</div>
							</div>
							<a class="close" href="#close">×</a>
						</div>
						<!-- /search popup -->
						<!--/search-right-->
					</div>
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
							<h3 class="hny-title">Watch-List</h3>
						</div>
						
					</div>
				</div>
				<div class="w3l-populohny-grids">
					
                    <!-- ---------------------------------------------------------------------------------------- -->
					<?php  
                    foreach($mov_loop as $ml){
                    ?>
                   <div  class="card">
	<div style="border-radius:30px;background:grey;" class="main_card">
		<div class="card_left">
			<div class="card_datails">
				<h1><?php echo $ml["Movie_Title"]?></h1>
				<div class="card_cat">
					<p class="PG"><?php echo $ml["Movie_id"]?></p>
					<p class="year">2018</p>
					<p class="genre"><?php echo $ml["Movie_Type"]?></p>
					<p class="time">2h 28m</p>
				</div>
				<p class="disc"><?php echo $ml["Movie_Desc"]?></p>


                <div class="watch-list">
				<form action="watchlist.php" method="post">
				<input type="hidden" value="<?php echo $ml["Movie_id"]?>" name="idfieldd">
				<input type="submit" value="delete" name="delete-watch-list-butt">
				</form>
				</div>


				<!-- <a href="https://www.imdb.com/title/tt4912910/" target="_blank">Read More</a> 19755-->
			<div class="social-btn">
        <!-- WATCH TRAILER-->
				<button>
					<i class="fas fa-play"></i> SEE TRAILER
				</button>
				<!-- GET-->
				
				<h1 style="margin-top:3%;">feedbacks</h1>
				<?php
               $nameFeed=$fc->FeedbackOnFilm($ml["Movie_id"]);
				foreach($nameFeed as $fdof){
				?>
				<p style="font-size:20px;"><?php echo  $fdof["name"]." : ".$fdof["feedback"] ?></p>
				<?php
				}
				?>
			</div>	
			</div>
		</div>
		<div class="card_right">
			<div class="img_container">
				<img style="height:390px; width:300px;border-radius:5px; " src="<?php echo $ml["image"]?>" alt="">
				</div>
				<div class="play_btn">
					<a href="https://www.imdb.com/title/tt4912910/" target="_blank">
						<!-- <i class="fas fa-play-circle"></i> -->
					</a>
				</div>
	</div>



<!-- FOLLOW -->

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