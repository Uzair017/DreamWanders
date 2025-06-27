<?php
session_start();
require('connection.php');
if(!isset($_SESSION['username'])){
    echo '<script>alert("No bookings for current User exists!"); window.location.href="index.php";</script>';
}
else{

   $username= $_SESSION['username'];

$sql = "SELECT * FROM hotelbooking where username ='$username'";
$result = mysqli_query($conn, $sql);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Bookings</title>
       <!--!owl carousel styling cdn-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!--!cdn for aos animation -->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

       <!--!my code's style sheet n cdn for font awesome-->
       <link rel="stylesheet" href="css/style.css">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" integrity="sha512-UVQYZVYu7WhHEaO2xGEmc4/3F8ctnXt4jwfGl2MCIHKc95RMgYS8yfNJ3j6wUe0UGiTK0S3vcmh3Ml9h278x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
       .inner button:hover{
            transition: 0.6s linear;
            color: black;
        }
     </style>
   
</head>
<body>
    <header>
        
        <div class="nav1">
            <div class="left">
                <a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope"></i> dreamwander@info</a>
              
            </div>
          
            <div class="right">
               <a href="https://www.facebook.com/"><i class="fa fa-facebook "></i></a>
               <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram "></i></a>
               <a href="https://www.whatsapp.com/"> <i class="fa fa-whatsapp "></i></a>
               <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter "></i></a>

            </div>
        </div>
        <!-- nav1 end here -->
        <nav class=" row nav2">
            <div class="left col-lg-4 col-lg-3 col-1 btns">
                <a href="">Login</a>
                <a href="">Sign Up</a>
                <a href="logout.php" onclick=" return checkLogout()">Logout</a>
                <h4 style="margin-left: 20px; font-family: poppins; color: rgb(239, 54, 3);">Hello!! <?php 
                   if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
                   }
                   else{
                   echo "";}?></h4>

            </div>
            <div class="middle col-lg-4 col-md-3 col-1">
                <h1 data-aos="zoom-in" data-aos-offset="200"><a href="">Dream <span> Wanders</span></a></h1>
                <p>Dream. Explore. Discover</p>
            </div>
            <div class="right col-lg-4 col-md-3 col-1">
                <h5>Call now for immediate assistance!</h5>
                <a href="">+92321690444</a>
            </div>
        </nav>
        <!-- nav2 end here -->
        
        <div class="nav3" >
            <div class="container mt-3 nav3-toggler" >
               
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 MENU </button>
                 
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="index.html">Home</a></li>
                    <li><a class="dropdown-item" href="international.html">International</a></li>
                    <li><a class="dropdown-item" href="domestic.html">Domestic</a></li>
                    <li><a class="dropdown-item" href="carehire.html">Car Hire</a></li>
                    <li><a class="dropdown-item" href="hotels.html">Hotels</a></li>
                    <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                    <li><a class="dropdown-item" href="about.html">About Us</a></li> 
                   </ul>
                </div>
             </div>
             <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="international.php">International</a></li>
                <li><a href="domestic.php">Domestic</a></li>
                <li><a href="carehire.php">Car Hire</a></li>
                <li><a href="hotels.php">Hotels</a></li>
                <li><a href="mybookings.php">My Bookings</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About Us</a></li>
           <!--- for vavigating to a part of a page 
                <li><a href="#part">About Us</a></li>
-->

            </ul>



        </div>
        <!--nav3 ends here-->
    </header>
    <h1 style="color: rgb(239, 54, 3); font-family: poppins; margin-bottom: 15px;" align="center"  >MY Hotel BOOKINGS</h1>
    <div style="padding-left: 30px; padding-right:30px;">
    <table align="center" class="table bordered-table " style="margin-bottom: 100px; margin-top: 40px;">
      
        <tr>
            <th style=" font-size:15px">User Name</th>
            <th style=" font-size:15px">Hotel Name</th>
            <th style=" font-size:15px">Hotel Type</th>
            <th style=" font-size:15px">Hotel City</th>
            <th style=" font-size:15px">Cost per Day</th>
            <th style=" font-size:15px">Check In</th>
            <th style=" font-size:15px">Check Out</th>

           

        </tr>
        <?php
        if(mysqli_num_rows($result)>0){
        while($arr = mysqli_fetch_assoc($result)){
        
        ?>
        <tr>
                    <td><?php echo $arr['username']; ?></td>
                    <td><?php echo $arr['hname']; ?></td>
                    <td><?php echo $arr['htype']; ?></td>
                    <td><?php echo $arr['hcity']; ?></td>
                    <td><?php echo $arr['costperday']; ?></td>
                    <td><?php echo $arr['checkin']; ?></td>
                    <td><?php echo $arr['checkout']; ?></td>


                   
                </tr>


       <?php
        }
    }
       ?>
        
    </table>
</div>

  
    
        <!--!for footer-->
        <footer class="container-fluid">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-left">
             <h3>Dream Wanders</h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-middle">
                <h4>Quick Links</h4>
                <h5><a href="index.html">Home</a></h5>
                <h5><a href="">About Us</a></h5>
                <h5><a href="">Book Now</a></h5>
                <h5><a href="">Contact Us</a></h5>
                <h5><a href="">Blog</a></h5>
    
    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-right">
                <h4>Useful Links</h4>
                <h5><a href="">International</a></h5>
                <h5><a href="">Domestic</a></h5>
                <h5><a href="">Corporate</a></h5>
                <h5><a href="">Hotels</a></h5>
                <h5><a href="">Car Hire</a></h5>
    
    
    
    
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-far-right">
                <h4>Contact Us</h4>
                <h5><a href="">+923217654321</a></h5>
                <h5><a href="">dreamwanders@info</a></h5>
            </div>
    
    
        </div>
    
        </footer>
        <div class="row developer-tag">
            <div class="col-12">
                Developed By Muhammad Uzair Rafiq
            </div>
        </div>
    
         <!--!js for aos animation-->
         <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <script>
          AOS.init();
        </script>
        <!--!cdn for jquery-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
         integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
       crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!--!owl carousel cdn  what is cdn?-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
        <!-- <script>
        function checkLogout() {
            <?php
            if(!isset($_SESSION['username'])){
                echo 'alert("Please login First!");';
                echo 'return false;';
            }
            ?>
            return true; 
        } -->
    </script>
    </body>
    </html>