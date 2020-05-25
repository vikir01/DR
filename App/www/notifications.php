<?php
  ini_set('mysqli.connect_timeout', 300);
  ini_set('default_socket_timeout', 300);
?>
<?php
    include('session.php');
    if(!isset($_SESSION['login_user'])){
        header("location: home.html"); // Redirecting To Home Page
    }
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'], $queries);
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
        <h4 style="color:pink; text-align: center; font-size: 30px; margin-bottom: 10px; margin-top: 15px;"><i>Notifications</i></h4>

        <div class="tab">
            <table style="width: 100%">
                <?php
                function displaynotification($login_session)
                {
                  $con = mysqli_connect("localhost", "root", "");
                  mysqli_select_db($con, "victorious_shots");
                  $qry = "select * from notifications where username='".$login_session."' order by id desc";
                  $result = mysqli_query($con, $qry);

                  while($row = mysqli_fetch_array($result))
                  {
                    echo '<tr class="tr"><td><i class="fa fa-bell">'.$row['notification'].'</i></td></tr>';

                  }
                    mysqli_close($con);
                }
                displaynotification($login_session);
                ?>
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