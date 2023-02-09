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
<?php
  include 'createtable1.php';
  $rn = $_GET['rn'];  //get the value from variable and store in another variable
  $fn = $_GET['fn'];
  $mn = $_GET['mn'];  //get the value from variable
  $sn = $_GET['sn'];
  $cl = $_GET['cl'];  //get the value from variable
  $dob = $_GET['dob'];
  $en = $_GET['en'];  //get the value from variable
  $hn = $_GET['hn'];
  $math = $_GET['math'];  //get the value from variable
  $scn = $_GET['scn'];
  $jv = $_GET['jv'];  //get the value from variable

?>

    <h2 style="text-align:center">UPDATE STUDENT MARKSHEET FORM</h2>
<form method="GET">
      <h3>Enter your Name</h3>
      <input type="text" name="sname" value="<?php echo "$sn" ?>" placeholder="Student's name" id="sname1" required>
      <h3>Enter your Father's name</h3>
      <input type="text" name="fname" value="<?php echo "$fn" ?>"  placeholder="Father's name" id="fname1" required>
      <h3>Enter your Mother's name</h3>
      <input type="text" name="mname" value="<?php echo "$mn" ?>" placeholder="Mother's name" required>
      <h3>Enter your roll number</h3>
      <input type="number" name="roll" value="<?php echo $rn ?>" placeholder="Enter Roll number">
     <h3>Enter your Standard</h3>
      <input type="text" name="class" value="<?php echo "$cl" ?>" placeholder="Enter your Class" required>
      <h3>Enter your Date Of Birth</h3>
      <input type="date" name="dob" value="<?php echo "$dob" ?>"><br>
      <h3>Enter your English Marks</h3>
      <input type="number" name="eng" max= "100"  value="<?php echo "$en" ?>" placeholder="Enter your English Marks" required>
      <h3>Enter your Hindi Marks</h3>
      <input type="number" name="hindi" max= "100" value="<?php echo "$hn" ?>" placeholder="Enter your Hindi Marks" required>
      <h3>Enter your Math Marks</h3>
      <input type="number" name="math" max="100" value="<?php echo "$math" ?>" placeholder="Enter your Math Marks" required>
      <h3>Enter your Science Marks</h3>
      <input type="number" name="science" max="100" value="<?php echo "$scn" ?>" placeholder="Enter your Science Marks" required>
      <h3>Enter your Java Marks</h3>
      <input type="number" name="java" max="100" value="<?php echo "$jv" ?>" placeholder="Enter your Java Marks" required><br><br>
      <input type="submit" name="submit" value="Update" class="submit" >
      <input type="submit" name="cancel" value="Cancel" class="submit">
    
</form>   
<?php
   if($_GET['submit']){  // when clicked on submit button
         $roll= $_GET['roll'];  //get the new value of roll num through value of name field under input
         $sname= $_GET['sname'];
         $fname= $_GET['fname'];
         $mname= $_GET['mname'];
         $class= $_GET['class'];
         $dob= $_GET['dob'];
         $eng= $_GET['eng'];
         $hindi= $_GET['hindi'];
         $math= $_GET['math'];
         $science= $_GET['science'];
         $java= $_GET['java'];
  $query = "UPDATE StudentData SET rollnumber ='$roll', studentname ='$sname', fathername ='$fname', mothername ='$mname', class ='$class',
  DOB ='$dob', eng ='$eng', hindi ='$hindi', math ='$math', science ='$science', java ='$java' WHERE rollnumber = '$roll'";
  
  $data= mysqli_query($conn,$query);
  if($data){
    echo "<script>alert('update Record Successfully')</script>"; 
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=
    http://localhost:8088/training/marksheet2.php">
    <?php
  }else{
    echo "Failed to update";
  }
}
if($_GET['cancel']){
    
    header("Location:http://localhost:8088/training/marksheet2.php");
}
 ?>
</body>
</html>