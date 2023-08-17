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
                    <li><a href="BookingForm.php">Booking</a> </li>
                    <li><a href="NewCustomer.php">Register</a> </li>
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

        <center>

        <h3> <u>CUSTOMER DETAILS</u></h3>
    <ol type = 1>
    <li>NAME</li> 
     <label for="fname">First name:</label>
     <form name=custDetail method=post action='AddUserConf.php'>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
   <li>ADDRESS</li> 
   <label for="add">Address: </label>
  <input type="text" id="add" name="add"/><br>
  
  

   <li>COUNTRY</li>
    <select name="country" id="country">
        <option value="INDIA">INDIA</option>
        <option value="USA">USA</option>
        <option value="GERMANY">GERMANY</option>
        <option value="FRANCE">FRANCE</option>
        <option value="UK">UK</option>
    </select>
    <li>Age</li>
    <input type="number" name='age'><br>
    </ol>
    
      <button type="submit">SUBMIT</button>
       
</form>
</center>
    </main>
    <!-- about -us -->
    <footer>
    <div class="footer-row">
            <div class="footer-col_1">
                <h3>Jaypee Institute of Information Technology, Noida</h3>
                <p class="col_1-p">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eligendi ipsum corporis. Omnis, reprehenderit natus incidunt accusantium tempora molestias repellendus fuga repellat adipisci nisi tenetur vel laudantium labore quaerat provident dolore voluptatum beatae sint eveniet sapiente placeat? Quaerat, voluptates aliquam?
                </p>
            </div>

            <div class="footer-col_2">
                <h3>Address</h3>
                <p style="margin-top:10px;">A-10, A Block</p>
                <p>Sector-62</p>
                <p>Noida-201301, U.P, India</p>
                <p class="email-id">intnl.admission@mail.jiit.ac.in</p>
                <p> Number -  0120 240 0973 </p>

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
        </div>

    </footer>

       

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