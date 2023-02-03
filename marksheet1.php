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

     }
     if($engmrk<=100 && $engmrk>=95){
        $grade1 = " A+ ";
     }elseif($engmrk<=94 && $engmrk>=85){
        $grade1 = " A ";
     }elseif($engmrk>=70 && $engmrk<=84){
        $grade1 = " B ";
     }else{
        $grade1 = " C ";
     }

     if($hinmrk<=100 && $hinmrk>=95){
        $grade2 = " A+ ";
     }elseif($hinmrk<=94 && $hinmrk>=85){
        $grade2 = " A ";
     }elseif($hinmrk>=70 && $hinmrk<=84){
        $grade2 = " B ";
     }else{
        $grade2 = " C ";
     }

     if($mathmrk<=100 && $mathmrk>=95){
        $grade3 = " A+ ";
     }elseif($mathmrk<=94 && $mathmrk>=85){
        $grade3 = " A ";
     }elseif($mathmrk>=70 && $mathmrk<=84){
        $grade3 = " B ";
     }else{
        $grade3 = " C ";
     }

     if($scnmrk<=100 && $scnmrk>=95){
        $grade4 = " A+ ";
     }elseif($scnmrk<=94 && $scnmrk>=85){
        $grade4 = " A ";
     }elseif($scnmrk>=70 && $scnmrk<=84){
        $grade4 = " B ";
     }else{
        $grade4 = " C ";
     }

     if($javamrk<=100 && $javamrk>=95){
        $grade5 = " A+ ";
     }elseif($javamrk<=94 && $javamrk>=85){
        $grade5 = " A ";
     }elseif($javamrk>=70 && $javamrk<=84){
        $grade5 = " B ";
     }else{
        $grade5 = " C ";
     }

    if($per<=100 && $per>=95){
        $grade= " A+ ";
     }elseif($per<=94 && $per>=80){
        $grade= " A ";
     }elseif($per<=79 && $per>=65){
        $grade= " B+ ";
     }elseif($per<=64 && $per>=55){
        $grade= " B ";
     }else{
        $grade = " C ";
     }

     
?>
<div class="contain">
    <div class="con">
    <?php

echo "<h3>Name : $name</h3>";
echo "<h3>Father's Name :  $father</h3>";
echo "<h3>Mother's Name :  $mother</h3>"; ?>

</div>
<div class="con">
<?php
echo "<h3>Roll Number : $roll</h3>";
echo "<h3>Standard : $class</h3>";
echo "<h3>DOB : $dob</h3>";
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
   <td><?php echo $grade1 ?> </td>

</tr>
    
<tr>
    <th>Hindi</th>
    <td><?php echo $hinmrk ?> </td>
    <td><?php echo $total ?> </td>
    <td><?php echo $grade2 ?> </td>
</tr>

    <tr>
      <th>Math</th>
      <td><?php echo $mathmrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo $grade3 ?> </td>
    </tr>
    <tr>
      <th>Science</th>
      <td><?php echo $scnmrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo $grade4 ?> </td>
    </tr>
    <tr>
      <th>Java</th>
      <td><?php echo $javamrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo $grade5 ?> </td>

    </tr>
    <tr>
        <th><h3 class="h">Result</h3></th>
        <td><?php echo " <b>Obtained Marks:  </b>" .$obt ?>
         <td><?php echo " <b>Total Marks: </b>" .$ftotal. " | <b>Percentage:  </b>" .$per. "%" ?> </td>  
        <td><?php echo " <b>Grade :  </b>" .$grade ?> </td>
    </tr>
   

</table>
 
</body>
</html>