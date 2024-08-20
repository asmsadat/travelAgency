<?php

@include 'config.php';

session_start();
//error_reporting(0);

$user_id = $_SESSION['user_id'];

if(isset($_POST['update_pass_btn'])){

   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if($update_pass != $old_pass){
      echo "<script>alert('old password not matched!')</script>";
   }elseif($new_pass != $confirm_pass){
      echo "<script>alert('confirm password not matched!')</script>";
   }else{
      mysqli_query($conn, "UPDATE `user_form` SET password = '$new_pass' WHERE id = '$user_id'") or die('query failed');
      echo "<script>alert('Password Updated Sucessfully!')</script>";
      echo "<script>window.location='profile.php'</script>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>CHANGE PASSWORD</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css2/style.css">

</head>
<body>
   
<div class="update-profile">

   <?php
      $select = mysqli_query($conn, "SELECT * FROM user_form WHERE id = '$user_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
      <h2 style="color: #8e44ad;">CHANGE PASSWORD</h2>
      
      <div class="flex">
         <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>old password :</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>new password :</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>confirm password :</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
         </div>
      </div>
      <input type="submit" value="UPDATE PASSWORD" name="update_pass_btn" class="btn">
      <a href="update.php" class="btn">EDIT PROFILE</a>
      <a href="profile.php" class="delete-btn">BACK TO PROFILE</a>
   </form>

</div>

</body>
</html>