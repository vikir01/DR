<?php 
    include('session.php');
?>
<!DOCTYPE html>
<html>

    <head>
        
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <link rel="stylesheet" type="text/css" href="css/notifications.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Victorious Shots</title>

    </head>

    <body style="background-color: white">

        <h1>Notifications</h1>

        <div class="tab">
            
                <table style="width: 100%">
                    <tr class="tr">
                        <td><i class="fa fa-bell"></i>You've got a friend reqest from someone.</td>
                    </tr>
                    <tr class="tr">
                        <td><i class="fa fa-bell"></i>There is a challenge you might like.</td>
                    </tr>
                    <tr class="tr">
                        <td><i class="fa fa-bell"></i>Someone sent you a message.</td>
                    </tr>
                    <tr class="tr">
                        <td><i class="fa fa-bell"></i>..............................</td>
                    </tr>
                    <tr class="tr">
                        <td><i class="fa fa-bell"></i>...................................</td>
                    </tr>
                    <tr class="tr">
                        <td><i class="fa fa-bell"></i>..............................</td>
                    </tr>
                    <tr class="tr">
                        <td><i class="fa fa-bell"></i>......................................</td>
                    </tr>
                </table>
        </div>

        <div class="icon-bar">
            <a href="home.php"><i class="fa fa-home"></i></a> 
            <a href="notifications.php"><i class="fa fa-bell"></i></a> 
            <a href="challenges.php"><i class="fa fa-flag-checkered"></i></a> 
            <a href="market.php"><i class="fa fa-shopping-cart"></i></a>
            <?php echo '<a href="profile.php?username='.$login_session.'"><i class="fa fa-user"></i></a>'?>
        </div>

        <script type="text/javascript" src="js/notifications.js"/></script>

    </body>

</html>