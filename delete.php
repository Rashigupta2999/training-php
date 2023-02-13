<?php
include 'createtable1.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

$query= "DELETE FROM StudentData WHERE rollnumber = $id";
$data= mysqli_query($conn,$query);  //connection variable
if($data){
    echo "<script>alert('Delete Record Successfully')</script>";
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=
    http://localhost:8088/training/marksheet2.php">
    <?php

} else{
    echo "Unable to delete record";
}
}
?>