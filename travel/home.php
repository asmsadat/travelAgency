<?php
   @include 'config.php';
   session_start();
   error_reporting(0);

   $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"> <img src="images/Discovery Bangladesh.png"  width="200" height="50"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>

      <?php
      if(isset($user_id)){
      
      ?>
         <a href="profile.php">Profile </a>
      <?php
      }
      else{
      ?>
         <a href="signin.php">Sign In </a>
      <?php
      }
      ?>

   </nav>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">
            
   <div class="container">
      <div id="carouselSlider" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carouselSlider" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSlider" data-slide-to="1"></li>
            <li data-target="#carouselSlider" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="images/slide-1.jpg">
               <div class="carousel-caption">
                  <span>explore, discover, travel</span>
                  <h3>travel arround the bangladesh</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="images/slide-2.jpg">
               <div class="carousel-caption">
                  <span>explore, discover, travel</span>
                  <h3>discover the new places</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>
            <div class="carousel-item">
               <img src="images/slide-3.jpg">
               <div class="carousel-caption">
                  <span>explore, discover, travel</span>
                  <h3>make your tour worthwhile</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev " href="#carouselSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon "></span>
         </a>
         <a class="carousel-control-next " href="#carouselSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon "></span>
         </a>
      </div>
   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>Tour</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking </h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Camp Fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>Hotel & Accomodation</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Discoverybangladesh.com is the  Travel & Tourism Guide of Bangladesh. The site is one stop solution for meeting the total requirements of all kinds of traveler - international and domestic.

      <p>Discoverybangladesh.com committed to support Bangladesh Government as well as the dynamism of the private sector. We are working towards repositioning the image of the country so as to market and promote Bangladesh aggressively and extensively both domestically and internationally.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>St. Martins Island Tour</h3>
            <p>St. Martins Island, Saint Martin Coral Island, Chhera Dwip <br> <b>4 Nights / 3 Days</b></p>
            <div class="price">৳6500 <span>৳7500</span> </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <h3>Discover Rangamati</h3>
            <p>Visit Sangu River, Swarna Mandir, Chakma Rajbari, Meghla Garden  <br> <b>3 Nights / 2 Days</b></p>
            <div class="price">৳2500 <span>৳3500</span> </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Discover Sylhet</h3>
            <p>hrine of Muslim Saints, Jafflong, Lawachara Rain Forest, Tea gardens.<br> <b>3 Nights / 4 Days</b> </p>
            <div class="price">৳3500 <span>৳4000</span> </div>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 20% off</h3>
      <p>Hurry Up! Book your tour now and enjoy discount upto 20% discount</p>
      <div class="image">
         <img src="images/adventurer.png" alt="" width="100px" height="60px">
</div>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +0171-436-9093 </a>
         <a href="#"> <i class="fas fa-phone"></i> +0181-243-3323 </a>
         <a href="#"> <i class="fas fa-envelope"></i> discoverybd@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> chittagong, bangladesh - 4376 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> &copy;2022 by <span>discovery bangladesh</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>

</body>
</html>