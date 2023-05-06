<?php 

class movie
{
    public $Movie_id;
    public $Movie_Title;
    public $Movie_Desc;
    public $Movie_Type;
//---------setters--------//

   public function set_Movieid($MovId)
    {
      $this->Movie_id=$MovId;
    }

    public function set_MovieTitle($MovTitle)
    {
        $this->Movie_Title=$MovTitle;
    }

    public function set_MovieDesc($MovDesc)
    {
        $this->Movie_Desc=$ema;
    }

    public function set_MovieType($MovType)
    {
        $this->$Movie_Type=$MovType;
    }
//----------getters----------//
    public function get_Movieid()
    {
      return $this->Movie_id;
    }
    public function get_MovieTitle()
    {
      return $this->Movie_Title ;
    }
    public function get_MovieDesc()
    {
      return $this->Movie_Desc ;
    }
    public function get_MovieType()
    {
      return $this->Movie_Type;
    }
}

?>