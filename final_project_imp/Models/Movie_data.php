<?php 

class movie
{
    private $Movie_id;
    private $Movie_Title;
    private $Movie_Desc;
    private $Movie_Type;
    private $Movie_image;
//---------setters--------//

   public function set_Movieid($MovId)
    {
      $this->Movie_id=$MovId;
    }

    public function set_MovieTitle($MovTitle)
    {
        $this->Movie_Title=$MovTitle;
    }

    public function set_MovieDesc($d)
    {
        $this->Movie_Desc=$d;
    }

    public function set_MovieType($MovType)
    {
        $this->Movie_Type=$MovType;
    }
    public function set_Movieimage($d)
    {
        $this->Movie_image=$d;
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
    public function get_Movieimage()
    {
       return $this->Movie_image;
    }
}

?>