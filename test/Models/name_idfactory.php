<?php
include_once 'Movie_data.php';
include_once 'feedback.php';
include_once 'role.php';
include_once 'user.php';
class name_id_factroy{
public function create_user(){
return new  User;
}



public function create_movie(){
    return new  movie;

}



public function create_feedback(){
    return new feedback;

}


public function create_role(){
    return new Role;

}


}
?>