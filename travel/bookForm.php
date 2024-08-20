<?php
$conn= mysqli_connect('localhost','root','','discoverybangladesh');
session_start();

   if(isset($_POST['send'])){
      $_SESSION['name'] = $_POST['name'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['phone'] = $_POST['phone'];
      $_SESSION['address'] = $_POST['address'];
      $_SESSION['locations'] = $_POST['location'];
      $_SESSION['arrivals'] = $_POST['arrivals'];
      if ($_POST['location']='Saint Martins'){ 
         $_SESSION['price']=6000;
      }
      elseif ($_POST['location']='Rangamati'){
         $_SESSION['price']=3500;
      }
      elseif ($_POST['location']='Sylhet'){
         $_SESSION['price']=4000;
      }
      elseif ($_POST['location']="Cox's Bazar") {
         $_SESSION['price']=6500;
      }
      elseif ($_POST['location']="Sundarbans"){
         $_SESSION['price']=7900;
      }
      else{
          $_SESSION['price']=2000;
      }
      $result = "INSERT INTO bookform(name, email, phone, address, location, price, arrivals) VALUES('$_SESSION[name]','$_SESSION[email]','$_SESSION[phone]',' $_SESSION[address]','$_SESSION[locations]','$_SESSION[price]','$_SESSION[arrivals]')";
      mysqli_query($conn, $result);
      header("Location: checkout.php");
       
 }
   else{
      echo 'something went wrong please try again!';
   }

?>