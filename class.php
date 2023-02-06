<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function set_color($color){
    $this->color = $color;
  }
  function get_name() {
    return $this->name;
    }
 function get_color(){
    return $this->color;

 }
}

$apple = new Fruit();  //create object 
//$banana = new Fruit();  //create object
$apple->set_name('Apple');
$apple->set_color('Red');
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
var_dump($apple instanceof Fruit);

?>
 
</body>
</html>
