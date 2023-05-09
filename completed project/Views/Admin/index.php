<?php
session_start();
if(!isset($_SESSION["userRole"]))
{
	header("location:../Auth/login.php ");

}else{
 if($_SESSION["userRole"]!="admin")          //only admin acn acces is page
 {
	header("location:../Auth/login.php ");
 }
}
include_once '../../Controllers/cardControl.php';
include_once '../../Controllers/DatabaseProxy.php';
include_once '../../Controllers/TicketControl.php';
include_once '../../Models/card_data.php';
include_once '../../Models/Movie_data.php';
include_once '../../Models/ticket_data.php';
include_once '../../Models/name_idfactory.php';
include_once '../../Controllers/MovieControl.php';
include_once '../../Controllers/feedbackControl.php';

$feed=new fbc;//controller
$feeddata=$feed-> show_feedadmin();
$movie=new MovieC ;//controller
$mov_loop=$movie->show_Movie_data();
$ticket_control=new ticketC;//controller
$ticket=$ticket_control->show_T_data();
//factory
$factory=new name_id_factroy;

$movie_data=$factory->create_movie();//model

$deletemsg="";
if(isset($_POST["cancel-butt"]))
{
    if(!empty($_POST["cancelInput"])){
     if($ticket_control->delete_T_data($_POST["cancelInput"]))
      {
        $deletemsg="you have delete it succesfully";
        echo "<script>alert'$deletemsg'</script>";
      }
    }
}
if(isset($_POST["cancel-buttt"]))
{
    if(!empty($_POST["cancelInputt"])){
     if($movie->delete_Movie_data($_POST["cancelInputt"]))
      {
        $deletemsg="......................you have delete it succesfully";
      }
    }
}
$f="";
if(isset($_POST["add-btn"]))
{
$location="../images/".date("h-i-s").$_FILES["image"]["name"];
$movie_data->set_name($_POST["movie_name"]);
$movie_data->set_MovieDesc($_POST["movie_dis"]);
$movie_data->set_MovieType($_POST["movie_type"]);
$movie_data->set_Movieimage($location);
$result=$movie->insert_Movie_data($movie_data);
   if(move_uploaded_file($_FILES["image"]["tmp_name"],$location))
{
    header("location:index.php");
    exit;
}    
}
if(isset($_POST["up-btn"]))
{  
    if(isset($_POST["movie_dis"])){
        $r=$_POST["movie_id"];
        $t=$_POST["movie_dis"];
    $movie->modify_desc($t,$r);
    }
    if(isset($_POST["movie_type"])){
        $r=$_POST["movie_id"];
        $s=$_POST["movie_type"];
    $movie->modify_Type($s,$r);
    }
 header("location:index.php");
 exit;
}
if(isset($_POST["removebutt"]))
{
    $feed->delete_feedadmin($_POST["removeInput"])  ;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Elegant admin lite design, Elegant admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Elegant Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Elegant Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/elegant-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../assets/css/modifyoradd.css">
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 plugins CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="../assets/css/pages/dashboard1.css" rel="stylesheet">
</head>
<body class="skin-default-dark fixed-layout">
    <?php //echo $deletemsg; ?>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" >
                   <h2  style="color:black">CinemaWebApp</h2> 
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light"
                                href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-search"></i></a>
                                <!-- <li class="nav-item search-box">ff</li> -->
                                <li><a href="../Auth/Login.php">Logout</a></li>
                            <!-- <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a>
                            </form> -->
                        </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li style="margin:10px 10px;background:#394867;color:white; padding:20px 30px;border-radius:50px; font-size:20px;font-weight:500;" class="nav-item dropdown">
                            
                               <?php echo" Admin: ". $_SESSION["userName"]; ?>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h1 style="background:#394867;color:white;width: fit-content;padding:5px; border-radius:5px; "class="text-themecolor">Dashboard for Admin</h1>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <!-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <a class="btn btn-success d-none d-lg-block m-l-15"
                                href="https://wrappixel.com/templates/elegant-admin/"> Upgrade To Pro</a> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                            <div class="table-responsive">
                                <h2 style="color:black; text-decoration:underline;">Tickets</h2>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">T_ID</th>
                                            <th>Client_ID</th>
                                            <th>Seat_Number</th>
                                            <th>Hall_Number</th>
                                            <th>Date</th>
                                            <th>PRICE</th>
                                            <th>time</th>
                                            <th>Action</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($ticket as $tarr){
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $tarr["id"]?></td>
                                            <td><?php echo $tarr["client_id"]?></td>  <!-- we must put session id-->
                                            <td class="txt-oflo"><?php echo $tarr["Seat_Number"] ?></td>
                                            <td class="txt-oflo"><?php echo $tarr["Hall_Number"]?></td>
                                            <td><span class="text-success"><?php echo $tarr["Date"] ?></span></td>
                                            <td><?php echo $tarr["movie"]?></td>
                                            <td><?php //echo $tarr["time"]?></td>
                                            <td>
                                            <form action="index.php" method="POST">
                                            <input type="hidden" value="<?php echo $tarr["id"]?>" name="cancelInput">
                                            <button type="submit" name="cancel-butt">cancel</button>
                                            </form>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>

                                        
                                    </tbody>
                                </table>
                                <br><br>
                                <h2 style="color:black; text-decoration:underline;">Feedback</h2>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Name</th>
                                            <th>Email</th>
                                            <th>feedback</th>
                                            <th>Movie</th>
                                            <th>cancel</th>
                                            <!-- <th>add_movie</th> -->

                                    </thead>
                                    <tbody>
                                    <?php  
                    foreach($feeddata as $ml){
                                          ?>
                                        <tr>
                                            <td class="text-center"><?php echo $ml["name"]?></td>
                                            <td><?php echo $ml["email"]?></td>  <!-- we must put session id-->
                                            <td class="txt-oflo"><?php echo $ml["feedback"] ?></td>
                                            <td class="txt-oflo"><?php echo $ml["movie"]?></td>
                                            <!-- <td class="txt-oflo"><?php// echo $ml["movia"]?></td> -->
                                            <td>
                                            <form action="index.php" method="POST">
                                            <input type="hidden" value="<?php echo $ml["movid"]?>" name="removeInput">
                                            <button type="submit" name="removebutt">Remove</button>
                                            </form>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>

                                        
                                    </tbody>
                                </table>
                                <br><br>
                                <h2 style="color:black; text-decoration:underline;">Movies</h2>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Movie_id</th>
                                            <th>Movie_Title</th>
                                            <th>Movie_Desc</th>
                                            <th>Movie_Type</th>
                                            <th>cancel</th>
                                            <!-- <th>add_movie</th> -->

                                    </thead>
                                    <tbody>
                                    <?php  
                    foreach($mov_loop as $ml){
                                          ?>
                                        <tr>
                                            <td class="text-center"><?php echo $ml["Movie_id"]?></td>
                                            <td><?php echo $ml["Movie_Title"]?></td>  <!-- we must put session id-->
                                            <td class="txt-oflo"><?php echo $ml["Movie_Desc"] ?></td>
                                            <td class="txt-oflo"><?php echo $ml["Movie_Type"]?></td>
                                            <td>
                                            <form action="index.php" method="POST">
                                            <input type="hidden" value="<?php echo $ml["Movie_id"]?>" name="cancelInputt">
                                            <button type="submit" name="cancel-buttt">cancel</button>
                                            </form>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>

                                        
                                    </tbody>
                                </table>
                                <br><br>
                                <h2 style="color:black; text-decoration:underline;">Add or Modify Movie</h2>

                                <div class="addORmodify">
                                <form action="index.php" method="post" enctype="multipart/form-data" >
                                    <label class="mainlabel" for="addORmodify">Add or Modify Movie By id</label>
                                   <?php //echo $_FILES["image"]["name"]?>
                                    <br> <br>
                                    <div class="flex1">
                                    <label for="">name</label>
                                    <input type="text" name="movie_name">
                                    <!-- <br> <br> -->
                                    <label for="">Describtion</label>
                                    <input type="text" name="movie_dis">
                                    <br> <br>
                                    </div>
                                    <div class="flex1">
                                    <label for="">movie type</label>
                                    <input type="text" name="movie_type">
                                    <!-- <br> <br> -->
                                    <label for="">movie_id</label>
                                    <input type="text" name="movie_id">
                                    <br> <br>
                                    </div>
                                    
                                    <div class="flex2">
                                    <input type="submit" value="Add" name="add-btn">
                                    <!-- <input type="submit" value="Add"    > -->
                                    <!-- <br> <br> -->
                                    <input type="file" name="image" >
                                    <input type="submit" value="Update" name="up-btn">
                                    </div>
                                    
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="dist/js/dashboard1.js"></script>
</body>

</html>