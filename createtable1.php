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
// Create database
/*$sql = "CREATE DATABASE information";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}*/

//sql to create table
/*$sql = "CREATE TABLE StudentData (
  rollnumber int PRIMARY KEY AUTO_INCREMENT,
studentname VARCHAR(30) NOT NULL,
fathername VARCHAR(30) NOT NULL,
mothername VARCHAR(30) NOT NULL, 
class VARCHAR(10) NOT NULL,
DOB VARCHAR(15) NOT NULL,
eng int(10) NOT NULL,
hindi int(10) NOT NULL,
math int(10) NOT NULL,
science int(10) NOT NULL,
java int(10) NOT NULL,
obtained int(10) NOT NULL,
total int(10) NOT NULL,
percent int(10) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table StudentData created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();*/
  ?>