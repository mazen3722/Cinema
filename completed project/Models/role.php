<?php 
include_once 'name&id.php';
class Role implements name_id
{
    private $id;
    private $name;

    public function get_name()
    {
      return $this->name;
    }
    public function get_id()
    {
      return $this->id ;
    }
    public function set_name($x)
    {
      $this->name=$x;
    }
    public function set_id($x)
    {
       $this->id =$x;
    }
}

?>