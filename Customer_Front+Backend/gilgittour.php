<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gilgit Tour</title>
       <!--!owl carousel styling cdn-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!--!cdn for aos animation -->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       <!--!my code's style sheet n cdn for font awesome-->
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/contact.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" integrity="sha512-UVQYZVYu7WhHEaO2xGEmc4/3F8ctnXt4jwfGl2MCIHKc95RMgYS8yfNJ3j6wUe0UGiTK0S3vcmh3Ml9h278x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
     <style>
        #btn:hover{
    background-color: rgb(239, 54, 3);
    transition: 0.5s linear;
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
            <div class="container mt-3 nav3-toggler" style="display: none;">
               
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 MENU </button>
                 
                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="index.php">Home</a></li>
                    <li><a class="dropdown-item" href="international.php">International</a></li>
                    <li><a class="dropdown-item" href="domestic.php">Domestic</a></li>
                    <li><a class="dropdown-item" href="carehire.php">Car Hire</a></li>
                    <li><a class="dropdown-item" href="hotels.php">Hotels</a></li>

                    <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                    <li><a class="dropdown-item" href="about.php">About Us</a></li> 
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
    </header>    
        <!--nav3 ends here-->

    <div class="container" style=" margin-bottom: 50px;" >
        <div class="row">
            <div class="col-lg-2 col-md-0 col-0"></div>
            <div class="col-lg-3 col-md-12 col-12">
                <img src="images/packs/gilgit.jpg" style="margin-top: 80px;" class="img-fluid" data-aos="zoom-in" >
            </div>
            <div class="col-lg-7 col-md-12 col-12">
                <h1 class="" data-aos="fade-up" style="color: rgb(239, 54, 3);font-family: poppins; padding-left: 70px; margin-bottom: 30px;">Gilgit Tour</h1>
                <table border="2"  style="width: 500px; border-color: rgb(239, 54, 3); font-size: 20px;">
                    <tr style="height: 40px;padding-left: 10px;">
                        <th style="padding: 10px;">Title</th>
                        <th >Description</th>
                    </tr>
                    <tr style="height: 40px;">
                        <th style="padding: 10px;">Destination:</th>
                        <td >Gilgit</td>

                    </tr>
                    <tr style="height: 40px;">
                        <th style="padding: 10px;">Duration:</th>
                        <td>7 Days</td>

                    </tr>
                    <tr style="height: 40px;">
                        <th style="padding: 10px;">Tour Type:</th>
                        <td>Individual Tour</td>

                    </tr>
                    <tr style="height: 40px;">
                        <th style="padding: 10px;">Cost</th>
                        <td>32000 PKR</td>

                    </tr>
                </table>
                <div style="margin-top: 20px; margin-left: 170px;">
                    <form action="" method="POST">
                    <input type="submit" name="submit" value="Book Now" id="btn" style="border: 3px solid rgb(239, 54, 3); font-family: poppins; font-size: 17px; color: black; border-radius: 10px; padding: 5px; padding-left: 20px; padding-right: 20px;">
               <!-- <a href="" style="border: 3px solid rgb(239, 54, 3); font-family: poppins; font-size: 17px; color: black; border-radius: 10px; padding: 5px; padding-left: 20px; padding-right: 20px; text-decoration: none;">Book Now</a></button> -->
            </form>
            </div>
            </div>

        </div>

    </div>
 
    <!--!for footer-->
<footer class="container-fluid">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-left">
     <h3>Dream Wanders</h3>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-middle">
        <h4>Quick Links</h4>
        <h5><a href="">Home</a></h5>
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

</body>
</html>


<?php
require('connection.php');

if(isset($_POST['submit'])){
    $location="Gilgit";
    $days=7;
    $cost=320000;
    $tourtype="Individual Tour";
    $username=$_SESSION['username'];
    $q="insert into domestictours(username,tourtype,location,days,cost) values('$username   ','$tourtype','$location','$days','$cost')";
    $r=mysqli_query($conn,$q);
    if($r){
        echo '<script>alert("Tour Booked! ")</script>';
        exit; 
    }
    else{
        echo '<script>alert("Error Occured! ")</script>';

    }   
}
?>