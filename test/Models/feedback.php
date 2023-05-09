<?php 
include_once 'name&id.php';

class feedback implements name_id 
{
    private $id;
    private $name;
    private $email;
    private $feedback;
    private $movie;

//---------setters--------//

   public function set_id($FeedId)
    {
      $this->id=$FeedId;
    }

    public function set_name($UserName)
    {
        $this->name=$UserName;
    }

    public function set_email($UserEmail)
    {
        $this->email=$UserEmail;
    }

    public function set_feedback($UserFeedback)
    {
        $this->feedback=$UserFeedback;
    }
    public function set_movie($MovieName)
    {
        $this->movie=$MovieName;
    }
//----------getters----------//
    public function get_id()
    {
      return $this->id;
    }
    public function get_name()
    {
      return $this->name ;
    }
    public function get_feedback()
    {
      return $this->feedback ;
    }
    public function get_email()
    {
      return $this->email;
    }
    public function get_movie()
    {
      return $this->movie;
    }
}

?>