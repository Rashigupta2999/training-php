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
  $id= $_GET['updateid'];
  $sql= "Select * from StudentData where rollnumber= $id"; 
  $result= mysqli_query($conn,$sql);
  $row= mysqli_fetch_assoc($result);
  $roll1= $row['rollnumber'];  //get the new value of roll num through value of name field under input
  $sname= $row['studentname'];
  $fname= $row['fathername'];
  $mname= $row['mothername'];
  $class= $row['class'];
  $dob= $row['DOB'];
  $eng= $row['eng'];
  $hindi= $row['hindi'];
  $math= $row['math'];
  $science= $row['science'];
  $java= $row['java'];

  if($_POST['submit']){  // when clicked on submit button
    $roll= $_POST['roll'];  //get the new value of roll num through value of name field under input
    $sname= $_POST['sname'];
    $fname= $_POST['fname'];
    $mname= $_POST['mname'];
    $class= $_POST['class'];
    $dob= $_POST['dob'];
    $eng= $_POST['eng'];
    $hindi= $_POST['hindi'];
    $math= $_POST['math'];
    $science= $_POST['science'];
    $java= $_POST['java'];
$query = "UPDATE StudentData SET rollnumber ='$id', studentname ='$sname', fathername ='$fname', mothername ='$mname', class ='$class',
DOB ='$dob', eng ='$eng', hindi ='$hindi', math ='$math', science ='$science', java ='$java' WHERE rollnumber = '$id'";

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
if($_POST['cancel']){

header("Location:http://localhost:8088/training/marksheet2.php");
}
 
?>

    <h2 style="text-align:center">UPDATE STUDENT MARKSHEET FORM</h2>
<form method="POST">
      <h3>Enter your Name</h3>
      <input type="text" name="sname" value="<?php echo $sname; ?>" placeholder="Student's name">
      <h3>Enter your Father's name</h3>
      <input type="text" name="fname" value="<?php echo "$fname"?>"  placeholder="Father's name">
      <h3>Enter your Mother's name</h3>
      <input type="text" name="mname" value="<?php echo "$mname" ?>" placeholder="Mother's name">
     
      <input type="hidden" name="roll" value="<?php echo $roll1 ?>" placeholder="Enter Roll number" >
     <h3>Enter your Standard</h3>
      <input type="text" name="class" value="<?php echo "$class" ?>" placeholder="Enter your Class">
      <h3>Enter your Date Of Birth</h3>
      <input type="date" name="dob" value="<?php echo "$dob" ?>"><br>
      <h3>Enter your English Marks</h3>
      <input type="number" name="eng" max= "100" value="<?php echo "$eng" ?>" placeholder="Enter your English Marks" >
      <h3>Enter your Hindi Marks</h3>
      <input type="number" name="hindi" max= "100" value="<?php echo "$hindi" ?>" placeholder="Enter your Hindi Marks" >
      <h3>Enter your Math Marks</h3>
      <input type="number" name="math" max="100" value="<?php echo "$math" ?>" placeholder="Enter your Math Marks" >
      <h3>Enter your Science Marks</h3>
      <input type="number" name="science" max="100" value="<?php echo "$science" ?>" placeholder="Enter your Science Marks" >
      <h3>Enter your Java Marks</h3>
      <input type="number" name="java" max="100" id="mname1" value="<?php echo "$java" ?>" placeholder="Enter your Java Marks" ><br><br>
      <input type="submit" name="submit" value="Update" class="submit" >
      <input type="submit" name="cancel" value="Cancel" class="submit">
    
</form>   

</body>
</html>