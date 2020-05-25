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
        <link rel='stylesheet' type='text/css' href='css/style.php' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <title>Victorious Shots</title>

    </head>

    <body style="background-color: white">

    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn"><i class='fas fa fa-gear alt'></i></button>
      <div id="myDropdown" class="dropdown-content">
        <?php if($login_session==$queries['username']):?>
        <button id="myBtnPro">Profile picture</button>
        <button id="myBtnCov">Cover</button>
        <?php endif; ?>
        <a href="log out.php">Log out</a>
      </div>
    </div>
    
    <div id="myModalPro" class="modalpro">
      <div class="modal-content-pro">
        <p style="color:pink; font-size: 20px; margin-bottom: 0px;">Please select a photo.</p>
        <span class="closepro">&times;</span>
              <form method="POST" enctype="multipart/form-data">
                <br>
                
                <input type="file" name="image" id="filemyModalPro" class="inputfile" onChange="displayImagePro(this)" class="form-control" style="display: none;">

                <label for="file"><img src="img/blank.jpg" onClick="triggerClickPro()" class="modalimages" id="profileDisplaymyModalPro"></label>

                <br>
                <input type="hidden" name="username" value="<?php echo $login_session; ?>" />
                <input type="hidden" name="actiontype" value="profile" />
                <input class="upload" type="submit" name="submit" value="Upload" id="idModalPro">
              </form>

      </div>
    </div>

      
     <div id="myModalCov" class="modalcov">
      <div class="modal-content-cov">
        <p style="color:pink; font-size: 20px; margin-bottom: 0px;">Please select a photo.</p>
        <span class="closecov">&times;</span>
              <form method="POST" enctype="multipart/form-data">
                <br>
                
                <input type="file" name="image" id="filemyModalCov" class="inputfile" onChange="displayImageCov(this)" class="form-control" style="display: none;">

                <label for="file"><img src="img/blank.jpg" onClick="triggerClickCov()" class="modalimages" id="profileDisplaymyModalCov"></label>

                <br>
                <input type="hidden" name="username" value="<?php echo $login_session; ?>" />
                <input type="hidden" name="actiontype" value="cover" />
                <input class="upload" type="submit" name="submit" value="Upload" id="idModalCov">
              </form>
      </div>
     </div>

    <?php
      function displayimagecov($login_session)
      {
        $con = mysqli_connect("localhost", "root", "");
        mysqli_select_db($con, "victorious_shots");
        $qry = "select cover from registration where username='".$login_session."' ";
        $result = mysqli_query($con, $qry);
        $row = mysqli_fetch_array($result);
        echo '<img class="imgA1" id="myImg" src="data:image/jpeg;base64,'.$row[0].'" style="width:100%; max-width:3000px;">';
        mysqli_close($con);
      }

      displayimagecov($queries['username']);
    ?>

    <div id="myModal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
      <div id="caption"></div>
    </div>

    <div class="tab">
      <?php
        function displayimagepro($login_session)
        {
          $con = mysqli_connect("localhost", "root", "");
          mysqli_select_db($con, "victorious_shots");
          $qry = "select profile from registration where username='".$login_session."' ";
          $result = mysqli_query($con, $qry);
          $row = mysqli_fetch_array($result);
          echo '<img id="up" class="imgB1" src="data:image/jpeg;base64,'.$row[0].'">';
          mysqli_close($con);
        }
        displayimagepro($queries['username']);
      ?>

      <div class="tab-inner">
        <div class="buttons">
          <button class="tablinks" onclick="openTab(event, 'Bio')" id="defaultOpen">Bio</button>
          <button class="tablinks" onclick="openTab(event, 'Level')">Level</button>
          <button class="tablinks" onclick="openTab(event, 'Badges')">Badges</button>
        </div>
        <div class="content">
          <div id="Bio" class="tabcontent">
            <br>
            <br>
            <p id="welcome">@<?php echo $queries['username']; ?></p>
          </div>
          <div id="Level" class="tabcontent">    
            <br>
            <br>
            <p>Here goes your level.</p> 
          </div>
          <div id="Badges" class="tabcontent">
            <br>
            <br>
            <p>These are your badges.</p>
          </div>
        </div> 
      </div>
    </div>

    <div>
      <?php if($login_session==$queries['username']):?>
          <button id="myBtnCamera"><i class="fa fa-camera"></i></button>

          <div id="myModalMain" class="modalmain">

            <div class="modal-content-main">
              <p style="color:pink; font-size: 20px; margin-bottom: 0px;">Please select a photo.</p>
              <span class="closemain">&times;</span>
              <form method="POST" enctype="multipart/form-data">
                <br>
                
                <input type="file" name="image" id="filemyModalMain" class="inputfile" onChange="displayImageMain(this)" class="form-control" style="display: none;">

                <label for="file"><img src="img/blank.jpg" onClick="triggerClickMain()" class="modalimages" id="profileDisplaymyModalMain"></label>
                <br>
                <input type="text" id="tags" name="tags">
                <br>
                <input type="hidden" name="username" value="<?php echo $login_session; ?>" />
                <input type="hidden" name="actiontype" value="images" />
                <input class="upload" type="submit" name="submit" value="Upload" id="idModalMain">
              </form>

              </div>
            </div>
            <?php else:?>
                <button class="followbutt" onclick="<?php echo 'followuser(\''.$queries['username'].'\', \''.$login_session.'\');' ?>"><i class="fas fa-user-plus"></i></button>

            <?php endif;?>     

      <?php
        if(isset($_POST['submit']))
        {
            switch ($_POST['actiontype']) {

               case 'profile':
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
                          saveimagepro($image, $username, $login_session);
                      }
                   break;

               case 'cover':
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
                          saveimagecov($image, $username, $login_session);
                        }
                   break;

                case 'images':

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
                          $tags = $_REQUEST['tags'];
                          saveimage($name, $image, $username, $tags);
                        }
                  break;
            }
          
          
        }
        displayimage($queries['username']);

        function saveimagepro($profile, $username, $login_session){
          $con = mysqli_connect("localhost", "root", "");
          mysqli_select_db($con, "victorious_shots");
          $qry = "update registration set profile='$profile' where username='".$login_session."'";

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

        function saveimagecov($cover, $username, $login_session){
          $con = mysqli_connect("localhost", "root", "");
          mysqli_select_db($con, "victorious_shots");
          $qry = "update registration set cover='$cover' where username='".$login_session."'";

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

        function saveimage($name, $image, $username, $tags)
        {
          $con = mysqli_connect("localhost", "root", "");
          mysqli_select_db($con, "victorious_shots");
          $qry = "insert into images(name, image, username) values ('$name', '$image', '$username')";
          $result = mysqli_query($con, $qry);
          $imgid = mysqli_insert_id($con);
          $tagsexplode = explode(" ", $tags);
          for($i = 0; $i < count($tagsexplode); $i++){
            $qrytags = "insert into tags(img_id, tag) values ('$imgid', '$tagsexplode[$i]')";
            $resulttags = mysqli_query($con, $qrytags);
          }
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

        function displayimage($login_session)
        {
          $con = mysqli_connect("localhost", "root", "");
          mysqli_select_db($con, "victorious_shots");
          $qry = "select * from images where username='".$login_session."' order by id desc";
          $result = mysqli_query($con, $qry);
          echo '<div class="cont">';

          while($row = mysqli_fetch_array($result))
          {
            echo '<div class="idiv">';
            echo '<img class="i" src="data:image/jpeg;base64,'.$row[2].'">';
            $qrytag = "select * from tags where img_id=".$row[0]."";
            $res = mysqli_query($con, $qrytag);
            echo '</div>';

          }


          echo '</div>';
          mysqli_close($con);
        }
      ?>
    </div>


    <div class="icon-bar">
        <a href="home.php"><i class="fa fa-home"></i></a>
        <a href="notifications.php"><i class="fa fa-bell"></i></a> 
        <a href="challenges.php"><i class="fa fa-flag-checkered"></i></a> 
        <a href="market.php"><i class="fa fa-shopping-cart"></i></a>
        <a href="<?php 'profile.php?username='.$login_session ?>"><i class="fa fa-user"></i></a>
    </div>

    <script type="text/javascript" src="js/profile.js"/></script>

    </body>

</html>