<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "login_db";

    $conn = new mysqli($host, $user, $password, $database);
    if($conn -> connect_error){
        die("Connection now Established: ". $conn ->connect_error);
    
    } 
?>