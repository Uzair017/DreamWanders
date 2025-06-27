<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domestic Tours</title>
       <!--!owl carousel styling cdn-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!--!cdn for aos animation -->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       <!--!my code's style sheet n cdn for font awesome-->
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/domestic.css">

       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" integrity="sha512-UVQYZVYu7WhHEaO2xGEmc4/3F8ctnXt4jwfGl2MCIHKc95RMgYS8yfNJ3j6wUe0UGiTK0S3vcmh3Ml9h278x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
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
                <!-- <h4 style="margin-left: 20px; font-family: poppins; color: rgb(239, 54, 3);">Hello!! <?php echo $_SESSION['username']?></h4> -->
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
    <!--!domestic Tours-->
    <section class="container" id="featured-d-packages" data-aos="fade-right" data-aos-offset="200">
        <h1 style="margin-top: 40px;"  data-aos="zoom-in" data-aos-offset="100">Domestic Tours</h1>
        <p>Explore the best of Pakistan with our featured trips, tailored for unforgettable adventures.</p>
        <div class="row p-0 m-0">
            <h1 style="margin-top: 20px; text-align: center;border-top: 5px solid rgb(239, 54, 3); padding-top: 30px;"  data-aos="zoom-in" data-aos-offset="100">Kashmir Exclusives</h1>
        
            
        
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                    <img src="images/domesticpacks/kashm.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='dawariantour.php'">Book Now</button>
                    <h6>36% Off</h6>
                 </div>
                <div class="details">
                    <h4>9 Days Family Tour to Dawarian</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 9 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Kashmir,Pakistan.</p>
                    <p class="price"> Rs. 80,000</p>

                    </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                   <img src="images/domesticpacks/kutton.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                   <button onclick="location.href='dawariantour.php'">Show Details</button>
                   <h6>9% Off</h6>
                </div>
                <div class="details">
                    <h4>4 Days Family Tour to Nellum Valley </h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 3 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Kashmir, Pakistan.</p>
                    <p class="price"> Rs. 62,000</p>

                    </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                
                <div class="pack-img">
                    <img src="images/domesticpacks/neelum.jpg" alt="" class="img-fluid" data-aos="zoom-in" >
                    <button onclick="location.href='dawariantour.php'">Show Details</button>
                    <h6>42% Off</h6>
                 </div>
                <div class="details">
                    <h4>Honeymoon in Taobut 5 Days / 4 Nights</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 5 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Kashmir, Pakistan.</p>
                    <p class="price"> Rs. 90,000</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row p-0 m-0">
            <h1 style="margin-top: 40px; text-align: center;" data-aos="zoom-in" data-aos-offset="100">Kumrat Valley Exclusives</h1>
        
            
        
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                    <img src="images/domesticpacks/rattigali.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='khunjerabtour.php'">Show Details</button>
                    <h6>36% Off</h6>
                 </div>
                <div class="details">
                    <h4>9 Days Family Tour Package To Jahaz Banda</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 9 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i>Kumrat, Pakistan.</p>
                    <p class="price"> Rs. 120,000</p>

                    </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                   <img src="images/domesticpacks/taobut.jpeg" alt="" class="img-fluid" data-aos="zoom-in">
                   <button onclick="location.href='gilgittour.php'">Show Details</button>
                   <h6>9% Off</h6>
                </div>
                <div class="details">
                    <h4>Honeymoon Tour Package Kumrat Valley 3Days/2 Nights</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 3 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Kumrat, KPK, Pakistan.</p>
                    <p class="price"> Rs. 75,000</p>

                    </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                
                <div class="pack-img">
                    <img src="images/packs/skardu.jpg" alt="" class="img-fluid" data-aos="zoom-in" >
                    <button onclick="location.href='gilgittour.php'">Show Details</button>
                    <h6>42% Off</h6>
                 </div>
                <div class="details">
                    <h4>Family Tour in Kala Chashma 5 Days / 4 Nights</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 5 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Kumrat, Pakistan.</p>
                    <p class="price"> Rs. 65,000</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row p-0 m-0">
            <h1 style="margin-top: 40px; text-align: center;" data-aos="zoom-in" data-aos-offset="100">KPK Eclusives</h1>
        
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img" data-aos="zoom-in" >
                    <img src="images/packs/gilgit.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="moveto()">Show Details</button>
                    <h6>20% Off</h6>
                 </div>
                <div class="details">
                    <h4>7 Days Gilgit Tour Package</h4>
                    <div class="desc">
                    <p ><i class="fa fa-clock-o"></i> 7 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Gilgit, Pakistan.</p>
                    <p class="price"> Rs. 32,000</p>

                </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                    <img src="images/packs/baltistan.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='dawariantour.php'">Show Details</button>
                    <h6>12% Off</h6>
                 </div>
                <div class="details">
                    <h4>5 Days Hunza Tour Package</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 5 Days</p>
                    <p class="location"> <i class="fa fa-map-marker" ></i> Hunza, GB Pakistan.</p>
                    <p class="price"> Rs. 40,000</p>

                   </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                    <img src="images/packs/kalam.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='khunjerabtour.php'">Show Details</button>
                    <h6>23% Off</h6>
                 </div>
                <div class="details">
                    <h4>4 Days Swat Tour Package</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 7 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Swat, KPK, Pakistan.</p>
                    <p class="price"> Rs. 25,000</p>

                    </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                    <img src="images/packs/khunjerab.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='khunjerabtour.php'">Show Details</button>
                    <h6>36% Off</h6>
                 </div>
                <div class="details">
                    <h4>9 Days Family Tour Package To Khunjerab Pass</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 9 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Pakistan.</p>
                    <p class="price"> Rs. 1.5 Lac</p>

                    </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                   <img src="images/packs/naran.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                   <button onclick="location.href='gilgittour.php'">Show Details</button>
                   <h6>9% Off</h6>
                </div>
                <div class="details">
                    <h4>Honeymoon Tour Package Naran Kaghan 3Days/2 Nights</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 3 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Naran, KPK, Pakistan.</p>
                    <p class="price"> Rs. 55,000</p>

                    </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                
                <div class="pack-img">
                    <img src="images/domesticpacks/waterfall2.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='dawariantour.php'">Show Details</button>
                    <h6>42% Off</h6>
                 </div>
                <div class="details">
                    <h4>Family Trip to Umbrella Waterfall 2 Days / 1 Night</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 2 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Kashmir, Pakistan.</p>
                    <p class="price"> Rs. 33,000</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row p-0 m-0">
            <h1 style="margin-top: 40px; text-align: center;" data-aos="zoom-in" data-aos-offset="100">Gilgit Baltistan Exclusives</h1>
        
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img" data-aos="zoom-in" >
                    <img src="images/packs/gilgit.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='gilgittour.php'">Show Details</button>
                    <h6>20% Off</h6>
                 </div>
                <div class="details">
                    <h4>7 Days Gilgit Tour Package</h4>
                    <div class="desc">
                    <p ><i class="fa fa-clock-o"></i> 7 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Gilgit, Pakistan.</p>
                    <p class="price"> Rs. 29,000</p>

                </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0">
                <div class="pack-img">
                    <img src="images/packs/baltistan.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='dawariantour.php'">Show Details</button>
                    <h6>12% Off</h6>
                 </div>
                <div class="details">
                    <h4>5 Days Hunza Tour Package</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 5 Days</p>
                    <p class="location"> <i class="fa fa-map-marker" ></i> Hunza, GB Pakistan.</p>
                    <p class="price"> Rs. 24,000</p>

                   </div>
                </div>
            </div>
            <div class="packs col-lg-4 col-md-12 col-12 p-0" >
                <div class="pack-img">
                    <img src="images/packs/kalam.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                    <button onclick="location.href='khunjerabtour.php'">Show Details</button>
                    <h6>23% Off</h6>
                 </div>
                <div class="details">
                    <h4>4 Days Skardu Tour Package</h4>
                    <div class="desc">
                    <p><i class="fa fa-clock-o"></i> 7 Days</p>
                    <p class="location"><i class="fa fa-map-marker" ></i> Skardu, Pakistan.</p>
                    <p class="price"> Rs. 30,000</p>

                    </div>
                </div>
            </div>
            
        </div>

        <!-- <h5 class="featured-packages-view-more"><a href="domestic.html"> View More</a></h5> -->
    </section>
        <!--!for footer-->
    <footer class="container-fluid" style="margin-top: 40px;">
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

    <script>
    function checkLogout() {
        <?php
        if(!isset($_SESSION['username'])){
            echo 'alert("Please login First!");';
            echo 'return false;';
        }
        ?>
        return true; 
    }
    function moveto(){
        window.location.href = "gilgittour.php";
    }
</script>
</body>
</html>