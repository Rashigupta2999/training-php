<html>
    <body>
<a href='newdata.php' style="padding:4px">Add New</a><br><br>
	<table border="1">
			<tr>
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
            <th colspan=3>Operation</th>
            </tr>
		   
		
	
   <?php
include 'createtable1.php';
include 'style.php';

$query= "select * from StudentData";
$data= mysqli_query($conn,$query);   // store all data which is under database
$total= mysqli_num_rows($data);  //check num of rows in database
//echo $total;


if($total!=0){
    //$result = mysqli_fetch_assoc($data);  //start fetching data
    while($result = mysqli_fetch_assoc($data)){
    echo "
         <tr>
         <td>".$result['studentname']."</td>
         <td>".$result['fathername']."</td>
         <td>".$result['mothername']."</td>
         <td>".$result['rollnumber']."</td>
         <td>".$result['class']."</td>
         <td>".$result['DOB']."</td>
         <td>".$result['eng']."</td>
         <td>".$result['hindi']."</td>
         <td>".$result['math']."</td>
         <td>".$result['science']."</td>
         <td>".$result['java']."</td>
         <td><a href='edit.php?rn=$result[rollnumber]&fn=$result[fathername]&mn=$result[mothername]&sn=$result[studentname]&cl=$result[class]& dob=$result[DOB]& en=$result[eng]&hn=$result[hindi]&math=$result[math]&scn=$result[science]&jv=$result[java]'>Edit/Update</td>
         <td><a href='delete.php?rn1=$result[rollnumber]'>Delete</td> 
         </tr> 
         ";
         
    }
}
else{
    echo "No record found";
}

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
    
  //  header("Location: http://localhost:8088/training/marksheet2.php");
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
    echo "";
  } else {
    echo "";
  }
    $conn->close();
 
?>

	

</body>
</html>