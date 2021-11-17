<?php
//declarations..
$server="localhost";
$database="studentdb";
$username="uspfstudent";
$password="1234567";

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);


// sql to create table
$sql = "CREATE TABLE studenttable (
Studentid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Family_name VARCHAR(30),
First_name VARCHAR(30),
Middle_name VARCHAR(50),
Email_address VARCHAR(50),
Home_address VARCHAR(50),
Mobile_number VARCHAR(50),
Course VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
  echo "Student table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

?>

?>