<?php
   @include 'config.php';
   session_start();
   error_reporting(0);

   $user_id = $_SESSION['user_id'];

   if(!isset($user_id)){
      header('location:signin.php');
   };
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BOOK</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="bookForm.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="Enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="tel" name="phone" placeholder="01*-********" pattern="[0][1][3-9][0-9]{8}" required><br><br>
           
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="Enter your address" name="address" required>
         </div>
         <div class="inputBox">
         <label for="location"><span>Place you want to visit:</span></label>
         <br><br>
         <select id="location" name="location" required>
         <option value="">None</option>
         <?php
            $sql = "SELECT * from packages";
            $result = mysqli_query($conn, $sql);
            $check = mysqli_num_rows($result) > 0;

            if($check){
               while($row = mysqli_fetch_array($result)){
                  ?>
                     <option value="<?php echo $row['Title']; ?>"><?php echo $row['Title']; ?></option>
                  <?php
               }
            }
         ?>
         </select>
         </div>
         <div class="inputBox">
            <span>departure :</span>
            <input type="date" name="arrivals" min= "2022-07-30" max="2022-09-30" required>
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">
      <input type="reset" value="reset" class="btn">

   </form>

</section>

<!-- booking section ends -->

<!-- footer section starts  -->
<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="index.php"> <i class="fas fa-angle-right"></i>sign in</a>
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

</body>
</html>