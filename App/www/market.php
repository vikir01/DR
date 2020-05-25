<?php 
    include('session.php');
?>
<!DOCTYPE html>
<html>

    <head>
        
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <link rel="stylesheet" type="text/css" href="css/market style.php">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script type="text/javascript">

            // Search function
            function searchq(){
                var searchTxt = $("input[name='search']").val();
                if(searchTxt.length == 0){
                    $("#output").html('');
                }
                else{
                    $.post("search.php", {searchVal: searchTxt}, function(output){
                        $("#output").html(output);
                    });
                }
            }

        </script>

        <title>Victorious Shots</title>

    </head>

    <body style="background-color: white">

        <!-- Search bar -->
        <div class="wrap">
            <div class="search">
                <form action="market.php" method="POST">
                    <input type="text" name="search" class="searchTerm" placeholder="Search..." onkeyup="searchq();">
                    <a class="unames" href="friends.php" id="frbutt"><i class="fa fa-group"></i></a>
                </form>
            </div>

        </div>

        <!-- Displaying the results from the search -->
        <div id="output"></div>

        <!-- Navigation bar -->
        <div class="icon-bar">
            <a href="home.php"><i class="fa fa-home"></i></a> 
            <a href="notifications.php"><i class="fa fa-bell"></i></a> 
            <a href="challenges.php"><i class="fa fa-flag-checkered"></i></a> 
            <a href="market.php"><i class="fa fa-shopping-cart"></i></a>
            <?php echo '<a href="profile.php?username='.$login_session.'"><i class="fa fa-user"></i></a>'?>
        </div>
    </body>

</html>