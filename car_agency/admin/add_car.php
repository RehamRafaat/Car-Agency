<?php
session_start();
if(isset($_POST['submit']))
{
    include 'connection.php'; 
    $car_name = $_POST['car_name'];
    $car_type = $_POST['car_type'];
    $car_code = $_POST['car_code'];
    $car_date = $_POST['car_date'];
    $car_price = $_POST['car_price'];
    
     $req ="select * from data where car_code='$car_code'";
     $record= mysqli_query($con,$req);
     $record_num = mysqli_num_rows($record);
     if($record_num > 0)
     {
         header("Location: add_new.php?problem=enter_unique_code");
         exit();
     }
    else
    {
        $req = "insert into data(car_name,car_type,car_code,car_date,car_price) values ('$car_name','$car_type','$car_code','$car_date','$car_price');";
        mysqli_query($con,$req);
        header("Location: view_all.php");
        exit();
    }
}
else
{
    header("Location: add_new.php");
    exit();
}