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
    
        $total= $engmrk + $hinmrk + $mathmrk + $scnmrk + $javamrk;
        $per = ($total*100) / 500;
     }

     if($per<=100 && $per>=85){
        $grade= " A ";
     }elseif($per<=84 && $per>=70){
        $grade= " B ";
     }else{
        $grade= " C ";
     }
?>
 <table> 
<tr>
      <th>Name</th>
      <th>Father's Name</th>
      <th>Mother's Name</th>
      <th>Roll Number</th>
      <th>Standard</th>
      <th>English Marks</th>
      <th>Hindi Marks</th>
      <th>Maths Marks</th>
      <th>Science Marks</th>
      <th>Java Marks</th>
      <th>Obtained Marks</th>
      <th>Percentage</th>
      <th>Grade</th>
</tr>
<tbody>
    <td><?php echo $name ?> </td>
    <td><?php echo $father ?> </td>
    <td><?php echo $mother ?> </td>
    <td><?php echo $roll ?> </td>
    <td><?php echo $class ?> </td>
    <td><?php echo $engmrk ?> </td>
    <td><?php echo $hinmrk ?> </td>
    <td><?php echo $mathmrk ?> </td>
    <td><?php echo $scnmrk ?> </td>
    <td><?php echo $javamrk ?> </td>
    <td><?php echo $total ?> </td>
    <td><?php echo "$per %" ?> </td>
    <td><?php echo $grade ?></td>
</tbody>
</table>
 
</body>
</html>