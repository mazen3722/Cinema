<?php
require_once '../../Models/user.php';
require_once 'DatabaseProxy.php';
require_once '../../Models/feedback.php';

class fbc{
    private $db;

    public function insert_feedback_data(feedback $c){
        $this->db=new DatabaseProxy;
        if( $this->db->openconnection())
        {
           $name=$c->get_name();
            $id=$c->get_id();
           $desc=$c->get_feedback();
         $email=$c->get_email();
        $movie=$c->get_movie();
         $qry=" insert into poll values('$name','$email','$desc','$movie',$id) ";
            return $this->db->insert($qry);
        }else{
            echo "Error in Database Connection";
                return false; 
        }
    
    }
    public function show_feedback($m){
        $this->db=new DatabaseProxy;
        if( $this->db->openconnection())
        {
            $qry="select feedback from poll where movie='$m' ";
            return $this->db->select($qry);
        }else{
            echo "Error in Database Connection";
                return false; 
        }
    }


public function FeedbackOnFilm($m){
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select name,feedback from poll where movid=$m ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }
}
public function show_feedadmin(){
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select * from poll ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }
}
public function delete_feedadmin($id){
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="delete  from poll where movid=$id";
        return $this->db->delete($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }
}


}

?>