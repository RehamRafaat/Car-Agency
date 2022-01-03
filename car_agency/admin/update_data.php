<?php

session_start();

?>
<!DOCTYPE html>
<html>
    <head>
       
        <!--Meta Data-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <!--title-->
        <title>Car Agency</title>
        
        <!--Css Files-->
        <link rel="stylesheet" href="../assets/css/master.css">
        <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="css/admin.css">
        
        <!--Font Style-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        
        <style>
            .header-area{
                background-color: black;
            }
            .landing-page{
                min-height: 46vh;
                background-color: black;
                background-image: url(../assets/img/black.jpg);
            }
            .header-area{
                background-color: black;
            }
            .introduction-text{
                width: 95%;
                text-align: center;
            }
            .introduction-text h2{
                font-size: 50px;
            }
            .table-view{
                width: 100%;
            }
        </style>
        
    </head>
    <body>
        <!--Start Landing Page-->
        <div class="landing-page">
          <!--<div class="over-lay"></div>-->
              <div class="header-area">
                   <div class="logo"><a href="../index.php">GARAGE Admin</a></div>
                   <ul class="links">
                      <li><a href="../index.php">Home Page</a></li>
                       <li><a href="view_all.php">View All</a></li>
                       <li><a href="add_new.php">Add</a></li>
                       <li class="active"><a  class="active" href="update_input.php">Update</a></li>
                       <li><a href="delete_input.php">Delete</a></li>
                       <li><a href="logout.php">Logout</a></li>
                   </ul>
               </div>
               <div class="introduction-text">
                       <h2>Update Car</h2>
                </div> 
        </div>
        <div class="table-view">
            <table class="table">
                <thead>
                    <th>Car Name</th>
                    <th>Car Type</th>
                    <th>Car Code</th>
                    <th>Car Date</th>
                    <th>Car Price</th>
                </thead>
                <tbody>
                <form method="post" action="update_final.php">
                   <?php
                        $car_cod = $_POST['car_code'];
                        include "connection.php";
                        $req = "select * from data where car_code = '$car_cod'";
                        $out = mysqli_query($con, $req);
                        while($record = mysqli_fetch_assoc($out))
                        {   
                    ?>
                    <tr>
                        <td><input type="text" name="car_name" value="<?php echo $record['car_name']; ?>"/></td>
                        <td><input type="text" name="car_type" value="<?php echo $record['car_type']; ?>"/></td>
                        <td><input type="text" name="car_code" value="<?php echo $record['car_code']; ?>"/></td>
                        <td><input type="date" name="car_date" value="<?php echo $record['car_date']; ?>"/></td>
                        <td><input type="number" name="car_price" value="<?php echo $record['car_price']; ?>"/></td>
                        <input type="hidden" name="car-code-check" value="<?php echo $car_cod; ?>"/>"/>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button type="submit" name="submit">Update</button></td>
                        <td></td>
                        <td></td>
                    </tr>
                </form>
                </tbody>
            </table>
        </div>
        
        <!--Scripts-->
        <script src="assets/js/master.js"></script>
    </body>
</html>