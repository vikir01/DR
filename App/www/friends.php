<?php 
    include('session.php');
    $con = mysqli_connect("localhost","root","") or die ("could not connect");
    mysqli_select_db($con, "victorious_shots") or die ("could not find db");
?>
<!DOCTYPE html>
<html>

    <head>
        
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <link rel="stylesheet" type="text/css" href="css/friends style.php">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        

        <title>Victorious Shots</title>

    </head>

    <body style="background-color: white">

        <div class="tab">
          <div class="tab-inner">
            <div class="buttons">
              <button class="tablinks" onclick="openTab(event, 'Followers')" id="defaultOpen">Followers</button>
              <button class="tablinks" onclick="openTab(event, 'Following')">Following</button>
            </div>
            <div class="content">
              <div id="Followers" class="tabcontent">
                <?php 
                    $query = mysqli_query($con, "SELECT * FROM followers WHERE followed LIKE '$login_session'") or die ("error");
                    $count = mysqli_num_rows($query);
                    if($count==0){
                        $output = 'No followers.';
                    }else{
                        while($row = mysqli_fetch_array($query)){
                            $follower = $row['follower'];

                            echo '<div>'.$follower.'</div>';
                        }
                    }
                ?>
              </div>
              <div id="Following" class="tabcontent">
                <?php 
                    $query = mysqli_query($con, "SELECT * FROM followers WHERE follower LIKE '$login_session'") or die ("error");
                    $count = mysqli_num_rows($query);
                    if($count==0){
                        $output = 'No followers.';
                    }else{
                        while($row = mysqli_fetch_array($query)){
                            $followed = $row['followed'];

                            echo '<div>'.$followed.'</div>';
                        }
                    }
                ?>
              </div>
            </div> 
          </div>
        </div>

        <div class="icon-bar">
            <a href="home.php"><i class="fa fa-home"></i></a> 
            <a href="notifications.php"><i class="fa fa-bell"></i></a> 
            <a href="challenges.php"><i class="fa fa-flag-checkered"></i></a> 
            <a href="market.php"><i class="fa fa-shopping-cart"></i></a>
            <?php echo '<a href="profile.php?username='.$login_session.'"><i class="fa fa-user"></i></a>'?>
        </div>
    <script type="text/javascript" src="js/friends.js"/></script>
    </body>

</html>