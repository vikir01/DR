<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

if (!empty($username) || !empty($password) || !empty($email)) {
  	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "victorious_shots";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {

     $SELECT = "SELECT username From registration Where username = ? Limit 1";
     $INSERT = "INSERT Into registration (username, password, email) values(?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sss", $username, $password, $email);
      $stmt->execute();
      header("location: /");
      // $message = "Account created successfully!";
      // echo "<script type='text/javascript'>alert('$message');</script>";

      
      // $myfile = fopen("log in h.php", "a+") or die("Unable to open file!");
      // echo fread($myfile,filesize("log in h.php"));
      // fclose($myfile);
     }
     else {
      $message1 = "Username is already taken!";
      echo "<script type='text/javascript'>alert('$message1');</script>";

      $myfileagain = fopen("sign up.html", "a+") or die("Unable to open file!");
      echo fread($myfileagain,filesize("sign up.html"));
      fclose($myfileagain);
     }
     $stmt->close();
     $conn->close();
    }
} else {
    echo "All fields are required";
 die();
}
?>