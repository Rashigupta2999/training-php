<!DOCTYPE html>
<html>
<body>

<?php
class greeting {
  public static function welcome($a) {
    echo sqrt($a);
  }
}

// Call static method
greeting::welcome(5);
?> 
 
</body>
</html>
