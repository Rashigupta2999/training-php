<?php

if(isset($_POST['submit'])){  //if submit is set on post
   
   //  header("Location: http://localhost:8088/training/marksheet2.php");
     $name=$_POST['sname'];
     $father=$_POST['fname'];
     $mother=$_POST['mname'];
     $class=$_POST['class'];
     $engmrk=$_POST['eng'];
     $hinmrk=$_POST['hindi'];
     $mathmrk=$_POST['math'];
     $scnmrk=$_POST['science'];
     $javamrk=$_POST['java'];
     $dob=$_POST['dob'];
     echo $name;
}
 ?>
