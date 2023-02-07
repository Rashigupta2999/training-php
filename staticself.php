<?php
  class Fruits{
    public static function Name($name){
          echo $name;
    }
    public function __construct(){
        self::Name("Apple");
    }
  }
new Fruits();
?>