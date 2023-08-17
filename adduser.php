<?php

$uid=$_POST['uid'];
$uname=$_POST['uname'];
$uadd=$_POST['uadd'];
$ucity=$_POST['ucity'];
$uage=$_POST['uage'];
//$uid=$_GET['uid'];
//$uname=$_GET['uname'];
//$uadd=$_GET['uadd'];
//$ucity=$_GET['ucity'];
//$uage=$_GET['uage'];


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
  $s = "insert into users values(".$uid.", '".$uname."', '".$uadd."','".$ucity."',".$uage.")";
  echo "Query: ".$s;
  $rs=mysqli_query($conn,$s);
  if ($rs){
    echo "User entered successfully";
    echo "<br>";
  }else{
      echo "User ENtry failed!!";
    echo "<br>";
  }
  
  mysqli_close($conn);
  ?>
  </a href="http://localhost/mercedes/index.html" >HOME</a>