<!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that is not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "Rashi Gupta") {
      $prefix = "Miss";
    } elseif ($name == "Shivansh Gupta") {
      $prefix = "Mr";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("Rashi Gupta");
echo "<br>";  
echo $class->prefixName("Shivansh Gupta");
?>
 
</body>
</html>
