<?php 
session_start();  
include("../Backend/connect.php");
if(isset($_POST['submit'])){
   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $passwordEnycrp = md5($password);
   $address = $_POST['address'];
   $contact = $_POST['contact'];

   if(empty($username)){
      $_SESSION['username'] = "name is Required";
      header("location:../pages/UserManagement.php");
   }
  if(empty($email)){
      $_SESSION['email'] = "email is Required";
      header("location:../pages/UserManagement.php");
   }

   if(empty($password)){
      $_SESSION['password'] = "password is Required";
      header("location:../pages/UserManagement.php");
   }

   if(empty($address)){
      $_SESSION['address'] = "address is Required";
      header("location:../pages/UserManagement.php");
   }

  if(empty($contact)){
      $_SESSION['contact'] = "contact is Required";
      header("location:../pages/UserManagement.php");
   }else{
      $sql = "insert into management (username,email,password,address,contact) values('$username','$email',' $passwordEnycrp','$address','$contact')";
      $result = mysqli_query($con, $sql);
      if($result){
        
       echo "data inserted successfully";
       header("location: ../pages/showListing.php");
      }else{
       echo "data not inserted successfully";
      }
   } 
}


?>



