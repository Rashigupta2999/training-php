<html>
    <body>
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
            </tr>
		   
		
	
   <?php
include 'createtable1.php';
include 'style.php';

$query= "select * from StudentData where rollnumber= '$rn'";
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
         
         
         </tr> 
         ";
         
    }
}
else{
    echo "No record found";
}
?>
</body>
</html>