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

        <body style="background-color: white">

        <h4 style="color:pink; text-align: center; font-size: 30px; margin-bottom: -15px; margin-top: 15px;"><i>Challenges</i></h4>

        <div class="icon-bar">
            <a href="home.php"><i class="fa fa-home"></i></a> 
            <a href="notifications.php"><i class="fa fa-bell"></i></a> 
            <a href="challenges.php"><i class="fa fa-flag-checkered"></i></a> 
            <a href="market.php"><i class="fa fa-shopping-cart"></i></a>
            <?php echo '<a href="profile.php?username='.$login_session.'"><i class="fa fa-user"></i></a>'?>
        </div>

        <div id="flowersModal" class="modal">
          <div class="modal-content">
            <span id="closeflowersModal" class="close">&times;</span>
            <p class="p">Make a picture as close as possible to the one below.</p>
            <p class="p">Click on the photo to add your own photography.</p>
            <!-- <img class="modalImages" src="img/challenge1_1.jpg" alt="error"> -->
            <form class="formmodal" method="POST" enctype="multipart/form-data">
                <br>
                <input type="file" name="image" id="fileflowersModal" class="inputfile" onChange="displayImageFlowers(this)" class="form-control" style="display: none;">
                <label for="file"><img src="img/challenge1_1.jpg" onClick="triggerClickFlowers()" class="modalImages" class="modalimages" id="profileDisplaymyModalFlowers"></label>
                <input type="hidden" name="username" value="<?php echo $login_session; ?>" />
                <input type="hidden" name="challenge" value="flowers" />
                <input class="upload" type="submit" name="submit" value="Upload" id="salammyModalFlowers">
            </form>
          </div>
        </div>
        <div id="catsModal" class="modal">
          <div class="modal-content">
            <span id="closecatsModal" class="close">&times;</span>
            <p class="p">Make a picture as close as possible to the one below.</p>
            <p class="p">Click on the photo to add your own photography.</p>
            <!-- <img class="modalImages" src="img/challenge6_1.jpg" alt="error"> -->
            <form class="formmodal" method="POST" enctype="multipart/form-data">
                <br>
                <input type="file" name="image" id="filecatsModal" class="inputfile" onChange="displayImageCats(this)" class="form-control" style="display: none;">
                <label for="file"><img src="img/challenge6_1.jpg" onClick="triggerClickCats()" class="modalImages" class="modalimages" id="profileDisplaymyModalCats"></label>
                <input type="hidden" name="username" value="<?php echo $login_session; ?>" />
                <input type="hidden" name="challenge" value="cats" />
                <input class="upload" type="submit" name="submit" value="Upload" id="salammyModalCats">
            </form>
          </div>
        </div>
        <div id="dogsModal" class="modal">
          <div class="modal-content">
            <span id="closedogsModal" class="close">&times;</span>
            <p class="p">Make a picture as close as possible to the one below.</p>
            <p class="p">Click on the photo to add your own photography.</p>
            <!-- <img class="modalImages" src="img/challenge7_1.jpg" alt="error"> -->
            <form class="formmodal" method="POST" enctype="multipart/form-data">
                <br>
                <input type="file" name="image" id="filedogsModal" class="inputfile" onChange="displayImageDogs(this)" class="form-control" style="display: none;">
                <label for="file"><img src="img/challenge7_1.jpg" onClick="triggerClickDogs()" class="modalImages" class="modalimages" id="profileDisplaymyModalDogs"></label>
                <input type="hidden" name="username" value="<?php echo $login_session; ?>" />
                <input type="hidden" name="challenge" value="dogs" />
                <input class="upload" type="submit" name="submit" value="Upload" id="salammyModalDogs">
            </form>
          </div>
        </div>

        <div style="margin-bottom: 70px;">
            <div class="challenges">
                <img class="challengeImages" src="img/challenge1.jfif">
                <div class="info">
                    <p>Flowers</p>
                    <button class="join" id="joinflowers">Join</button>
                </div>
            </div>
            <div class="challenges">
                <img class="challengeImages" src="img/challenge6.jpg">
                <div class="info">
                    <p>Cats</p>
                    <button class="join" id="joincats">Join</button>
                </div>
            </div>
            <div class="challenges">
                <img class="challengeImages" src="img/challenge7.jpg">
                <div class="info">
                    <p>Dogs</p>
                    <button class="join" id="joindogs">Join</button>
                </div>
            </div>
        </div>
        <?php
        function saveimage($username, $challenge, $image){
          $con = mysqli_connect("localhost", "root", "");
          mysqli_select_db($con, "victorious_shots");
          $qry = "insert into challenges(username, challenge, image) values ('$username','$challenge', '$image')";
          // $qry = "update registration set cover='$cover' where username='".$login_session."'";

          $result = mysqli_query($con, $qry);
          $imgid = mysqli_insert_id($con);

          if($result)
          {
            $message1 = "Image uploaded.";
            echo "<script type='text/javascript'>alert('$message1');</script>";
          }
          else
          {
            $message2 = "Image not uploaded.";
            echo "<script type='text/javascript'>alert('$message2');</script>";
          }
        }
        if(isset($_POST['submit']))
        {

              $info = @getimagesize($_FILES['image']['tmp_name']);
                if($info == FALSE)
                {
                   $message = "Please select an image.";
                   echo "<script type='text/javascript'>alert('$message');</script>";
                }
                else
                {
                  $image = addslashes($_FILES['image']['tmp_name']);
                  $name = addslashes($_FILES['image']['name']);
                  $image = file_get_contents($image);
                  $image = base64_encode($image);
                  $username = $_REQUEST['username'];
                  $challenge = $_REQUEST['challenge'];

                  saveimage($username, $challenge, $image);
              }

        }
          
          
        ?>

        <script type="text/javascript" src="js/challenges.js"/></script>
    </body>

</html>