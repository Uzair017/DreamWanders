<?php


if(isset($_POST['username'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=="admin" && $password=="123"){
        header("location:adminbookins.php");
      
    }
    else{
    echo '<script>alert("Wrong Username or Password")</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Log In</title>
       <!--!owl carousel styling cdn-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!--!cdn for aos animation -->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       <!--!my code's style sheet n cdn for font awesome-->
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="css/signup.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" integrity="sha512-UVQYZVYu7WhHEaO2xGEmc4/3F8ctnXt4jwfGl2MCIHKc95RMgYS8yfNJ3j6wUe0UGiTK0S3vcmh3Ml9h278x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
     .form-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white; 
    }
    
    .form-box .input-group {
        margin-bottom: 15px; 
        width: 100%; 
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .form-box .input-group input,
    .form-box .input-group button {
        
        padding: 0 10px;
    }
    
    .form-box button {
        cursor: pointer; 
        
    }
  </style>
</head>
<body>
    <header>
        
        <div class="nav01" style="background-color: rgb(239, 145, 3);border-radius: 30px; height: 90px; display: flex; align-items: center; justify-content: center;">
            <div class="content">
                <h1 style="color: white; font-family: poppins;text-align: center;">Travel Wanders</h1>
                <h4 style="color: white; font-family: poppins;text-align: center;">Ultimate Travel Experience</h4>
                
              
            </div>
          
            
        </div>
        <!-- nav1 end here -->
       
    </header>
    <section class="form">
        <div class="row" style="position: relative;">
            <img src="images/banner4.jpg" alt="" style="height: 500px;">
            <form class="form-box" action="adminlogin.php" method="post" style="position: absolute; top: 55%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 330px; border-radius: 30px; background-color: rgb(239, 145, 3);border: 5px solid white; ">
                <h1 align="center" style=" color: white; font-family: 'Poppins', sans-serif; margin-bottom: 40px;">Admin Login </h1>
                <div class="input-group">
                    <!-- <label for="username">Username:</label> -->
                    <input type="text" id="username" name="username" placeholder="Enter your Username" required style="width: 400px; height: 35px; border-radius: 10px;">
                </div>
                <div class="input-group">
                    <!-- <label for="password">Password:</label> -->
                    <input type="password" id="password" placeholder="Enter Your Password" name="password" required style="width: 400px; height: 35px;border-radius: 10px;">
                </div>
                <div style="text-align: center;">
                <input type="submit" name="login" style="width: 400px; height: 35px; border: none; color: #333; font-family: 'Poppins', sans-serif; border-radius: 10px;margin-top: 5px;">
               
                 
                </div>
            </form>
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