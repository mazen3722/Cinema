
<?php 
require_once '../../Controllers/TicketControl.php';
require_once '../../Controllers/DBController.php';
require_once '../../Controllers/AuthController.php';
$c=new ticketData;
$x=new ticketC;
$db = new DBController;
$db->openConnection();


if(isset($_POST["sub"]))
{
$check1=$_POST["arrayOFcheck"];
$chk="";
foreach($check1 as $chk1)  
   { 
    $chk=$chk1;
    $c->set_seat($chk);
    $c->set_hall($_POST["movie-select"]);
   $c->set_date($_POST["day-select"]);
   $c->set_price($_POST["time-select"]);
   $c->set_time($_POST["time-select"]);
   if($x->insert_T_data($c)){
    header("location:ch.php");
    exit;
   }
   }
   
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="div.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>Document</title>
</head>
<!-- ------------------------------------------------------------------------------------------------------- -->
<body>
    <div class="container-0">
      <div class="form-edit">
        <form id="booking-seat" action="ch.php" method="POST" >  
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
      <td class="row2">R2-S1<input type="checkbox" name="arrayOFcheck[]" value="R2-S1"></td>  
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
    <option value="harley">harley</option>
    <option value="alhasa al sadsa">alhasa al sadsa</option>
    <option value="tat7">tat7</option>
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
    <option value="9:am">9:am</option>
    <option value="12:am">12:am</option>
    <option value="3:am">3:am</option>
    </select>
    </div>
</div>
</div>
<!-- selection -->

<!-- <div class="sub-butt-d">  
      <input class="sub-butt" type="submit" value="submit" name="sub">
</div>   -->
</form> 
</div>
</div>
       
</body>
</html>
<!-- //  function insert_into($i)
// {
//     $db = new DBController;
//     $qry="insert into tick value('$i',0)";
//     if($db->openConnection())
//     {
//         $db->insert($qry);
//         return  true;
//     }else{
//         return false;
//     }
// }
// function show()
// {
//    $db = new DBController;
//    if($db->openConnection())
//     {
//       $qry="select ticketname from tick where id=0";
//         return $db->select($qry);
//     }else{
//         return false;
//     }
// }
// $arr=array();
// $length = 0;
// $price=0;
// $showw=show();
// if(isset($_POST["show"]))
// {
// $check1=$_POST["arrayOFcheck"];
// foreach($check1 as $chk1)  
//    { 
//    $length+=1;
//    $price+=100;
//    }
//    array_push($arr,$_POST["arrayOFcheck"]);
  
// }
// }
// for ($i = 0; $i <$length; $i++) {
//    insert_into($arr[$i]);
// }

// $length = count($arr);
// $arr=array();
// if(isset($_POST["arrayOFcheck"]))
// {
// array_push($arr,$_POST["arrayOFcheck"]);
// print_r($arr);
// }
// if($chk1== 'R1-S1')
// {
//     $c='checked';
//     $style='background-color:red';
// }

//truncate table tick; -->
 <!-- </div>
            <div>
            <div class="alllist">
            
          
   <div class="custom-select" style="width:200px;">
   <form action="ch.php" method="POST" >
  <select name="movie-select">
    <option>Select Movie</option>
    <option value="harley">harley</option>
    <option value="alhasa al sadsa">alhasa al sadsa</option>
    <option value="tat7">tat7</option>
  </select>
</form>
</div>

<div class="custom-select" style="width:200px;">
<form action="ch.php" method="POST" >
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
  </form>
</div>

<div class="custom-select" style="width:200px;">
<form action="ch.php" method="POST" >
  <select name="time-select">
    <option >Select Time </option>
    <option value="9:am">9:am</option>
    <option value="12:am">12:am</option>
    <option value="3:am">3:am</option>
  </select>
  </form>
</div>

            </div>
            </div>
    </div> -->