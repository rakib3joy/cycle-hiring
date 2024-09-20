<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>



<?php


include('connect.php');


$username=$_POST['username'];
$mobile=$_POST['mobile'];
$NID = $_POST['NID'];
$email = $_POST['email']; 
$birthdate = $_POST['birthdate']; 
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$paymentMethod = $_POST['paymentMethod'];
$std=$_POST['std'];




if($password!= $cpassword){


   echo '<script
   alert("password did not match");
   window.location="../partials/registration.php";
   </script>';
}
else{

   $sql="insert into user_data(username, mobile,NID, email, birthdate, password, payment_method, standard)
   values('$username','$mobile','$NID','$email', '$birthdate', '$password','$paymentMethod','$std')";
  
   $result=mysqli_query($con,$sql);


   if($result){


       echo '<script>
       alert("Registration successfull");
       window.location="../";
       </script>';
   }
  
}



?>
