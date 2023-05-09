<?php
require_once 'DBController.php';
require_once 'DatabaseInterface.php';
class DatabaseProxy extends DBController implements database {

public function openconnection(){

return Parent::openConnection();

}


public function closeconnection(){

return Parent::closeConnection();

}




}
?>