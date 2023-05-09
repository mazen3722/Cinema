<?php 
require_once '../../Models/user.php';
require_once '../../Controllers/AuthController.php';
$errMsg="";

if(isset($_GET["logout"]))
{
  session_start();
  session_destroy();
}
if(isset($_POST['email']) && isset($_POST['password']))
{
    if(!empty($_POST['email']) && !empty($_POST['password']) )
    {   
        $user=new User;
        $auth= AuthController::getinstance();
        $user->set_email($_POST['email']);                // email=$_POST['email'];
        $user->set_passwd($_POST['password']);                // password=$_POST['password'];
        if(!$auth->login($user))
        {
            if(!isset($_SESSION["userId"]))
            {
                session_start();
            }
            $errMsg=$_SESSION["errMsg"];
        }
        else
        {
            if(!isset($_SESSION["userId"]))
            {
                session_start();
            }
            if($_SESSION["userRole"]=="admin")
            {
               header("location: ../Admin/index.php");
            }
            else
            {
                header("location: ../Client/main.php");
            }

        }

        
    }
    else
    {
        $errMsg="Please fill all fields";
        echo "Please fill all fields";
    }
}
/*---------------------------regis----------------------------*/
if(!isset($_SESSION["userId"]))
{
	session_start();               //if session not start we need to start it
}
$errMsgreg="";
if(isset($_POST['sign-up-name']) && isset($_POST['sign-up-email']) && isset($_POST['sign-up-passwd']))
{
    if(!empty($_POST['sign-up-name']) && !empty($_POST['sign-up-email']) && !empty($_POST['sign-up-passwd']) )
    { 
    $user_reg=new User;
	$auth= AuthController::getinstance();
	$user_reg->set_name($_POST['sign-up-name']);                          //name=$_POST['sign-up-name'];
    $user_reg->set_email($_POST['sign-up-email']);                          //email=$_POST['sign-up-email'];
    $user_reg->set_passwd($_POST['sign-up-passwd']);                          //password=$_POST['sign-up-passwd'];
	if($auth-> register($user_reg)){                //method take data to put in db
		header("location: ../Client/main.php");      
	  }else{
		$errMsgreg=$_SESSION["errMsgreg"];
	  }
	}else{
		$errMsgreg="Please fill all fields";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signin</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/as-alert-message.min.css">
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style-starter.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/sign-in.css">
</head>

<body>
	<header id="site-header" class="w3l-header fixed-top">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container">
				<h1><a class="navbar-brand" href="index.html"><span class="fa fa-play icon-log"
							aria-hidden="true"></span>
							MyShowz </a></h1>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
				</div>
				<div class="Login_SignUp" id="login_s">
					<!-- style="font-size: 2rem ; display: inline-block; position: relative;" -->
					<!-- <li class="nav-item"> -->
					<a class="nav-link" href="sign_in.html"><i class="fa fa-user-circle-o"></i></a>
					<!-- </li> -->
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

	<div class="container_signup_signin" id="container_signup_signin">
		<div class="form-container sign-up-container">
			<form name="sign-up-form" action="#" onsubmit="return signUpValidateForm()" action="login.php" method="POST">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input name="sign-up-name" type="text" placeholder="Name" />
				<input name="sign-up-email" type="email" placeholder="Email" />
				<input name="sign-up-passwd" type="password" placeholder="Password" />
				<button>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form name="sign-in-form" style="color: var(--theme-title);" action="#"
				onsubmit="return signInValidateForm()" action="login.php" method="POST">
				<h1>Sign in</h1>
        <?php 
              
              if($errMsg!="")
              {
                  ?>
                      <div class="alert alert-danger" role="alert"><?php echo $errMsg ?></div>
                  <?php
              }
            
            ?>
				<div class="social-container">
					<a href="#" class="social" style="color: var(--theme-title);"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="social" style="color: var(--theme-title);"><i
							class="fab fa-google-plus-g"></i></a>
					<a href="#" class="social" style="color: var(--theme-title);"><i class="fab fa-linkedin-in"></i></a>
				</div>
				<span>or use your account</span>
				<input name="email" type="text" placeholder="Email" />
				<input name="password" type="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button>Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your login details</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Register and book your tickets now!!!</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../assets/js/as-alert-message.min.js"></script>
	<script src="../assets/js/jquery-3.3.1.min.js"></script>
	<!--/theme-change-->
	<script src="../assets/js/theme-change.js"></script>
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
	<script src="../assets/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="../assets/js/sign-in.js"></script>

</body>

</html>