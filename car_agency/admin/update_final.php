<?php
session_start();
if(isset($_POST['submit']))
{
    include 'connection.php';
    
    $car_code_check = $_POST['car-code-check'];
    $car_name = $_POST['car_name'];
    $car_type = $_POST['car_type'];
    $car_code = $_POST['car_code'];
    $car_date = $_POST['car_date'];
    $car_price = $_POST['car_price'];
    
     $req ="select * from data where car_code='$car_code'";
     $out = mysqli_query($con,$req);
     $record_num = mysqli_num_rows($out);
     if($record_num > 0)
     {
         header("Location: update_data.php?problem=Codetaken");
         exit();
     }
    else
    {
         $req="update data 
         SET car_name = '$car_name',
         car_type = '$car_type',
         car_code = '$car_code',
         car_date = '$car_date',
         car_price = '$car_price'
         where car_code = '$car_code_check'";
         mysqli_query($con,$req);
         header("Location: view_all.php");
         exit();
    }
}