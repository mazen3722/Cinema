<?php 
session_start();
if(!isset($_SESSION["userRole"]))
{
	header("location:../Auth/login.php ");

}else{
 if($_SESSION["userRole"]!="client")
 {
	header("location:../Auth/login.php ");
 }
}
include_once '../../Controllers/cardControl.php';
include_once '../../Controllers/DBController.php';
include_once '../../Controllers/TicketControl.php';
include_once '../../Controllers/AuthController.php';
include_once '../../Models/card_data.php';
include_once '../../Models/ticket_data.php';
$cd=new cardControl;
$card=new card_data;
$auth=new AuthController;
$name="";
$au=$auth->show_userid($name);
$sid="";
foreach ($au as $s)
{
$sid=$s["id"];
}
  if(isset($_POST["pay"])){
    if(isset($_POST['cardname']) && isset($_POST['cardnumber'])  && isset($_POST['expyear']) && isset($_POST['cvv']))
       {
         if(!empty($_POST['cardname']) && !empty($_POST['cardnumber']) && !empty($_POST['expyear']) && !empty($_POST['cvv']) )
            {   
            $card->set_name($_POST["cardname"]);
            $card->set_card_num($_POST["cardnumber"]);
            $card->set_exp($_POST["expyear"]);
            $card->set_cvv($_POST["cvv"]);
            if(isset($_POST["pay"]))
            {
            if($cd->insert_c_data($card)){
            header("location:book.php");
            exit;
          }
       }
     }else
         {
           $errMsg="Please fill all fields";
        echo "Please fill all fields";
   }
 }
}
// cardname
// cardnumber
// cvv
// expyear
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ticket Booking</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/style-starter.css">
  <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/progress.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/ticket-booking.css">

  <!-- ..............For progress-bar............... -->
  <link rel="stylesheet" type="text/css" href="../assets/css/e-ticket.css">

  <link rel="stylesheet" type="text/css" href="../assets/css/payment.css" />
  <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 

</head>

