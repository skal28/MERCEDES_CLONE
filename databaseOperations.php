<?php

createdatabase();
function displayRecords(){
  $servername = "localhost";
$username = "root";
$password = "India@123";
$database = "Firstdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
echo "Connected successfully";
echo "<br>";

//$sql="CREATE DATABASE Firstdb";
//$rslt=mysqli_query($conn,$sql);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  //(d) Create a display function to print all the records after each above 
  $s = "Select * from Student";
  $rs=mysqli_query($conn,$s);
  if ($rs->num_rows > 0) {
    // output data of each row
    while($row = $rs->fetch_assoc()) {
      echo "Enrolment No: " . $row["Enrollment_No"]. " - Name: " . $row["SName"]. " -  Age: " . $row["SAge"]. " -  Course: " . $row["Course"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  mysqli_close($conn);
}

function createDatabase(){


$servername = "localhost";
$username = "root";
$password = "India@123";
$database = "mercedes";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
echo "Connected successfully";
echo "<br>";

// Create a database Firstdb in mysql from php and then create a table Student(Enrollment_no, Name, Age, Course) and perform following operation.
//$sql="CREATE DATABASE Firstdb";
//$rslt=mysqli_query($conn,$sql);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql="CREATE TABLE car_details(sno integer NOT NULL,
mname varchar(20) NOT NULL,
capacity float(5,2) NOT NULL, 
seats integer NOT NULL, 
price float(10,2) NOT NULL,
fuel_type varchar(20) NOT NULL,
PRIMARY KEY (sno))";
$rslt=mysqli_query($conn,$sql);

if ($rslt){
  echo "Table created successfully";
  echo "<br>";
}else{
    echo "Table creation failed!!";
  echo "<br>";
}

mysqli_close($conn);

}
?>