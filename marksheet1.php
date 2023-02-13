<html>
    <body>
    <style>
        
     th,td{
        border:1px solid black;
        padding:8px;
        text-align: center;
    }
    table,th{
        border-collapse: collapse;
            }
    .cl{
         width:100%;
        text-align:center;
    }
    .contain{
        display:flex;
        gap:40px;

    }
    .con{
        display:flex;
        flex-direction:column;
        width:50%;
    }
    .h{
        padding-top:12px;
    }
    h3{
        margin:0;
        padding:17px;
    }
    
    </style>
<?php
    
include_once 'createtable1.php';


 function grade($perc){
    $grade = '_';

  if($perc>=90){
     $grade = 'A';
  }elseif($perc>=80 && $perc<=89){
     $grade = 'B';
  }elseif($perc>=60 && $perc<=79){
    $grade = 'C';
  }elseif($perc>=33 && $perc<=59){
    $grade = 'D';
  }else{
     $grade = 'F';
  }
 
    return $grade;
}

      if(isset($_POST['submit'])){  //if submit is set on post
          $name=$_POST['sname'];
          $father=$_POST['fname'];
          $mother=$_POST['mname'];
          $roll=$_POST['roll'];
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

        $grade = grade($per);


     }
  $result = "INSERT INTO StudentData (studentname, fathername, mothername,rollnumber,class,DOB,eng,hindi,math,science,java,obtained,total,percent,grade)
  VALUES ('$name', '$father', '$mother', '$roll', '$class', '$dob', '$engmrk', '$hinmrk','$mathmrk', '$scnmrk', '$javamrk','$obt' , '$ftotal', '$per','$grade')";
  
  if ($conn->query($result) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
  


?>
<div class="contain">
    <div class="con">
    <?php

/*echo "<h3>Name : $name</h3>";
echo "<h3>Father's Name :  $father</h3>";
echo "<h3>Mother's Name :  $mother</h3>"; ?>

</div>
<div class="con">
<?php
echo "<h3>Roll Number : $roll</h3>";
echo "<h3>Standard : $class</h3>";
echo "<h3>DOB : $dob</h3>";*/
?>
</div>
    </div>


<table class="cl"> 
<th><h3>Subject</h3></th>
<th><h3>Obtained Marks</h3></th>
<th><h3>Total Marks/Percentage</h3></th>
<th><h3>Grade</h3></th>

<tr>   
   <th>English</th>
   <td><?php echo $engmrk ?> </td>
   <td><?php echo $total ?> </td>
   <td><?php echo grade($per) ?> </td>

</tr>
    
<tr>
    <th>Hindi</th>
    <td><?php echo $hinmrk ?> </td>
    <td><?php echo $total ?> </td>
    <td><?php echo grade($per) ?> </td>
</tr>

    <tr>
      <th>Math</th>
      <td><?php echo $mathmrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo grade($per) ?> </td>
    </tr>
    <tr>
      <th>Science</th>
      <td><?php echo $scnmrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo grade($per) ?> </td>
    </tr>
    <tr>
      <th>Java</th>
      <td><?php echo $javamrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo grade($per) ?> </td>

    </tr>
    <tr>
        <th><h3 class="h">Result</h3></th>
        <td><?php echo " <b>Obtained Marks:  </b>" .$obt ?>
         <td><?php echo " <b>Total Marks: </b>" .$ftotal. " | <b>Percentage:  </b>" .$per. "%" ?> </td>  
        <td><?php echo " <b>Grade :  </b>" .grade($per) ?> </td>
    </tr>
   

</table>
 




</body>
</html>