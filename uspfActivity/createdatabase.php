<?php
//declarations..
$server="localhost";
$username="uspfstudent";
$password="1234567";

//sql connections...
$conn=new mysqli($server,$username,$password);
$CreateDBsql="create database studentdb";

if($conn->query($CreateDBsql)===true){
    echo "database create successfully!! :)";
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>