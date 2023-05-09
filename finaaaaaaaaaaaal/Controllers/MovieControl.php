<?php
require_once '../../Models/user.php';
require_once 'DatabaseProxy.php';
require_once '../../Models/Movie_data.php';

class MovieC {

   protected $db;

public function show_Movie_data()
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select * from movie ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }

 public function insert_Movie_data(movie $c)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
    //    $Movie_id=$c->get_Movieid();
       $Movie_Title=$c->get_name();
       $Movie_Desc=$c->get_MovieDesc();
       $Movie_Type=$c->get_MovieType();
       $image=$c->get_Movieimage();
        $qry="insert into movie values('','$Movie_Title',' $Movie_Desc','$Movie_Type','$image') ";
        return $this->db->insert($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
 public function delete_Movie_data($num)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="delete from movie where Movie_id = $num";
        return $this->db->delete($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }


//  function searchFilm($Movie_Title) {
//     $this->db=new DatabaseProxy;
//     if( $this->db->openconnection())
//     {
//         $qry="select Movie_Title , Movie_Type , Movie_Desc from movie where Movie_Title like '%search%' OR  description like '%search%'"; 
       
//          return $this->db->Select($qry);
//         }else{
//     echo "Error in Database Connection";
//         return false; 
//        } 

// }


public function modify_desc($t,$r){
    $this->db=new DatabaseProxy;
     if( $this->db->openconnection())
    {
        $qry="update movie set Movie_Desc='$t' where Movie_id=$r";  
        $result=$this->db->insert($qry);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}

public function modify_Type($t,$r){
    $this->db=new DatabaseProxy;
     if( $this->db->openconnection())
    {
        $qry="update movie set Movie_Type='$t' where Movie_id=$r";  
        $result=$this->db->insert($qry);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}

public function show_Movie_radio()
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select Movie_Title from movie ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
 public function show_Movie_id($m)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select Movie_id from movie where Movie_title='$m' ";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
 public function show_Movie_search($m)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select * from movie where Movie_Title like '%$m%' or Movie_Type like '%$m%'";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
//  public function watch_list($m)//insert in it private_watch_list
// {
//     $this->db=new DatabaseProxy;
//     if( $this->db->openconnection())
//     {
//         $qry="select * from watch_list where movid=$m";
//         return $this->db->select($qry);
//     }else{
//         echo "Error in Database Connection";
//             return false; 
//     }

//  }
 public function insert_watch_list($userid,$movid)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="insert into watch_list values($userid,$movid)";
        $result=$this->db->insert($qry);
        if($result){
            return true;
        }else{
            return false;
        }
    }

 }
 public function delete_watch_list($movieid)//return array with filmas id 
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="delete from watch_list where movieid=$movieid";
        return $this->db->delete($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
  public function showfilmbyid($d){
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
    $qry="select * from movie join watch_list on Movie_id=movieid where userid=$d ";
    return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }
 }
 public function show_userid($name)
{
    $this->db=new DatabaseProxy;
    if( $this->db->openconnection())
    {
        $qry="select id from user where name='$name'";
        return $this->db->select($qry);
    }else{
        echo "Error in Database Connection";
            return false; 
    }

 }
}
?>