<html>
    <body>
<a href='newdata.php' style="padding:4px">Add New</a><br><br>

	<table border="1">
			<tr>
            <th>Roll number</th>
            <th>Name</th>
            <th>Father's Name</th>
            <th>Mother's Name</th>
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
        $id= $result['rollnumber'];
    echo "
         <tr>
         <td>".$result['rollnumber']."</td>
         <td>".$result['studentname']."</td>
         <td>".$result['fathername']."</td>
         <td>".$result['mothername']."</td>
         <td>".$result['class']."</td>
         <td>".$result['DOB']."</td>
         <td>".$result['eng']."</td>
         <td>".$result['hindi']."</td>
         <td>".$result['math']."</td>
         <td>".$result['science']."</td>
         <td>".$result['java']."</td>
         <td><a href='edit.php?updateid=".$id."'>Edit/Update</td>
         <td><a href='delete.php?deleteid=".$id."'>Delete</td> 
         </tr> 
         ";
         
    }
}
else{
    echo die(mysqli_error($conn));
}

?>

	

</body>
</html>