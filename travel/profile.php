<?php

@include 'config.php';
session_start();
error_reporting(0);

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:signin.php');
};

if(isset($_GET['signout'])){
   unset($user_id);
   session_destroy();
   header('location:signin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PROFILE</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css2/style.css">

</head>
<body>
   
<div class="container">

   <div class="profile">
      <h2 style="color: #8e44ad;">WELCOME TO <br> DISCOVERY BANGLADESH</h2>
      <?php
         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($select) > 0){
            $fetch = mysqli_fetch_assoc($select);
         }
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
      ?>
      <h3><?php echo $fetch['name']; ?></h3>
      <a href="update.php" class="btn">EDIT PROFILE</a>
      <a href="home.php" class="btn">GO TO HOME</a>
      <a href="profile.php?signout=<?php echo $user_id; ?>" class="delete-btn">SIGN OUT</a>
   </div>

</div>

</body>
</html>