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
    }
   </style>  
<body>
    <h2 style="text-align:center">STUDENT MARKSHEET FORM</h2>
<form method="post" action="marksheet.php">
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
      <h3>Enter your English Marks</h3>
      <input type="number" name="eng" placeholder="Enter your English Marks" required>
      <h3>Enter your Hindi Marks</h3>
      <input type="number" name="hindi" placeholder="Enter your Hindi Marks" required>
      <h3>Enter your Math Marks</h3>
      <input type="number" name="math" placeholder="Enter your Math Marks" required>
      <h3>Enter your Science Marks</h3>
      <input type="number" name="science" placeholder="Enter your Science Marks" required>
      <h3>Enter your Java Marks</h3>
      <input type="number" name="java" placeholder="Enter your Java Marks" required><br><br>
      <input type="submit" name="submit" class="submit" >
    
</form>   
   
</body>
</html>