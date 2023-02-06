<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  protected $color;
  private $brand;
  public function __construct($name, $color, $brand) {
    $this->name = $name;
    $this->color = $color; 
    $this->brand=$brand;
  }
  
    public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}. and the brand is {$this->brand}"; 
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    
    echo "Am I a fruit or a berry? "; 
  }
}

$strawberry = new Strawberry("Strawberry", "red", "fruit");
$strawberry->message();
$strawberry->intro();
?>
 
</body>
</html>
