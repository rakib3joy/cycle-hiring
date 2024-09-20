<?php

include('connect.php');


$mobile=$_POST['mobile'];
$NID = $_POST['NID'];
$password=$_POST['password'];

$sql="Select *from user_data where mobile='$mobile' and 
NID ='$NID' and password='$password'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
    $sql="Select NID, mobile from  'user_data'";
    $data=mysqli_fetch_array($result);
    $_SESSION['NID']=$data['NID'];
    $_SESSION['data']=$data;
    
    echo '<script>
    window.location="../partials/dashboard.php";
    </script>';

    
}    

else{

    echo '<script>
    alert("Invalid credentials");
    window.location="../";
    </script>';
}