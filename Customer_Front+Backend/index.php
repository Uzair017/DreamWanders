<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--!owl carousel styling cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--!cdn for aos animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--!my code's style sheet n cdn for font awesome-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" integrity="sha512-UVQYZVYu7WhHEaO2xGEmc4/3F8ctnXt4jwfGl2MCIHKc95RMgYS8yfNJ3j6wUe0UGiTK0S3vcmh3Ml9h278x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Travel Wanders</title>
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
                <a href="login.php" data-aos="zoom-in" data-aos-offset="200">Login</a> 
                <a href="signup.php" data-aos="zoom-in" data-aos-offset="200" >Sign Up</a>
                <a href="logout.php"data-aos="zoom-in" data-aos-offset="200" onclick="return checkLogout()">Logout</a>
                <h4 style="margin-left: 20px; font-family: poppins; color: rgb(239, 54, 3);">Hello!! <?php 
                   if(isset($_SESSION['username'])){
                echo $_SESSION['username'];
                   }
                   else{
                   echo "";}?></h4>

                <!-- <p> <?php echo $_SESSION['username']; ?></p> -->

            </div>
            <div class="middle col-lg-4 col-md-3 col-1">
                <h1 data-aos="zoom-in" data-aos-offset="200"><a href="">Dream <span> Wanders</span></a></h1>
                <p>Dream. Explore. Discover</p>
            </div>
            <div class="right col-lg-4 col-md-3 col-1">
                <h5 data-aos="zoom-in" data-aos-offset="200">Call now for immediate assistance!</h5>
                <a href="tel:+923456789023" data-aos="zoom-in" data-aos-offset="200">+92321690444</a>
            </div>
        </nav>
        <!-- nav2 end here -->
        
        <div class="nav3" >
            <div class="container mt-3 nav3-toggler" >
               
                <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 MENU </button>
                 
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="index.php">Home</a></li>
                    <li><a class="dropdown-item" href="international.php">International</a></li>
                    <li><a class="dropdown-item" href="domestic.php">Domestic</a></li>
                    <li><a class="dropdown-item" href="carehire.php">Car Hire</a></li>
                    <li><a class="dropdown-item" href="hotels.php">Hotels</a></li>
                    <li><a class="dropdown-item" href="hotels.php">My Bookings</a></li>
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
        <!-- nav 3 ends here -->
        <section class="featured">
            <div class="featured-text" data-aos="zoom-in" data-aos-offset="300">
                <h1 data-aos="zoom-in">ULTIMATE TRAVEL PLANNER</h1>
                <p>Find great adventure holidays and activities <br> around the planet from Pakistan.</p>
                <button>Coming Soon</button>
            </div>
        </section>
        <!-- featured ends here -->
        <section class="carousel" data-aos="zoom-in" id="part" data-aos-offset="300">
            <h1 >Highlights from Recent Tours</h1>
            <p>Pakistan Tour Destinations
                Pakistan's domestic tour destinations boast diverse landscapes,<br>
                from the majestic Hunza Valley to the cultural marvels of 
                 Lahore's Old City,offering <br> travelers a rich and varied
                 experience.</p>
            <div class="owl-carousel owl-theme owl-carousel-highlights">
                <div class="item"><img src="images/KASH/1.png"></div>
                <div class="item"><img src="images/KASH/2.png"></div>
                <div class="item"><img src="images/KASH/3.png"></div>
                <div class="item"><img src="images/KASH/4.png"></div>
                
            </div>
        </section>
        <!--!stylig for partners-->
        <div class="container partners " data-aos="fade-left" data-aos-offset="300">
            <div class="partners-title"><h1>PARTNERS ONBOARD</h1></div>
            <p>Rising Together: Our Partners Elevate Every Journey."</p>
            <div class="row partners-logo">
                <!--!img fluid? for making img responsive -->
                
                <img src="images/partnerd/serena.png" alt="" class="img-fluid col-lg-2 col-md-6 col-12 i1 ">
                <img src="images/partnerd/pc.png" alt="" class="img-fluid col-lg-2 col-md-6 col-12 i2 ">
                <img src="images/partnerd/pia.png" alt="" class="img-fluid col-lg-2 col-md-6 col-12 i3 ">
                <img src="images/partnerd/luxus hunza.jpg" alt="" class="img-fluid col-lg-2 col-md-6  col-12 i4 ">
                <img src="images/partnerd/pakwheels.png" alt="" class="img-fluid col-lg-2  col-md-6 col-12 i5 ">

               

            </div>
        
        </div>
        <!--!featured packs-->
        <section class="container" id="featured-packages" data-aos="fade-right" data-aos-offset="200">
            <h1>Featured Trips</h1>
            <p>Explore the best of Pakistan with our featured trips, tailored for unforgettable adventures.</p>
            <div class="row p-0 m-0">
                <div class="packs col-lg-4 col-md-12 col-12 p-0">
                    <div class="pack-img" data-aos="zoom-in" >
                        <img src="images/packs/gilgit.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                        <button onclick="checkLogin()">Show Details</button>
                        <h6>20% Off</h6>
                     </div>
                    <div class="details">
                        <h4>7 Days Gilgit Tour Package</h4>
                        <div class="desc">
                        <p ><i class="fa fa-clock-o"></i> 7 Days</p>
                        <p class="location"><i class="fa fa-map-marker" ></i> Gilgit, Pakistan.</p>
                    </div>
                    </div>
                </div>
                <div class="packs col-lg-4 col-md-12 col-12 p-0">
                    <div class="pack-img">
                        <img src="images/packs/baltistan.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                        <button onclick="checkLogin()">Show Details</button>
                        <h6>12% Off</h6>
                     </div>
                    <div class="details">
                        <h4>5 Days Hunza Tour Package</h4>
                        <div class="desc">
                        <p><i class="fa fa-clock-o"></i> 5 Days</p>
                        <p class="location"> <i class="fa fa-map-marker" ></i> Hunza, GB Pakistan.</p>
                       </div>
                    </div>
                </div>
                <div class="packs col-lg-4 col-md-12 col-12 p-0">
                    <div class="pack-img">
                        <img src="images/packs/kalam.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                        <button onclick="checkLogin()">Show Details</button>
                        <h6>23% Off</h6>
                     </div>
                    <div class="details">
                        <h4>4 Days Swat Tour Package</h4>
                        <div class="desc">
                        <p><i class="fa fa-clock-o"></i> 7 Days</p>
                        <p class="location"><i class="fa fa-map-marker" ></i> Swat, KPK, Pakistan.</p>
                        </div>
                    </div>
                </div>
                <div class="packs col-lg-4 col-md-12 col-12 p-0">
                    <div class="pack-img">
                        <img src="images/packs/khunjerab.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                        <button onclick="checkLogin()">Show Details</button>
                        <h6>36% Off</h6>
                     </div>
                    <div class="details">
                        <h4>9 Days Family Tour Package To Khunjerab Pass</h4>
                        <div class="desc">
                        <p><i class="fa fa-clock-o"></i> 9 Days</p>
                        <p class="location"><i class="fa fa-map-marker" ></i> Pakistan.</p>
                        </div>
                    </div>
                </div>
                <div class="packs col-lg-4 col-md-12 col-12 p-0">
                    <div class="pack-img">
                       <img src="images/packs/naran.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                       <button onclick="checkLogin()">Show Details</button>
                       <h6>9% Off</h6>
                    </div>
                    <div class="details">
                        <h4>Honeymoon Tour Package Naran Kaghan 3Days/2 Nights</h4>
                        <div class="desc">
                        <p><i class="fa fa-clock-o"></i> 3 Days</p>
                        <p class="location"><i class="fa fa-map-marker" ></i> Naran, KPK, Pakistan.</p>
                        </div>
                    </div>
                </div>
                <div class="packs col-lg-4 col-md-12 col-12 p-0">
                    
                    <div class="pack-img">
                        <img src="images/packs/skardu.jpg" alt="" class="img-fluid" data-aos="zoom-in">
                        <button onclick="checkLogin()">Show Details</button>
                        <h6>42% Off</h6>
                     </div>
                    <div class="details">
                        <h4>Honeymoon in Kashmir 5 Days / 4 Nights</h4>
                        <div class="desc">
                        <p><i class="fa fa-clock-o"></i> 5 Days</p>
                        <p class="location"><i class="fa fa-map-marker" ></i> Kashmir, Pakistan.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="featured-packages-view-more"><a href="domestic.php"> View More</a></h5>
        </section>
        <!-- !customer reviews-->
        <section class="customer-reviews" data-aos="fade-right" data-aos-offset="200">
            <h1>Hear from Our Customers</h1>
            <p>Discover what our clients have to say about their exceptional travel experiences with us.</p>
        <div class="cust-review-bg">
            <!-- <img src="images/banner2.png" alt=""> -->
          <div class="container">
                    <div class="owl-carousel owl-carousel-reviews">
                        <div class="item">
                            <div class="col-8">
                                <div class="card ">
                                    <div class="card-body">
                                        <img src="images/person_female.png" alt="" class="img-fluid rounded-circle">
                                        <h4 class="rew-card-title">Sarah</h4>
                                        <p>"Exploring the majestic landscapes of Hunza with Dream Wanders was an unforgettable experience. Their attention to detail and personalized service made our adventure seamless and truly special. </p>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Card 2 content here -->
                            <div class="col-8">
                                <div class="card ">
                                    <div class="card-body">
                                        <img src="images/person_male.png" alt="" class="img-fluid rounded-circle">
                                        <h4 class="rew-card-title">Ahmed</h4>
                                        <p>"Dream Wanders transformed our trip to Gilgit into a journey of a lifetime. The guides were knowledgeable, and every accommodation was perfect. It felt like traveling with friends who truly care." </p>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- Card 3 content here -->
                            <div class="col-8">
                                <div class="card ">
                                    <div class="card-body">
                                        <img src="images/person_male.png" alt="" class="img-fluid rounded-circle">
                                        <h4 class="rew-card-title">Mr. Iqbal</h4>
                                        <p>"Our family tour to Swat was meticulously planned and executed by Dream Wanders. Their team went above and beyond to ensure we had a memorable experience, filled with joy and discovery." </p>
                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               
            
            
            <!-- <div class="col-8">
                <div class="card ">
                    <div class="card-body">
                        <img src="images/person_female.png" alt="" class="img-fluid rounded-circle">
                        <h4 class="rew-card-title">Sarah</h4>
                        <p>"Exploring the majestic landscapes of Hunza with Dream Wanders was an unforgettable experience. Their attention to detail and personalized service made our adventure seamless and truly special. </p>

                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card ">
                    <div class="card-body">
                        <img src="images/person_male.png" alt="" class="img-fluid rounded-circle">
                        <h4 class="rew-card-title">Ahmed</h4>
                        <p>"Dream Wanders transformed our trip to Gilgit into a journey of a lifetime. The guides were knowledgeable, and every accommodation was perfect. It felt like traveling with friends who truly care." </p>

                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card ">
                    <div class="card-body">
                        <img src="images/person_male.png" alt="" class="img-fluid rounded-circle">
                        <h4 class="rew-card-title">Mr. Iqbal</h4>
                        <p>"Our family tour to Swat was meticulously planned and executed by Dream Wanders. Their team went above and beyond to ensure we had a memorable experience, filled with joy and discovery." </p>

                    </div>
                </div>
            </div>
             -->
            <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card ">
                    <div class="card-body">
                        <img src="images/team/person1.jpg" alt="" class="img-fluid rounded-circle">
                        <h4 class="rew-card-title">Muhammad Uzair</h4>
                        <p class="card-text">Founder & CEO</p>
                        <p>Guiding  with innovation and a deep-rooted passion for discovery, Mr. Uzair sets the course for transformative travel experiences worldwide.</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="card ">
                    <div class="card-body">
                        <img src="images/team/person1.jpg" alt="" class="img-fluid rounded-circle">
                        <h4 class="rew-card-title">Muhammad Uzair</h4>
                        <p class="card-text">Founder & CEO</p>
                        <p>Guiding  with innovation and a deep-rooted passion for discovery, Mr. Uzair sets the course for transformative travel experiences worldwide.</p>

                    </div> -->
                <!-- </div>
            </div> -->
        </div>
    </div>
        </section>
        <!--! our team-->
        <section class="team" data-aos="fade-left" data-aos-offset="200">
            <div class="container">
                <div class="text-center my-5">
                     <h1>Our Team At Your Service</h1>
                     <p>Meet the Dream Makers: Our team at Dream Wanders turns your travel fantasies into reality with unparalleled dedication and creativity.</p>
                </div>
                <div class="row teams-card-container">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card team-card" style="background-color: #0b0b0b;">
                            <div class="card-body team-card-body">
                                <img src="images/team/person1.jpg" alt="" class="img-fluid rounded-circle">
                                <h4 class="card-title team-card-title">Muhammad Uzair</h4>
                                <p class="card-text team-card-text">Founder & CEO</p>
                                <p>Guiding  with innovation and a deep-rooted passion for discovery, Mr. Uzair sets the course for transformative travel experiences worldwide.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card team-card" style="background-color: #0b0b0b">
                            <div class="card-body team-card-body">
                                <img src="images/team/person2.jpg" alt="" class="img-fluid rounded-circle">

                                <h4 class="card-title team-card-title">Abdullah Shafiq</h4>
                                <p class="card-text team-card-text">COO</p>
                                <p>
                                    As COO, Mr. Abdullah is the operational powerhouse, seamlessly integrating cutting-edge solutions to enhance the travel experience from the ground up.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card team-card" style="background-color: #0b0b0b">
                            <div class="card-body  team-card-body">
                                <img src="images/team/person4.jpg" alt="" class="img-fluid rounded-circle">

                                <h4 class="card-title team-card-title">Umair Atiq</h4>
                                <p class="card-text team-card-text">Managing Director</p>
                                <p>Mr. Umair Atiq the Managing Director, blends strategic vision with unparalleled dedication, propelling the team toward excellence in every journey.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        
        </section>
        <!--!for footer-->
        <footer class="container-fluid">
            <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-left">
             <h3>Dream Wanders</h3>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-middle">
                <h4>Quick Links</h4>
                <h5><a href="index.php">Home</a></h5>
                <h5><a href="about.php">About Us</a></h5>
                <h5><a href="contact.php">Contact Us</a></h5>
                <h5><a href="hotels.php">Hotels</a></h5>


            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-right">
                <h4>Useful Links</h4>
                <h5><a href="international.php">International</a></h5>
                <h5><a href="domestic.php">Domestic</a></h5>
                <h5><a href="">Corporate</a></h5>
               
                <h5><a href="carehire.php">Car Hire</a></h5>




            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 footer-far-right">
                <h4>Contact Us</h4>
                <h5><a href="tel:+923456789023">+923217654321</a></h5>
                <h5><a href="mailto:dreamwander2@gmail.com">dreamwanders@info</a></h5>
            </div>


        </div>

        </footer>
         <div class="row developer-tag">
            <div class="col-12">
                Developed By Muhammad Uzair Rafiq
            </div>
        </div>
