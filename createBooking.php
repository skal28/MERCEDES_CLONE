<?php

//$uid=$_POST['uid'];
//$sid=$_POST['sid'];
//$sno=$_POST['sno'];
$uid=$_GET['uid'];
$sid=$_GET['sid'];
$sno=$_GET['sno'];
$bid = rand();


$servername = "localhost";
$username = "root";
$password = "India@123";
$database = "mercedes";

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
  $s = "insert into booking values(".$bid.", ".$sno.", ".$uid.",".$sid.", now())";
  echo "Query: ".$s;
  $rs=mysqli_query($conn,$s);
  if ($rs){
    echo "Booking successfully";
    echo "<br>";
  }else{
      echo "Booking failed!!";
    echo "<br>";
  }
  
  mysqli_close($conn);
  $newURL = "http://localhost/mercedes/index.html";
  header('Location: '.$newURL);
  ?>
  