<?php
class ticketData{
  private $id;
  private $seat;
  private $hall;
  private $date;
  private $price;
  private $time;

  //---------setters--------//
  public function set_id($d)
  {
    $this->id=$d;
  }

  public function set_seat($s)
  {
      $this->seat=$s;
  }

  public function set_hall($h)
  {
      $this->hall=$h;
  }

  public function set_date($d)
  {
      $this->date=$d;
  }
  public function set_price($p)
  {
      $this->price=$p;
  }
  public function set_time($p)
  {
      $this->time=$p;
  }
//----------getters----------//
  public function get_date()
  {
    return $this->date;
  }
  public function get_seat()
  {
    return $this->seat ;
  }
  public function get_hall()
  {
    return $this->hall ;
  }
  public function get_id()
  {
    return $this->id ;
  }
  public function get_price()
  {
    return $this->price;
  }
  public function get_time()
  {
    return $this->time;
  }
}
?>