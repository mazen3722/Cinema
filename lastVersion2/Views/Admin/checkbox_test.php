<?php 
require_once '../../Controllers/TicketControl.php';
require_once '../../Controllers/DBController.php';
require_once '../../Controllers/AuthController.php';
 function insert_into($i)
{
    $db = new DBController;
    $qry="insert into tick value('$i')";
    if($db->openConnection())
    {
        $db->insert($qry);
        return  true;
    }else{
        return false;
    }
}

if(isset($_POST["sub"]))
{
$check1=$_POST["arrayOFcheck"];
$chk="";
foreach($check1 as $chk1)  
   { 
    $chk=$chk1;
    insert_into($chk);
   }

}
$c="";
$style="";
 if($chk1== 'R1-S1')
 {
     $c='checked';
     $style='background-color:red';
 }

truncate table tick;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="../assets/css/bookin-board.css">

</head>
<body>
<form id="booking-seat" action="checkbox_test.php" method="POST" >  
<div id="table-container">
<table class="choose-seat">  
   <tr >  
      <td class="row1"  style="<?php echo $style ?>">R1-S1<input type="checkbox" name="arrayOFcheck[]" value="R1-S1" class="s-1" <?php echo $c ?> ></td>  
      <td class="row1">R1-S2<input type="checkbox" name="arrayOFcheck[]" value="R1-S2"></td> 
      <td class="empty"></td>
      <td class="row1">R1-S3<input type="checkbox" name="arrayOFcheck[]" value="R1-S3"></td>
      <td class="row1">R1-S4<input type="checkbox" name="arrayOFcheck[]" value="R1-S4"></td>
      <td class="row1">R1-S5<input type="checkbox" name="arrayOFcheck[]" value="R1-S5"></td>
      <td class="empty"></td>
      <td class="row1">R1-S6<input type="checkbox" name="arrayOFcheck[]" value="R1-S6"></td>
      <td class="row1">R1-S7<input type="checkbox" name="arrayOFcheck[]" value="R1-S7"></td>  
   </tr>  
   <tr >  
      <td class="row2">R2-S1<input type="checkbox" name="arrayOFcheck[]" value="R2-S1"></td>  
      <td class="row2">R2-S2<input type="checkbox" name="arrayOFcheck[]" value="R2-S2"></td> 
      <td class="empty"></td>
      <td class="row2">R2-S3<input type="checkbox" name="arrayOFcheck[]" value="R2-S3"></td>
      <td class="row2">R2-S4<input type="checkbox" name="arrayOFcheck[]" value="R2-S4"></td>
      <td class="row2">R2-S5<input type="checkbox" name="arrayOFcheck[]" value="R2-S5"></td>
      <td class="empty"></td>
      <td class="row2">R2-S6<input type="checkbox" name="arrayOFcheck[]" value="R2-S6"></td>
      <td class="row2">R2-S7<input type="checkbox" name="arrayOFcheck[]" value="R2-S7"></td>  
   </tr>  
   <tr>  
      <td class="row3">R3-S1<input type="checkbox" name="arrayOFcheck[]" value="R3-S1"></td>  
      <td class="row3">R3-S2<input type="checkbox" name="arrayOFcheck[]" value="R3-S2"></td> 
      <td class="empty"></td>
      <td class="row3">R3-S3<input type="checkbox" name="arrayOFcheck[]" value="R3-S3"></td>
      <td class="row3">R3-S4<input type="checkbox" name="arrayOFcheck[]" value="R3-S4"></td>
      <td class="row3">R3-S5<input type="checkbox" name="arrayOFcheck[]" value="R3-S5"></td>
      <td class="empty"></td>
      <td class="row3">R3-S6<input type="checkbox" name="arrayOFcheck[]" value="R3-S6"></td>
      <td class="row3">R3-S7<input type="checkbox" name="arrayOFcheck[]" value="R3-S7"></td>  
   </tr>  
   <tr >  
      <td class="row4">R4-S1<input type="checkbox" name="arrayOFcheck[]" value="R4-S1"></td>  
      <td class="row4">R4-S2<input type="checkbox" name="arrayOFcheck[]" value="R4-S2"></td> 
      <td class="empty"></td>
      <td class="row4">R4-S3<input type="checkbox" name="arrayOFcheck[]" value="R4-S3"></td>
      <td class="row4">R4-S4<input type="checkbox" name="arrayOFcheck[]" value="R4-S4"></td>
      <td class="row4">R4-S5<input type="checkbox" name="arrayOFcheck[]" value="R4-S5"></td>
      <td class="empty"></td>
      <td class="row4">R4-S6<input type="checkbox" name="arrayOFcheck[]" value="R4-S6"></td>
      <td class="row4">R4-S7<input type="checkbox" name="arrayOFcheck[]" value="R4-S7"></td>  
   </tr>  
</table>  
<div class="sub-butt-d">  
      <input class="sub-butt" type="submit" value="submit" name="sub">
</div>  
</div>  
</form>  
</body>
</html>