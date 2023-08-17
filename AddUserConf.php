<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project 2</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<body>

    <header class="header-about">
        <!-- addign nav bar -----
    in nav bar main img and list has been added -->
        <nav >
            <!-- main img  -->
            <a href="index.html" target="_blank"><img class="mainimg" src="./img/logo-mb-1.jpg" alt=""></a>

            <!-- nav items -->
            <div class="navitem" id="navitem">
                <!-- closing bar for navitem -->
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bibi-x"
                    viewBox="0 0 16 16" onclick="hidemenu()">
                    <path
                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                </svg>
                <ul>
                    <li><a href="index.html">Home</a> </li>
                    <li><a href="index-vehicles.html">Vehicles</a> </li>
                    <li><a href="index -about-us.html">About</a> </li>
                    <li><a href="index-blog.html">Blog</a> </li>
                    <li><a href="index-contact.html">contact</a> </li>
                </ul>
            </div>
            <!-- menu opening  bar for navitem -->
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bibi-list"
                viewBox="0 0 16 16" onclick="showemenu()">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </nav>
            
    </header>
<section class="hnji">
    <main >

    <?php


$uname=$_POST['fname']." ".$_POST['lname'];
$uadd=$_POST['add'];
$ucity=$_POST['country'];
$uage=$_POST['age'];
//$uid=$_GET['uid'];
//$uname=$_GET['uname'];
//$uadd=$_GET['uadd'];
//$ucity=$_GET['ucity'];
//$uage=$_GET['uage'];

$uid=rand(1000,9990);
$servername = "localhost";
$username = "root";
$password = "India@123";
$database = "mercedes";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
//echo "Connected successfully";
//echo "<br>";

//$sql="CREATE DATABASE Firstdb";
//$rslt=mysqli_query($conn,$sql);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  //(d) Create a display function to print all the records after each above 
  $s = "insert into users values(".$uid.", '".$uname."', '".$uadd."','".$ucity."',".$uage.")";
  //echo "Query: ".$s;
  $rs=mysqli_query($conn,$s);
  
  if ($rs){
    echo "<center><h3><font face=arial color=green>User entered successfully!! <br> User ID: ".$uid."</font>";
    echo "<br>";
  }else{
      echo "<font color=red>User ENtry failed!!</font></center>";
    echo "<br>";
  }
  
  mysqli_close($conn);
  ?>
  
    </main>
    <!-- about -us -->
    <footer>
        <div class="footer-row">
            <div class="footer-col_1">
                <h3>Kalptaru Inter College Jitholi</h3>
                <p class="col_1-p">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eligendi ipsum corporis. Omnis, reprehenderit natus incidunt accusantium tempora molestias repellendus fuga repellat adipisci nisi tenetur vel laudantium labore quaerat provident dolore voluptatum beatae sint eveniet sapiente placeat? Quaerat, voluptates aliquam?
                </p>
            </div>

            <div class="footer-col_2">
                <h3>Address</h3>
                <p style="margin-top:10px;">Vill & Post - Jitholi</p>
                <p>Garh Road, Block - Rajpura</p>
                <p>Meerut PIN - 250004 India</p>
                <p class="email-id">kalptaruvidyalaya@gmail.com</p>
                <p> Number - +91-7500189575 </p>

            </div>

        </div>
        <div class="footer_above_hr">

            <ul class="footer-ul">

                <li class="footer-li"><a class="footer-a" herf="#">Home</a></li>
                <li class="footer-li"><a class="footer-a" herf="#">Gallery</a></li>
                <li class="footer-li"><a class="footer-a" herf="#">About</a></li>
                <li class="footer-li"><a class="footer-a" herf="#">Blog</a></li>
                <li class="footer-li"><a class="footer-a" herf="#">Contact</a></li>
            </ul>
        </div>
        <hr>
        <div class="footer-row2">
            <div class="row2-col1">
                <p>Copyright &copy;2022. All rights reserved.</p>
            </div>

            <ul>
                <li>
                        <!-- <image src="./icons/facebook-brands.svg"></image> -->
                    <a class="footer-icon-facebook" href="https://twitter.com/XenonSingh"><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li>
                    
                        <!-- <image src="./icons/whatsapp-square-brands.svg"></image> -->
                    <a class="footer-icon-whatsapp" href="https://instagram.com/harshneet.0_o?igshid=YmMyMTA2M2Y="><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>



        </div>

    </footer>
</section>
</body>
<!-- ------javascript------ -->
<script>
    var navitem = document.getElementById("navitem")
    function showemenu() {
        navitem.style.right = "0"
    }
    function hidemenu() {
        navitem.style.right = "-50vw"
    }
</script>

</html>