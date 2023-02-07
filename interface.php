<!DOCTYPE html>
<html>
<body>

<?php
interface Operation {
  public function makeSum($a,$b);
}

class Num implements Operation {
  public function makeSum($a,$b) {
    echo "Meow <br>" ;
    echo $a+$b;
  }
}

$addition = new Num();
$addition->makeSum(3,4);
?>
 
</body>
</html>
