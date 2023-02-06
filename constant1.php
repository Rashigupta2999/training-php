<!DOCTYPE html>
<html>
<body>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";  //create constant
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();

//WE CAN USE LIKE THIS ALSO

class Goodbye1 {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  }
  
  echo Goodbye1::LEAVING_MESSAGE;
  
?>

</body>
</html>
