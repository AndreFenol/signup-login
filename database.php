<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "220428";
$dbName ="signup_login";
mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn){
    die("Something went wrong");

}



?>