<?php 
    include('session.php');
?>
<!DOCTYPE html>
<html>

    <head>
        
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Victorious Shots</title>

    </head>

    <body style="background-color: white">

        </div>

        <br>


        <div class="row"> 
          <div class="column">
            <img src="./img/a1.jpg" style="width:100%">
            <img src="./img/a2.jpg" style="width:100%">
            <img src="./img/a3.jpg" style="width:100%">
            <img src="./img/4.jpg" style="width:100%">
            <img src="./img/a1.jpg" style="width:100%">
            <img src="./img/a2.jpg" style="width:100%">
            <img src="./img/a3.jpg" style="width:100%">
          </div>
          <div class="column">            
            <img src="./img/a2.jpg" style="width:100%">
            <img src="./img/a3.jpg" style="width:100%">
            <img src="./img/4.jpg" style="width:100%">
            <img src="./img/a1.jpg" style="width:100%">
            <img src="./img/a2.jpg" style="width:100%">
            <img src="./img/a3.jpg" style="width:100%">
            <img src="./img/a1.jpg" style="width:100%">
          </div>  
          <div class="column">
            <img src="./img/a3.jpg" style="width:100%">
            <img src="./img/4.jpg" style="width:100%">
            <img src="./img/a1.jpg" style="width:100%">
            <img src="./img/a1.jpg" style="width:100%">
            <img src="./img/a2.jpg" style="width:100%">
            <img src="./img/a2.jpg" style="width:100%">
            <img src="./img/a3.jpg" style="width:100%">
          </div>
          <div class="column">
            <img src="./img/a1.jpg" style="width:100%">
            <img src="./img/4.jpg" style="width:100%">
            <img src="./img/a1.jpg" style="width:100%">
            <img src="./img/a2.jpg" style="width:100%">
            <img src="./img/a3.jpg" style="width:100%">
            <img src="./img/a2.jpg" style="width:100%">
            <img src="./img/a3.jpg" style="width:100%">

          </div>
        </div>

        <div class="icon-bar">
            <a href="home.php"><i class="fa fa-home"></i></a> 
            <a href="notifications.php"><i class="fa fa-bell"></i></a> 
            <a href="challenges.php"><i class="fa fa-flag-checkered"></i></a> 
            <a href="market.php"><i class="fa fa-shopping-cart"></i></a>
            <?php echo '<a href="profile.php?username='.$login_session.'"><i class="fa fa-user"></i></a>'?>
        </div>
    </body>

</html>