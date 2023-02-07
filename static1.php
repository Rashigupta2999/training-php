<!DOCTYPE html>
<html>
<body>

<?php
class domain {
    public static $b=20;
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
 
  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();  //refers parent class properties and use parent to get parent class method into child class ,prent method must be protected or public only
  }	
}
echo domain::$b; //get static property 
echo "<br>";

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>
 
</body>
</html>
