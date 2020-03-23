<?php
	include('log in.php'); // Includes Login Script
	if(isset($_SESSION['login_user'])){
		header("location: home.php"); // Redirecting To Profile Page
	}
?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: https://ssl.gstatic.com 'unsafe-eval'; style-src 'self' 'unsafe-inline'; media-src *; img-src 'self' data: content:;">
        <meta name="format-detection" content="telephone=no">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <link rel="stylesheet" type="text/css" href="css/log in.css">

        <title>Victorious Shots</title>
    </head>

    <body style="background-color: pink">

		<div id="log-in">

			<form action="" method="POST">

				<div class="log-in-form">

					<label for="username">Username</label>
						<input class="blank" type="text" placeholder="Enter username" name="username" required>

					<label for="password">Password</label>
						<input class="blank" type="password" placeholder="Enter password" name="password" required>

					<input class="butt" name="submit" type="submit" value="Log in">

				</div>

			</form>
		</div>

	</body>

</html>