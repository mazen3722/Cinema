<?php
require_once '../../Models/user.php';
require_once 'DBController.php';
require_once '../../Models/card_data.php';
class cardControl{
    private $db;

    function __construct(){
    }
   
 public function insert_c_data(card_data $c){
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
       $name=$c->get_name();
       $num=$c->get_card_num();
       $date=$c->get_exp();
       $cvv=$c->get_cvv();
        $qry=" insert  into payment values('$name',$num,'$date',$cvv) ";
        return $this->db->insert($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

}


public function show_c_data(){
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="select * from payment ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }
}


// public function delete_c_data(){
//     $this->db=new DBController;
//     if( $this->db->openConnection())
//     {
//         $qry="delete  from payment where id = $num";
//         return $this->db->delete($qry);
//     }else{
//         echo "Error in Database Connection";
//             return false; 
//     }

//  }


}

?>