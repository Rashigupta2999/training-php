<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  final public function intro() {
    //cho "Hiii";
  }
}

class Strawberry extends Fruit {
  // will result in error because method is final
  public function intro() {
  }
}
?>
 
</body>
</html>
