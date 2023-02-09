<?php
include 'style.php';
session_start();
 //if submit is set on post
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

?>
<div>
		<table>
			<thead>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
            <th>Roll number</th>
            <th>Class</th>
            <th>DOB</th>
            <th>English</th>
            <th>Hindi</th>
            <th>Math</th>
            <th>Science</th>
            <th>Java</th>
            

			</thead>
			<tbody>
             <tr>
               
                <td><?php echo $_SESSION['name'] ?></td>
                <td><?php echo $father ?></td>
                <td><?php echo $mother ?></td>
                <td><?php echo $roll ?></td>
                <td><?php echo $class ?></td>
                <td><?php echo $dob ?></td>
                <td><?php echo $engmrk ?></td>
                <td><?php echo $hinmrk ?></td>
                <td><?php echo $mathmrk ?></td>
                <td><?php echo $scnmrk ?></td>
                <td><?php echo $javamrk ?></td>

				
			</tbody>
		</table>
	</div>
