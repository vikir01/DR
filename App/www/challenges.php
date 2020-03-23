<?php 
    include('session.php');
?>
<!DOCTYPE html>
<html>

    <head>
        
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" type="text/css" href="css/challenge.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Victorious Shots</title>

    </head>

    <body>

        <div class="icon-bar">
            <a href="home.php"><i class="fa fa-home"></i></a> 
            <a href="notifications.php"><i class="fa fa-bell"></i></a> 
            <a href="challenges.php"><i class="fa fa-flag-checkered"></i></a> 
            <a href="market.php"><i class="fa fa-shopping-cart"></i></a>
            <?php echo '<a href="profile.php?username='.$login_session.'"><i class="fa fa-user"></i></a>'?>
        </div>

        <div>
            <div class="challenges">
                <img src="img/challenge1.jfif">
                <div class="info">
                    <p>Flowers</p>
                    <button class="join">Join</button>
                </div>
                
            </div>

        </div>

    </body>

</html>