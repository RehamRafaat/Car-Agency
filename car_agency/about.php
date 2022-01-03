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
        <link rel="stylesheet" href="assets/css/master.css">
        <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        
        <!--Font Style-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        
        <style>
            .landing-page{
                min-height: 55vh;
                background-image: url(assets/img/about.jpg);
                background-size: cover;
                background-repeat: no-repeat;
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
            #advantages{
                padding:100px;
                display: flex;
            }
            #advantages .card{
                display: flex;
                padding: 20px;
                text-align: left;
                line-height: 2;
                width: 50%;
            }
            #advantages .card img{
                width: 100%;
                height: 300px;
                border: solid;
                border-color:transparent;
                border-radius: 10px;
                box-shadow: 10px 10px 10px #e0e0e0;
            }
            #advantages .card h3{
               color:black;
                font-size: 30px;
            }
            #advantages .card p{
                color:#a0a0a0;
                font-size: 17px;
            }
        </style>
    </head>
    <body>
        <!--Start Landing Page-->
        <div class="landing-page">
          <!--<div class="over-lay"></div>-->
              <div class="header-area">
                   <div class="logo"><a href="index.php">GARAGE</a></div>
                   <ul class="links">
                       <li class="active"><a class="active" href="about.php">About</a></li>
                       <li><a href="cars.php">Cars</a></li>
                       <li><a href="contact.php">Contact</a></li>
                        <?php if(!isset($_SESSION['id']))
                        {
                        ?>
                       <li><a href="login.php">login</a></li>
                        <?php }
                        else{
                        ?>
                        <li><a href="logout.php">Logout</a></li>
                        <?php } ?>
                   </ul>
               </div>
               <div class="introduction-text">
                       <h2>ABOUT US</h2>
                       <P>A few words about our company</P>
                </div> 
        </div>
        <!--End Landing Page-->
        
        
        <!--Start advantages-->
        <div id="advantages">
                   <div class="card">
                       <div class="desc">
                           <h3>Who we are?</h3>
                           <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.In aliquam sem fringilla ut morbi tincidunt augue interdum velit. Tristique risus nec feugiat in fermentum posuere urna. Vulputate odio ut enim blandit volutpat. Bibendum arcu vitae elementum curabitur.</p>
                       </div>
                   </div>
                   <div class="card">
                       <img src="assets/img/about-team.jpg"/>
                   </div>
        </div>
        <!--End advantages-->
        
        <div id="footer">
           <div class="benefits">
               <div class="fot-card">
                <h3>Address</h3>
                <h5>1418 Riverwood Drive,</h5>
                <h5>Suite 3845 Cottonwood,</h5>
                <h5>CA 96022</h5>
                <h5>United States</h5>
            </div>
            <div class="fot-card">
                <h3>Contacts</h3>
                <h5><i class="fa fa-phone" aria-hidden="true"></i>1-300-123-1234 </h5>
                <h5><i class="fa fa-envelope" aria-hidden="true"></i>info@demolink.org </h5>
                <div class="social">
                    <div class="soc-circle">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                    <div class="soc-circle">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <div class="soc-circle">
                        <i class="fa fa-behance" aria-hidden="true"></i>
                    </div>
                    <div class="soc-circle">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="fot-card">
                <h3>Newsletter</h3>
                <form action="#" method="post">
                     <input type="email" name="email"/>
                     <br>
                     <button>Send</button>
                </form>
            </div>
           </div>
        </div>
        <!--Scripts-->
        <script src="assets/js/master.js"></script>
    </body>
</html>