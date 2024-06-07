<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "userManagement";

// create connection
$con = new mysqli($servername, $username, $password, $dbName);
if($con){
// echo "connection successfully";
}else{
    echo "connection not successfully"; 
}

?>