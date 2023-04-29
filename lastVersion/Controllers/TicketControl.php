<?php
require_once '../../Models/user.php';
require_once 'DBController.php';
require_once '../../Models/ticket_data.php';

class ticketC {

   protected $db;

public function show_T_data()
{
    $this->db=new DBController;
    if( $this->db->openConnection())
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
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
       $seat=$c->get_seat();
       $hall=$c->get_hall();
       $date=$c->get_date();
       $price=$c->get_price();
        $qry="insert  into ticket_data values('','$seat','$hall',' $date','$price',1) ";
        return $this->db->insert($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
 public function delete_T_data($num)
{
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="delete  from ticket_data where id = $num";
        return $this->db->delete($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }

}

?>