<body>
  <header id="site-header" class="w3l-header fixed-top">

    <!--/nav-->
    <nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
      <div class="container">
        <h1><a class="navbar-brand" href="main.php"><span class="fa fa-play icon-log" aria-hidden="true"></span>
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

  <div class="container" id="progress-container-id">
    <div class="row">
      <div class="col">
        <div class="px-0 pt-4 pb-0 mt-3 mb-3">
          <form id="form" action="book.php" method="POST"> <!-- hereeeeeeeeeeeeeeeeeeeeeeee-->
            <ul id="progressbar" class="progressbar-class">
              <li class="active" id="step1">welcome</li>
              <li id="step2" class="not_active">Seat Selection</li>
              <li id="step3" class="not_active">Payment</li>
              <li id="step4" class="not_active">E-Ticket</li>
            </ul>
            <br>
            <fieldset>
              <div id="screen-select-div">
                <h2>welcome to our cienema site </h2>
               
                  <ul class="instruction">
                    <li><h2>Instructions<h2></li>
                    <li>Select your seat</li>
                    <li>Select film</li>
                    <li>Select time</li>
                    <li>Slecet date</li>
                    <li>then go to payment</li>
                  </ul>
                
              </div>
              <input id="screen-next-btn"  type="button" name="next-step" class="next-step" value="make Booking"
                />
            </fieldset>
            <fieldset>

              <div>
                <iframe id="seat-sel-iframe"
                  style="  box-shadow: 0 14px 12px 0 var(--theme-border), 0 10px 50px 0 var(--theme-border); width: 1270px; height:500px; display: block; margin-left: auto; margin-right:10px; overflow:none;"
                  src="../Admin/ch.php"></iframe>
              </div>
              <br>
              <input type="button" name="next-step" class="next-step" value="Proceed to Payment" />
              <input type="button" name="previous-step" class="previous-step" value="Back" />
            </fieldset>
            
            <fieldset>
              <!-- Payment Page -->
              
              <div id="payment_div">
                <div class="payment-row">
                  <div class="col-75">
                    <div class="payment-container">
                      <div class="payment-row">
                        <div class="col-50">
                          <h3 id="payment-h3">Payment</h3>
                          <div class="payment-row payment">
                            <div class="col-50 payment">
                              <label for="card" class="method card">
                                <div class="icon-container">
                                <!-- <i class="fab fa-cc-visa"></i> -->
                                  <i class="fab fa-cc-visa" style="color: navy"></i>
                                  <i class="fab fa-cc-amex" style="color: blue"></i>
                                  <i class="fab fa-cc-mastercard" style="color: red"></i>
                                  <i class="fab fa-cc-discover" style="color: orange"></i>
                                </div>
                                <div class="radio-input">
                                  <input type="radio" id="card" form="form" />
                                  Pay EGP.200.00 with credit card
                                </div>
                              </label>
                            </div>
                            <div class="col-50 payment">
                              <label for="paypal" class="method paypal">
                                <div class="icon-container">
                                  <i class="fab fa-paypal" style="color: navy"></i>
                                </div>
                                <div class="radio-input">
                                  <input id="paypal" type="radio" checked form="form">
                                  Pay $30.00 with PayPal
                                </div>
                              </label>
                            </div>
                          </div>

                          <div class="payment-row">
                            <div class="col-50">
                              <label for="cname">Cardholder's Name</label>
                              <input type="text" id="cname" v name="cardname" placeholder="Firstname Lastname" required form="form" />
                            </div>
                            <div class="col-50">
                              <label for="ccnum">Credit card number</label>
                              <input type="text" id="ccnum" value="0" name="cardnumber" placeholder="xxxx-xxxx-xxxx-xxxx"
                              form="form"  required />
                            </div>
                          </div>
                          <div class="payment-row">
                            <div class="col-50">
                              <label for="expmonth">Exp Month</label>
                              <input type="text" id="expmonth" name="expmonth" placeholder="September" form="form" required />
                            </div>
                            <div class="col-50">
                              <div class="payment-row">
                                <div class="col-50">
                                  <label for="expyear">Exp Year</label>
                                  <input type="text" id="expyear"  name="expyear" placeholder="yyyy" form="form" required />
                                </div>
                                <div class="col-50">
                                  <label for="cvv">CVV</label>
                                  <input type="text" id="cvv"  name="cvv" placeholder="xxx" form="form" required />
                                </div>
                               
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <input type="submit" name="pay"  value="Confirm Payment" form="form"  onclick="location.href='main.php';" />
             
              <input type="button" name="previous-step" class="cancel-pay-btn" value="Cancel Payment"
                onclick="location.href='main.php';" />
                <!-- </form> -->
            </fieldset>
            <!-- <fieldset>
              <h2>E-Ticket</h2>
              <div class="ticket-body">
                <div class="ticket">
                  <div class="holes-top"></div>
                  <div class="title">
                    <p class="cinema">MyShowz Entertainment</p>
                    <p class="movie-title">Movie Name</p>
                  </div>
                  <div class="poster">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/25240/only-god-forgives.jpg"
                      alt="Movie: Only God Forgives" />
                  </div>
                  <div class="info">
                    <table class="info-table ticket-table">
                      <tr>
                        <th>SCREEN</th>
                        <th>ROW</th>
                        <th>SEAT</th>
                      </tr>
                      <tr>
                        <td class="bigger">18</td>
                        <td class="bigger">H</td>
                        <td class="bigger">24</td>
                      </tr>
                    </table>
                    <table class="info-table ticket-table">
                      <tr>
                        <th>PRICE</th>
                        <th>DATE</th>
                        <th>TIME</th>
                      </tr>
                      <tr>
                        <td>RS.12.00</td>
                        <td>4/13/21</td>
                        <td>19:30</td>
                      </tr>
                    </table>
                  </div>
                  <div class="holes-lower"></div>
                  <div class="serial">
                    <table class="barcode ticket-table">
                      <tr>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                        <td style="background-color:black;"></td>
                        <td style="background-color:white;"></td>
                      </tr>
                    </table>
                    <table class="numbers ticket-table">
                      <tr>
                        <td>9</td>
                        <td>1</td>
                        <td>7</td>
                        <td>3</td>
                        <td>7</td>
                        <td>5</td>
                        <td>4</td>
                        <td>4</td>
                        <td>4</td>
                        <td>5</td>
                        <td>4</td>
                        <td>1</td>
                        <td>4</td>
                        <td>7</td>
                        <td>8</td>
                        <td>7</td>
                        <td>3</td>
                        <td>4</td>
                        <td>1</td>
                        <td>4</td>
                        <td>5</td>
                        <td>2</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <input type="button" name="previous-step" class="home-page-btn" value="Browse to Home Page"
                onclick="location.href='index.html';" />
            </fieldset> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  let prevId = "1";

//   window.onload = function () {
//     document.getElementById("screen-next-btn").disabled = true;
//   }

//   function timeFunction() {
//     document.getElementById("screen-next-btn").disabled = true;
//   }

  function myFunction(id) {
    document.getElementById(prevId).style.background = "rgb(243, 235, 235)";
    document.getElementById(id).style.background = "#df0e62";
    prevId = id;
  }
</script>

<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
<script type="text/javascript" src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
</script>
<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="../assets/js/theme-change.js"></script>

<script type="text/javascript" src="../assets/js/ticket-booking.js"></script>

</html>