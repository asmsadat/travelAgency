<?php

@include 'config.php';
session_start();
error_reporting(0);
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_pass)){
      if($update_pass != $old_pass){
         echo "<script>alert('old password not matched!')</script>";
      }
      else{
         if(!empty($update_image)){
            if($update_image_size > 2000000){
               echo "<script>alert('image is too large')</script>";
            }else{
               $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
               if($image_update_query){
                  move_uploaded_file($update_image_tmp_name, $update_image_folder);
               }
            }
         }
         mysqli_query($conn, "UPDATE `user_form` SET name = '$update_name' WHERE id = '$user_id'") or die('query failed');
         echo "<script>alert('Profile Updated Sucessfully!')</script>";
         echo "<script>window.location='profile.php'</script>";
      }
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EDIT PROFILE</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css2/style.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <h2 style="color: #8e44ad;">EDIT PROFILE</h2>
      <?php
         if($fetch['image'] == ''){
            echo '<img src="images/default-avatar.png">';
         }else{
            echo '<img src="uploaded_img/'.$fetch['image'].'">';
         }
         if(isset($message)){
            foreach($message as $message){
               echo '<div class="message">'.$message.'</div>';
            }
         }
      ?>
      <div class="flex">
         <div class="inputBox">
            <span>Username :</span>
            <input type="text" name="update_name" value="<?php echo $fetch['name']; ?>" class="box">
            <span>Image :</span>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>Password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
         </div>
      </div>
      <input type="submit" value="SAVE CHANGES" name="update_profile" class="btn">
      <a href="updatePass.php" class="btn">CHANGE PASSWORD</a>
      <a href="profile.php" class="delete-btn">BACK TO PROFILE</a>
   </form>

</div>

</body>
</html>