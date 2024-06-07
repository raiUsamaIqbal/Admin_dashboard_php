<?php
session_start();
include("connect.php");
if(isset($_POST['createaccount'])){
 
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        // encrypt password
      
        if ($password !== $cpassword) {
          $_SESSION['check-password'] = "The Password does not matches";
            header("location:../pages/register.php");
            exit();
        }
       // check email that already not exist in database 
        $emailCheck = "select * from  authentication where email = '$email'";
        $runQuery = mysqli_query($con,$emailCheck); 

        if(empty($firstname)){
            $_SESSION['firstname'] = "The firstname is Required";
            header("location:../pages/register.php");
         }
         if(empty($lastname)){
            $_SESSION['lastname'] = "The lastname is Required";
            header("location:../pages/register.php");
         }
         if(empty($email)){
            $_SESSION['email'] = "The email is Required";
            header("location:../pages/register.php");
         }
         if(empty($password)){
            $_SESSION['password'] = "The password is Required";
            header("location:../pages/register.php");
         }
         if(empty($cpassword)){
            $_SESSION['cpassword'] = "The cpassword is Required";
            header("location:../pages/register.php");
         }
         else{
            $numRows= mysqli_num_rows($runQuery);
            if($numRows > 0){
                $_SESSION['already'] = "The email already exist ";
                header("location:../pages/register.php");
            }else{
                $sql = "insert into authentication (firstname, lastname, email, password, cpassword) values('$firstname','$lastname','$email', '$password', '$cpassword')"; 
                $result = mysqli_query($con,$sql);
                if($result){
                 // $_SESSION['login']=true;
                echo "record inserted";
                header("location:../pages/login.php");
             //    header("location:login.php");
                }else{
                 $_SESSION['failed'] = "Record inserted Failed";
                 header("location:../pages/register.php");
                }
            }
         }
    
        
        
              
             
             }


   
          

?>


