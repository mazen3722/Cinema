<?php 
require_once '../../Controllers/TicketControl.php';
require_once '../../Controllers/DBController.php';
require_once '../../Controllers/AuthController.php';
 function insert_into($i)
{
    $db = new DBController;
    $qry="insert into tick value('$i',0)";
    if($db->openConnection())
    {
        $db->insert($qry);
        return  true;
    }else{
        return false;
    }
}
function show()
{
   $db = new DBController;
   if($db->openConnection())
    {
      $qry="select ticketname from tick where id=0";
        return $db->select($qry);
    }else{
        return false;
    }
}
$arr=array();
$length = 0;
$price=0;
$showw=show();
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
if(isset($_POST["sub"]))
{
$check1=$_POST["arrayOFcheck"];
$chk="";
foreach($check1 as $chk1)  
   { 
    $chk=$chk1;
   insert_into($chk);
   $length+=1;
   $price+=100;
   }

}
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

//truncate table tick;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bookin-board.css">
    <!-- <link rel="stylesheet" type="text/css" href=".https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" > -->
</head>
<body >
 <!-- <div class="seat-head"><p >Select your seat</p></div> -->

<form id="booking-seat" action="checkbox_test.php" method="POST" >  
<!-- <h1 class="seat-head">Select your seat</h1> -->
<div id="table-container">
<table class="choose-seat">
   <tr ><label for="">Select your seat</label></tr>  
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
<!-- <div class="show_t" >  
      <button class="sub-butt" name="show">show_t</button>
      <input class="sub-butt" type="button" value="show_t" name="show" action="onclick">
</div>   -->
</div>  
</form>  
<div class="custom-select" style="width:200px;">
  <select>
    <option value="0">Select Movie:</option>
    <option value="1">harley</option>
    <option value="2">alhasa al sadsa</option>
    <option value="3">tat7</option>
  </select>
</div>
</body>
</html>