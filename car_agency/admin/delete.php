<?php
session_start();
if(isset($_POST['submit']))
{
    include 'connection.php';
    $car_code = $_POST['car_code'];
    
     $req="delete from data where car_code = '$car_code'";  
    
     mysqli_query($con,$req);
     header("Location: view_all.php");
     exit();
}