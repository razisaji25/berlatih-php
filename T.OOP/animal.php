<?php
require ('./Frog.php');
require ('./Ape.php');


  class Animal {
    var $legs= 2;
    var $cold_blooded= "false";
    public $name;
    public function __construct($name) 
    {
      $this->name= $name;
    }
  }
  
?>