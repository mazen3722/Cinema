<?php
require_once '../../Controllers/TicketControl.php';
require_once '../../Controllers/DBController.php';
require_once '../../Controllers/AuthController.php';

if(isset($_POST['seat']) && isset($_POST['hall'])  && isset($_POST['date']) && isset($_POST['price']))
{
    if(!empty($_POST['seat']) && !empty($_POST['hall']) && !empty($_POST['date']) && !empty($_POST['price']) )
    {   
      $ticket=new ticketData;
      $tick_cont=new ticketC;
      $ticket->set_seat($_POST['seat']);
      $ticket->set_hall($_POST['hall']);
      $ticket->set_date($_POST['date']);
      $ticket->set_price($_POST['price']);
      if($tick_cont->insert_T_data($ticket))
      {
        return true;
      }else{
        return false;
      }  
    }
    else
    {
        $errMsg="Please fill all fields";
        echo "Please fill all fields";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="ticket-add-form" action="temp_test.php" method="POST" >
        <label for="">seat</label>
        <input type="text" name="seat">
        <br><br>
        <label for="">hall</label>
        <input type="text" name="hall">
        <br><br>
        <label for="">date</label>
        <input type="text" name="date">
        <br><br>
        <label for="">price</label>
        <input type="text" name="price">
        <br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>