<?php
require_once '../../Models/user.php';
require_once 'DatabaseProxy.php';
require_once '../../Models/ticket_data.php';

class ticketC {

   protected $db;

public function show_T_data()
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select * from ticket_data ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }

 public function insert_T_data(ticketData $c)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
       $seat=$c->get_seat();//
       $hall=$c->get_hall();
       $date=$c->get_date();//
       $movie=$c->get_movie();//
       $id=$c->get_clientid();//
       $food=$c->get_food();
        $qry="insert  into ticket_data values('','$seat',' $hall','$date',$id,'$movie','$food') ";
        return $this->db->insert($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
 public function delete_T_data($num)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="delete  from ticket_data where id = $num";
        return $this->db->delete($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }


public function show_T_main($a)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select Seat_Number , Hall_Number,movie,food from ticket_data where client_id=$a";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
//  public function show_taken_seats($a)
// {
//     $this->db=new DatabaseProxy;
//     if( $this->db->openconnection())
//     {
//         $qry="select Seat_Number from ticket_data where client_id=$a";
//         return $this->db->select($qry);
//     }else{
//         echo "Error in Database taken_seats";
//             return false; 
//     }

//  }
}
?>