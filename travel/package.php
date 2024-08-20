<?php
   @include 'config.php';
   session_start();
   error_reporting(0);

   $user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>PACKAGES</title>
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

    <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
        <h1>packages</h1>
    </div>

    <section class="packages">

    <h1 class="heading-title">top destinations</h1>

    <div class="container py-5">
        <div class="row mt-4">
            <?php

                $sql = "SELECT * from packages";
                $result = mysqli_query($conn, $sql);
                $check = mysqli_num_rows($result) > 0;

                if($check)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                        <div class="col-md-4 mt-3">
                            <div class="box-container">
                                <div class="box">
                                    <div class="image">
                                        <?php echo '<img src="data:Image;base64, '.base64_encode($row['Image']).'">' ?>;
                                    </div>
                                    <div class="content">
                                        <h3><?php echo $row['Title']; ?></h3>
                                        <p><?php echo $row['Description']; ?></p>
                                        <p> <b><?php echo $row['NightNo.']; ?> Nights / <?php echo $row['DayNo.']; ?> Days</b></p>
                                        <div class="price">৳<?php echo $row['OfferPrice']; ?> <span>৳<?php echo $row['RegularPrice']; ?></span> </div>
                                        <a href="book.php" class="btn">book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php                      
                    }
                }
                else
                {
                    echo "No Package Found";
                }

            ?>
            
        </div>
    </div>

    </section>

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
</body>
