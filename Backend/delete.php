<?php
include("connect.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
   $sql = "delete  from management where id = $id";
   $result = mysqli_query($con, $sql);

}
header("location:../pages/showListing.php");
?>