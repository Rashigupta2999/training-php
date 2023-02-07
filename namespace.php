<?php
namespace Html;   //when many class of same namespace used at the same time use namespace instead of html/qualifier
include "namespacefile.php";
use HTML\Table as T;  //Give alias to Table 
$table = new T();
$table->title = "My Desk";    //define value of variable
$table->numRows = 5;

$row = new Row();
$row->numCells = 3;
$row->numRows = 5;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>
