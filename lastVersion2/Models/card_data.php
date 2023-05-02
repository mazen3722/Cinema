<?php
class ticketData{
  private $name;
  private $card_num;
  private $exp;
  private $cvv;

  //---------setters--------//
  public function set_name($n)
  {
    $this->name=$n;
  }

  public function set_card_num($s)
  {
      $this->card_num=$c;
  }

  public function set_exp($x)
  {
      $this->exp=$x;
  }

  public function set_cvv($v)
  {
      $this->cvv=$v;
  }
//----------getters----------//
  public function get_name()
  {
    return $this->name;
  }
  public function get_card_num()
  {
    return $this->card_num ;
  }
  public function get_exp()
  {
    return $this->exp ;
  }
  public function get_cvv()
  {
    return $this->cvv ;
  }
}
?>