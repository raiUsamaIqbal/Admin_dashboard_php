<?php
session_start();
include("connect.php");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM authentication  WHERE email = '$email' and password = '$password' ";
    $run = mysqli_query($con, $sql);
    $numRows = mysqli_num_rows($run);

    if(empty($email)){
        $_SESSION['email'] = "email is Required";
        header("location:../pages/login.php");
     } 
     if(empty($password)){
        $_SESSION['password'] = "password is Required";
        header("location:../pages/login.php");
     }else{
        if($numRows > 0){
            header("location:../index.php ");
        }else{
            // echo "Credentials not match!";
            $_SESSION['error'] = "The Credentials are not match!.";
            header("location:../pages/login.php");
        }  
     }

   
}
?>
