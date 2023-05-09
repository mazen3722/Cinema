<?php
interface database{
   public function openConnection(); 
    public function closeConnection();
     public function select($qry);
     public function insert($qry);
     public function delete($qry);
}
?>