<!--         
        <div class="container mt-3 nav3-toggler" >
           
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bars"></i> Menu
              </button>
           
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">International</a></li>
                <li><a class="dropdown-item" href="#">Domestic</a></li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
                <li><a class="dropdown-item" href="#">About Us</a></li>
              </ul>
            </div>
          </div> -->
        
        <!-- <div id="demo" class="carousel slide" data-ride="carousel" data-interval="2000">
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/chitral.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/kumrat.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/naran.jpg" alt="Third slide">
              </div>
            </div>
          </div> -->
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
          <!--!javascript for carousel-->
          <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            autoplay:true,
            autoplayTimeout: 2500,
            responsive:{
                 0:{
                  items:1
                 },
                 600:{
                  items:2
                 },
                 1000:{
                  items:3
                 }
           }
       })

       function navigateToPage() {
            var select = document.getElementById("navigationSelect");
            var selectedValue = select.options[select.selectedIndex].value;
            window.location.href = selectedValue; 
        }
          </script>
          <script>
            function logout(){
                <?php
               
                    if(!isset($_SESSION['username'])){
                        echo '<script>alert("Tour Booked! ")</script>';
                    }
                    else{
                        header("location: logout.php");
                      
                    }
                    ?>
            }
          </script>
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
    function checkLogin(){
        <?php
        if(!isset($_SESSION['username'])){
            echo 'alert("Please login First!");';
        }
        else{
            echo 'window.location.href = "domestic.php";';
        }
        ?>
    }
</script>

</body>
</html>