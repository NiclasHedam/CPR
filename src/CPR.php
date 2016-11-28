<?php
namespace NiclasHedam;

class CPR{
    var $d1;
    var $d2;
    var $d3;
    var $d4;
    var $d5;
    var $d6;
    var $d7;
    var $d8;
    var $d9;
    var $d10;

  public function __construct($cpr){
      if(!is_string($cpr)){
          throw new \Exception("CPR should be a string");
      }
      if(strlen($cpr) !== 10){
          throw new \Exception("CPR should be 10 characters long");
      }
      $this->d1 = (int)substr($cpr, 0, 1);
      $this->d2 = (int)substr($cpr, 1, 1);
      $this->d3 = (int)substr($cpr, 2, 1);
      $this->d4 = (int)substr($cpr, 3, 1);
      $this->d5 = (int)substr($cpr, 4, 1);
      $this->d6 = (int)substr($cpr, 5, 1);
      $this->d7 = (int)substr($cpr, 6, 1);
      $this->d8 = (int)substr($cpr, 7, 1);
      $this->d9 = (int)substr($cpr, 8, 1);
      $this->d10 = (int)substr($cpr, 9, 1);
  }

  public function valid(){
      return
          (($this->d1 * 4) +
          ($this->d2 * 3) +
          ($this->d3 * 2) +
          ($this->d4 * 7) +
          ($this->d5 * 6) +
          ($this->d6 * 5) +
          ($this->d7 * 4) +
          ($this->d8 * 3) +
          ($this->d9 * 2) +
          ($this->d10 * 1))
       % 11 == 0;
  }

  public function isMale(){
      return $this->d10 % 2 == 1;
  }

  public function isFemale(){
      return $this->d10 % 2 == 0;
  }

  public function birthday(){
      return \DateTime::createFromFormat('!d/m/y', $this->d1.$this->d2 . '/' . $this->d3.$this->d4 . '/' . $this->d5.$this->d6);
  }
}
