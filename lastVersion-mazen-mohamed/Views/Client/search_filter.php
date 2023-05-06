<?php
include_once '../../Controllers/cardControl.php';
include_once '../../Controllers/DBController.php';
include_once '../../Controllers/TicketControl.php';
include_once '../../Controllers/AuthController.php';
include_once '../../Models/card_data.php';
include_once '../../Models/ticket_data.php';
include_once '../../Controllers/MovieControl.php';
$movie=new MovieC ;
$mov_loop=$movie->show_Movie_data();
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
	
</head>

<body>
	<!-- header -->
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
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
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="movies.html">Movies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.html">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Contact_Us.html">Contact</a>
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
				<a href="index.html">Home</a> » <span class="breadcrumb_last" aria-current="page">movies</span>
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
						<div class="headerhny-right text-lg-right">
							<h4><a class="show-title" href="movies.php">Show all</a></h4>
						</div>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<!-- <div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="../assets/images/m13.jpg" alt="">
							</figure>
							<a href=".Commando3" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">هارلي</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 4min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a> -->
							<!-- Modal -->
							<!-- <div class="modal fade Commando3" id="myModal" tabindex="-1" role="dialog"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="../assets/images/m13.jpg" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:21 April 2023</h3>
												<h3>Venue&nbsp;:Cairo </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												هارلي هو فيلم مصري عرض عام 2023 في موسم عيد الفطر، بطولة محمد رمضان ومحمود حميدة ومي عمر، ومن تأليف محمد سمير مبروك وهند عبد الله وإخراج محمد سمير.


											</p>
											<h4>Star Cast</h4>
											<p>
												محمد رمضان: (هارلي)
												<br>
												مي عمر: (أسيل)
												<br>
												محمود حميدة												<br>

												أحمد داش												<br>

												مي كساب												<br>

												حسني شتا
												<br>
												باسل الزارو
												<br>
												إسماعيل فرغلي
												<br>
												حازم إيهاب
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div> -->
							<!-- modal end -->
						<!-- </div>
					</div> -->
                    <!-- ---------------------------------------------------------------------------------------- -->
					<?php  
                    foreach($mov_loop as $ml){
                    ?>
                   <div class="card">
	<div class="main_card">
		<div class="card_left">
			<div class="card_datails">
				<h1><?php echo $ml["Movie_Title"]?></h1>
				<div class="card_cat">
					<p class="PG"><?php echo $ml["Movie_id"]?></p>
					<p class="year">2018</p>
					<p class="genre"><?php echo $ml["Movie_Type"]?></p>
					<p class="time">2h 28m</p>
				</div>
				<p class="disc">Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gone wrong.</p>
				<a href="https://www.imdb.com/title/tt4912910/" target="_blank">Read More</a>
			<div class="social-btn">
        <!-- WATCH TRAILER-->
				<button>
					<i class="fas fa-play"></i> SEE TRAILER
				</button>
				<!-- GET-->
				<button>
					<i class="fas fa-download"></i> DOWNLOAD
				</button>
				<!--USERS RATINGS-->
				<button>
					<i class="fas fa-thumbs-up"></i> 97%
				</button>
				<!--BOOKMARK-->
				<button>
					<i class="fas fa-star"></i>
				</button>
			</div>	
			</div>
		</div>
		<div class="card_right">
			<div class="img_container">
				<img src="https://upload.wikimedia.org/wikipedia/en/f/ff/MI_%E2%80%93_Fallout.jpg" alt="">
				</div>
				<div class="play_btn">
					<a href="https://www.imdb.com/title/tt4912910/" target="_blank">
						<i class="fas fa-play-circle"></i>
					</a>
				</div>
	</div>



<!-- FOLLOW -->
<a class="Follow" href="https://codepen.io/ZaynAlaoudi/" target="blank_"></a>

					</div>
                    <?php
                    }
                    ?>
                    <!-- ------------------------------------------------------------------ -->
					<!-- <div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="../assets/images/bharat1.png" alt="">
							</figure>
							<a href=".Bharat" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Bharat</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 35min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a> -->
							<!-- Modal -->
							<!-- <div class="modal fade Bharat" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="../assets/images/bharat1.png" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:5 June 2019 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Bharat is a 2019 Indian Hindi-language drama film written and directed
												by Ali Abbas Zafar. It is jointly produced by Atul Agnihotri, Alvira
												Khan Agnihotri, Bhushan Kumar, Krishan Kumar, Nikhil Namit and Salman
												Khan under the banners Reel Life Productions, Salman Khan Films and
												T-Series. The film stars Salman Khan, Katrina Kaif, Sunil Grover, Disha
												Patani and Jackie Shroff. Tabu makes a friendly appearance. It traces
												India's post-independence history from the perspective of a common man,
												and follows his life from the age of 8 to 70.
											</p>
											<h4>Star Cast</h4>
											<p>
												Salman Khan as Bharat Kumar<br />
												Katrina Kaif as Kumud Raina Kumar<br />
												Disha Patani as Radha Mathur<br />
												Sunil Grover as Vilayti Khan<br />
												Jackie Shroff as Gautam Kumar
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="item vhny-grid">
						<div class="box16 mb-0">
							<figure>
								<img class="img-fluid" src="../assets/images/m5.jpg" alt="">
							</figure>
							<a href=".Jumanji" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">Jumanji : The Next Level</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> 2 Hr 3min

										</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a> -->
							<!-- Modal -->
							<!-- <div class="modal fade Jumanji" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">DETAILS</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="../assets/images/m5.jpg" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Date&nbsp;:December 13, 2019 </h3>
												<h3>Venue&nbsp;:Cg Road </h3>
											</p>
											<h4>About Movie</h4>
											<p>
												Jumanji: The Next Level is a 2019 American fantasy adventure comedy film
												directed by Jake Kasdan and co-written by Kasdan, Jeff Pinkner, and
												Scott Rosenberg. It is a sequel to 2017's Jumanji: Welcome to the
												Jungle, the second follow-up to 1995's Jumanji, and is the fourth
												installment in the Jumanji franchise. It stars Dwayne Johnson, Jack
												Black, Kevin Hart, Karen Gillan, Nick Jonas, Alex Wolff, Morgan Turner,
												Ser'Darius Blain, and Madison Iseman reprising their roles from the
												previous film while Awkwafina, Rory McCann, Danny Glover, and Danny
												DeVito also join the cast. The film's plot takes place two years after
												Welcome to the Jungle, in which the same group of teenagers, along with
												an old friend and two unwitting additions, become trapped in Jumanji.
												There, they all find themselves facing new problems and challenges with
												both old and new avatars while having to save the land from a new
												villain in order to escape.
											</p>
											<h4>Star Cast</h4>
											<p>
												Dwayne Johnson as Dr. Xander "Smolder" Bravestone<br />
												Jack Black as Professor Sheldon "Shelly" Oberon<br />
												Kevin Hart as Franklin "Mouse" Finbar<br />
												Karen Gillan as Ruby Roundhouse<br />
												Nick Jonas as Jefferson "Seaplane" McDonough
											</p>
										</div>
										<div class="bookbtn">
											<button type="button" class="btn btn-success"
												onclick="location.href='ticket-booking.html';">Book</button>
										</div>
									</div>
								</div>
							</div> -->
							<!-- modal end -->

						<!-- </div>
					</div>
				</div> -->
				<!-- ***********************************Adults Section ************************************** -->
				
				<!-- ***********************************Gujarati Section ************************************** -->
				
			<!-- move top -->
			<!-- <button onclick="topFunction()" id="movetop" title="Go to top">
				<span class="fa fa-arrow-up" aria-hidden="true"></span>
			</button> -->
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