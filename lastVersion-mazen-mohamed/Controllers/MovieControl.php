<?php
require_once '../../Models/user.php';
require_once 'DBController.php';
require_once '../../Models/Movie_data.php';

class MovieC {

   protected $db;

public function show_Movie_data()
{
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="select * from movie ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }

 public function insert_Movie_data(MovieData $c)
{
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
       $Movie_id=$c->get_Movieid();
       $Movie_Title=$c->get_MovieTitle();
       $Movie_Desc=$c->get_MovieDesc();
       $Movie_Type=$c->get_MovieType();
        $qry="insert  into movie values('','$Movie_id','$Movie_Title',' $Movie_Desc','$Movie_Type',1) ";
        return $this->db->insert($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
 public function delete_Movie_data($num)
{
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="delete from movie where Movie_id = $num";
        return $this->db->delete($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }


 function searchFilm($Movie_Title) {
    $this->db=new DBController;
    if( $this->db->openConnection())
    {
        $qry="select Movie_Title , Movie_Type , Movie_Desc from movie where Movie_Title like '%search%' OR  description like '%search%'"; 
       
         return $this->db->Select($qry);
        }else{
    echo "Error in Database Connection";
        return false; 
       } 

}
}

?>