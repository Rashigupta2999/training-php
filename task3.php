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
    <h2 style="text-align:center">STUDENT MARKSHEET FORM</h2>
<form method="post" action="marksheet1.php">
      <h3>Enter your Name</h3>
      <input type="text" name="sname"  placeholder="Student's name" required>
      <h3>Enter your Father's name</h3>
      <input type="text" name="fname"  placeholder="Father's name" required>
      <h3>Enter your roll number</h3>
      <input type="number" name="roll" placeholder="Enter Roll number" required>
      <h3>Enter your Mother's name</h3>
      <input type="text" name="mname" placeholder="Mother's name" required>
     <h3>Enter your Standard</h3>
      <input type="text" name="class" placeholder="Enter your Class" required>
      <h3>Enter your Date Of Birth</h3>
      <input type="date" name="dob"><br>
      <h3>Enter your English Marks</h3>
      <input type="number" name="eng" max= "100"  placeholder="Enter your English Marks" required>
      <h3>Enter your Hindi Marks</h3>
      <input type="number" name="hindi" max= "100" placeholder="Enter your Hindi Marks" required>
      <h3>Enter your Math Marks</h3>
      <input type="number" name="math" max="100" placeholder="Enter your Math Marks" required>
      <h3>Enter your Science Marks</h3>
      <input type="number" name="science" max="100" placeholder="Enter your Science Marks" required>
      <h3>Enter your Java Marks</h3>
      <input type="number" name="java" max="100" placeholder="Enter your Java Marks" required><br><br>
      <input type="submit" name="submit" class="submit" >
    
</form>   
   
</body>
</html>