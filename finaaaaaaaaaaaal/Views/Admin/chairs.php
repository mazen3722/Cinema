<?php 
session_start();
require_once '../../Controllers/TicketControl.php';
require_once '../../Controllers/DatabaseProxy.php';
include_once '../../Controllers/MovieControl.php';
include_once '../../Models/ticket_data.php';


$mname=new MovieC;
$mov=$mname->show_Movie_radio();
$c=new ticketData;
$x=new ticketC;
$db = new DatabaseProxy;
$db->openConnection();
$name=$_SESSION["userName"];
$au=$mname->show_userid($name);
$sid="";//userid
foreach ($au as $s)
{
$sid=$s["id"];
}

if(isset($_POST["sub"]))
{
$check1=$_POST["arrayOFcheck"];
$chk="";
foreach($check1 as $chk1)  
   { 
    $chk=$chk1;
    $c->set_seat($chk);//seat
    $c->set_hall($_POST["time-select"]);//hall-time
   $c->set_date($_POST["day-select"]);//date
   $c->set_clientid($sid);
   $c->set_movie($_POST["movie-select"]);
   $c->set_food($_POST["food-select"]);
   if($x->insert_T_data($c)){
   }
   }
   header("location:chairs.php");
    exit; 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/div.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>Document</title>
</head>
<!-- ------------------------------------------------------------------------------------------------------- -->
<body>
    <div class="container-0">
      <div class="form-edit">
        <form id="booking-seat" action="chairs.php" method="POST" >  
                 <div class="container">
                    <div id="table-container">
                     <table class="choose-seat">
                        <tr ><label for="">Select seat</label></tr>  
                          <tr></tr>
                           <tr >  
                             <td class="row1"  >R1-S1<input type="checkbox" name="arrayOFcheck[]" value="R1-S1" class="s-1" ></td>  
                             <td class="row1">R1-S2<input type="checkbox" name="arrayOFcheck[]" value="R1-S2"></td> 
                             <td class="row1">R1-S3<input type="checkbox" name="arrayOFcheck[]" value="R1-S3"></td>
                             <td class="empty"></td>
                             <td class="row1">R1-S4<input type="checkbox" name="arrayOFcheck[]" value="R1-S4"></td>
                             <td class="row1">R1-S5<input type="checkbox" name="arrayOFcheck[]" value="R1-S5"></td>
                             <td class="row1">R1-S6<input type="checkbox" name="arrayOFcheck[]" value="R1-S6"></td>
                             <td class="row1">R1-S7<input type="checkbox" name="arrayOFcheck[]" value="R1-S7"></td> 
                             <td class="empty"></td>
                             <td class="row1">R1-S8<input type="checkbox" name="arrayOFcheck[]" value="R1-S8"></td> 
                             <td class="row1">R1-S9<input type="checkbox" name="arrayOFcheck[]" value="R1-S9"></td> 
                             <td class="row1">R1-S10<input type="checkbox" name="arrayOFcheck[]" value="R1-S10"></td>  
                            </tr>  
                            <!-- firstrow -->

    <tr >  
      <td class="row2">R2-S1<input type="checkbox" name="arrayOFcheck[]" value="R2-S1"></td>  z
      <td class="row2">R2-S2<input type="checkbox" name="arrayOFcheck[]" value="R2-S2"></td> 
      <td class="row2">R2-S3<input type="checkbox" name="arrayOFcheck[]" value="R2-S3"></td>
      <td class="empty"></td>
      <td class="row2">R2-S4<input type="checkbox" name="arrayOFcheck[]" value="R2-S4"></td>
      <td class="row2">R2-S5<input type="checkbox" name="arrayOFcheck[]" value="R2-S5"></td>
      <td class="row2">R2-S6<input type="checkbox" name="arrayOFcheck[]" value="R2-S6"></td>
      <td class="row2">R2-S7<input type="checkbox" name="arrayOFcheck[]" value="R2-S7"></td>  
      <td class="empty"></td>
      <td class="row2">R2-S8<input type="checkbox" name="arrayOFcheck[]" value="R2-S8"></td>
      <td class="row2">R2-S9<input type="checkbox" name="arrayOFcheck[]" value="R2-S9"></td>
      <td class="row2">R2-S10<input type="checkbox" name="arrayOFcheck[]" value="R2-S10"></td>  
   </tr>  
   <tr>  
      <td class="row3">R3-S1<input type="checkbox" name="arrayOFcheck[]" value="R3-S1"></td>  
      <td class="row3">R3-S2<input type="checkbox" name="arrayOFcheck[]" value="R3-S2"></td> 
      <td class="row3">R3-S3<input type="checkbox" name="arrayOFcheck[]" value="R3-S3"></td>
      <td class="empty"></td>
      <td class="row3">R3-S4<input type="checkbox" name="arrayOFcheck[]" value="R3-S4"></td>
      <td class="row3">R3-S5<input type="checkbox" name="arrayOFcheck[]" value="R3-S5"></td>
      <td class="row3">R3-S6<input type="checkbox" name="arrayOFcheck[]" value="R3-S6"></td>
      <td class="row3">R3-S7<input type="checkbox" name="arrayOFcheck[]" value="R3-S7"></td>  
      <td class="empty"></td>
      <td class="row3">R3-S8<input type="checkbox" name="arrayOFcheck[]" value="R3-S8"></td>
      <td class="row3">R3-S9<input type="checkbox" name="arrayOFcheck[]" value="R3-S9"></td>
      <td class="row3">R3-S10<input type="checkbox" name="arrayOFcheck[]" value="R3-S10"></td> 
   </tr>  
   <tr >  
   <td class="row4">R3-S1<input type="checkbox" name="arrayOFcheck[]" value="R4-S1"></td>  
      <td class="row4">R4-S2<input type="checkbox" name="arrayOFcheck[]" value="R4-S2"></td> 
      <td class="row4">R4-S3<input type="checkbox" name="arrayOFcheck[]" value="R4-S3"></td>
      <td class="empty"></td>
      <td class="row4">R4-S4<input type="checkbox" name="arrayOFcheck[]" value="R4-S4"></td>
      <td class="row4">R4-S5<input type="checkbox" name="arrayOFcheck[]" value="R4-S5"></td>
      <td class="row4">R4-S6<input type="checkbox" name="arrayOFcheck[]" value="R4-S6"></td>
      <td class="row4">R4-S7<input type="checkbox" name="arrayOFcheck[]" value="R4-S7"></td>  
      <td class="empty"></td>
      <td class="row4">R4-S8<input type="checkbox" name="arrayOFcheck[]" value="R4-S8"></td>
      <td class="row4">R4-S9<input type="checkbox" name="arrayOFcheck[]" value="R4-S9"></td>
      <td class="row4">R4-S10<input type="checkbox" name="arrayOFcheck[]" value="R4-S10"></td> 
   </tr>  
</table>  
<div class="sub-butt-d">  
      <input class="sub-butt" type="submit" value="submit" name="sub">
</div>  
</div>
<!-- selection -->
<div class="alllist">
<div class="custom-select" style="width:200px;">
									
     <select name="movie-select">
     <option>Select Movie</option>
			 <?php
			foreach($mov as $m){
			  ?>
        <option value="<?php echo $m["Movie_Title"] ?>"><?php echo $m["Movie_Title"] ?></option>
				<?php
				}?>                                      
     </select>
      </div>
     <div class="custom-select" style="width:200px;">
     <select name="day-select">
    <option>Select Day</option>
    <option value="13-To Day">13-To Day</option>
    <option value="14-Tomorrow">14-Tomorrow</option>
    <option value="15-sunday">15-sunday</option>
    <option value="6-monday">16-monday</option>
    <option value="17-tuesday">17-tuesday</option>
    <option value="8-wednesday">18-wednesday</option>
    <option value="19-thurusda">19-thurusday</option>
     </select>
     </div>
     <div class="custom-select" style="width:200px;">
    <select name="time-select">
    <option >Select Time </option>
    <option value="H-5/9:am">H-5/9:am</option>
    <option value="H-3/12:am">H-3/12:am</option>
    <option value="H-2/3:am">H-2/3:am</option>
    </select>
    </div>
    <div class="custom-select" style="width:200px;">
    <select name="food-select">
    <option >Select food </option>
    <option value="Popcorn&drink">Popcorn&drink</option>
    <option value="Popcorn&chips">Popcorn&chips</option>
    <option value="Chips&drink">Chips&drink</option>
    <option value="drink">drink</option>
    </select>
    </div>
</div>
</div>
</form> 
</div>
</div>
       
</body>
</html>
