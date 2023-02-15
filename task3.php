<?php
include 'createtable1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    input{
        width:450px;
    }
    .submit{
        width:100px;
        background-color:lightgreen;
        border:1px solid green;
        border-radius:2px 2px 2px 2px;
        height:30px;
    }
   </style>  
<body>

    <h2 style="text-align:center">STUDENT MARKSHEET FORM</h2>
<form method="post" id="form">
     
      <h3>Enter your Name</h3>
      <input type="text" name="sname"  placeholder="Student's name" id= "n1"required>
      <h3>Enter your Father's name</h3>
      <input type="text" name="fname"  placeholder="Father's name" required>
      <h3>Enter your Mother's name</h3>
      <input type="text" name="mname" placeholder="Mother's name" required>
     <h3>Enter your Standard</h3>
      <input type="text" name="class" placeholder="Enter your Class" required>
      <h3>Enter your Date Of Birth</h3>
      <input type="date" name="dob"><br>
      <h3>Enter your English Marks</h3>
      <input type="number" name="eng" max= "100"  placeholder="Enter your English Marks" required>
      <h3>Enter your Hindi Marks</h3>
      <input type="number" name="hindi" max= "100" placeholder="Enter your Hindi Marks" required>
      <h3>Enter your Math Marks</h3>
      <input type="number" name="math" max="100" placeholder="Enter your Math Marks" required>
      <h3>Enter your Science Marks</h3>
      <input type="number" name="science" max="100" placeholder="Enter your Science Marks" required>
      <h3>Enter your Java Marks</h3>
      <input type="number" name="java" max="100" placeholder="Enter your Java Marks" required><br><br>
      <input type="submit" name="submit" class="submit" >
      
</form>
    
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
  
  
      $obt= $engmrk + $hinmrk + $mathmrk + $scnmrk + $javamrk;
      $per = ($obt*100) / 500;
      $total = 100;
      $ftotal= $total * 5;

}
     $result = "INSERT INTO StudentData (studentname, fathername, mothername,class,DOB,eng,hindi,math,science,java,obtained,total,percent)
    VALUES ('$name', '$father', '$mother', '$class', '$dob', '$engmrk', '$hinmrk','$mathmrk', '$scnmrk', '$javamrk','$obt' , '$ftotal', '$per')";
    
    if ($conn->query($result) == TRUE) {
      echo "";
    } else {
      echo "";
    }
if(isset($_POST['submit'])){  //if submit is set on post
       header("Location: http://localhost:8088/training/marksheet2.php");
   exit();

}

?>

</body>
</html>