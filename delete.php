<?php
include 'createtable1.php';
$roll=$_GET['rn1'];
$query= "DELETE FROM StudentData WHERE rollnumber = '$roll'";
$data= mysqli_query($conn,$query);
if($data){
    echo "<script>alert('Delete Record Successfully')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=
    http://localhost:8088/training/marksheet2.php">
    <?php

} else{
    echo "Unable to delete record";
}
?>