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
}

// sql to create table
$sql = "CREATE TABLE StudentData (
studentname VARCHAR(30) NOT NULL,
fathername VARCHAR(30) NOT NULL,
mothername VARCHAR(30) NOT NULL,
rollnumber VARCHAR(30) PRIMARY KEY NOT NULL,
class VARCHAR(10) NOT NULL,
DOB VARCHAR(15) NOT NULL,
eng VARCHAR(10) NOT NULL,
hindi VARCHAR(10) NOT NULL,
math VARCHAR(10) NOT NULL,
science VARCHAR(10) NOT NULL,
java VARCHAR(10) NOT NULL,
obtained VARCHAR(10) NOT NULL,
total VARCHAR(10) NOT NULL,
percent VARCHAR(10) NOT NULL,
grade VARCHAR(10) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table StudentData created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  $conn->close();*/
  ?>