<?php 

class User
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $roleid;
//---------setters--------//
   public function set_name($nam)
    {
      $this->name=$nam;
    }

    public function set_passwd($pass)
    {
        $this->password=$pass;
    }

    public function set_email($ema)
    {
        $this->email=$ema;
    }

    public function set_role($Rid)
    {
        $this->roleid=$Rid;
    }
//----------getters----------//
    public function get_name()
    {
      return $this->name;
    }
    public function get_password()
    {
      return $this->password ;
    }
    public function get_email()
    {
      return $this->email ;
    }
    public function get_id()
    {
      return $this->id ;
    }
    public function get_role()
    {
      return $this->roleid;
    }
}

?>