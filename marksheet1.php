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
    .green{
        background-color:lightgreen;
    }
    .orange{
        background-color:orange;
    }
    .yellow{
        background-color:yellow;
    }
    .pink{
        background-color:lightpink;
    }
    .grey{
        background-color:lightgrey;
    }
    .red{
        background-color:red;
    }

    </style>
<?php
    
        function get_grade($marks){
         
            $grade = 'F';
            echo '<span class="red"</span>';

            if($marks<=100 && $marks>=95){
                $grade = " A+ ";
                echo '<span class="green"</span>';
             }elseif($marks<=94 && $marks>=85){
                $grade = " A ";
                echo '<span class="green"</span>';
             }elseif($marks<=84 && $marks>=75){
                $grade = " B ";
                echo '<span class="orange"</span>';
             }elseif($marks<=74 && $marks>=65){
                $grade = " C ";
                echo '<span class="yellow"</span>';
             }elseif($marks<=64 && $marks>=55){
                $grade = " D ";
                echo '<span class="pink"</span>';
             }elseif($marks<=54 && $marks>=45){
                 $grade = " E ";
                 echo '<span class="grey"</span>';
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
   <td><?php echo get_grade($engmrk); ?> </td>

</tr>
    
<tr>
    <th>Hindi</th>
    <td><?php echo $hinmrk ?> </td>
    <td><?php echo $total ?> </td>
    <td><?php echo get_grade($hinmrk); ?> </td>
</tr>

    <tr>
      <th>Math</th>
      <td><?php echo $mathmrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo get_grade($mathmrk); ?> </td>
    </tr>
    <tr>
      <th>Science</th>
      <td><?php echo $scnmrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo get_grade($scnmrk); ?> </td>
    </tr>
    <tr>
      <th>Java</th>
      <td><?php echo $javamrk ?> </td>
      <td><?php echo $total ?> </td>
      <td><?php echo get_grade($javamrk) ?> </td>

    </tr>
    <tr>
        <th><h3 class="h">Result</h3></th>
        <td><?php echo " <b>Obtained Marks:  </b>" .$obt ?>
         <td><?php echo " <b>Total Marks: </b>" .$ftotal. " | <b>Percentage:  </b>" .$per. "%" ?> </td>  
        <td><?php echo " <b>Grade :  </b>" .get_grade($per) ?> </td>
    </tr>
   

</table>
 
</body>
</html>