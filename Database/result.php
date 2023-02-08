<html>
<body>

<?php
    $servername = "localhost";
    $username = "root";
    $password = "mysql";
    $dbname = "information";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  /* $sql = "CREATE TABLE Operation (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstnum VARCHAR(30) NOT NULL,
        lastnum VARCHAR(30) NOT NULL,
        operand VARCHAR(5) NOT NULL,
        result VARCHAR(50)
        )";*/
     if(isset($_POST['submit'])){   //isset is to check whether submit button is working or not ,if we click on submit button then
            $no1=$_POST['num1'];
            $no2=$_POST['num2'];
            $oprnd=$_POST['operators'];
            
            if($oprnd == "+")
               echo $ans= $no1 + $no2;   
            else if($oprnd == "-")
            echo $ans= $no1 - $no2;
            else if($oprnd == "*")
            echo $ans= $no1 * $no2;
            else if($oprnd == "/")
            echo $ans= $no1 / $no2; 
        }
        
        $insert="INSERT INTO Operation(firstnum,lastnum,operand,result) 
        VALUES ('$no1','$no2','$oprnd','$ans')";

        if ($conn->query($insert) === TRUE) {
            echo "<br> New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
          
    
    ?>