<?php

if(isset($_POST["name"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=victorious_shots", "root", "");
 $query = "INSERT INTO images(tags) VALUES(:tags)";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':tags' => $_POST["tags"]
  )
 );
 $result = $statement->fetchAll();
 $output = '';
 if(isset($result))
 {
  $output = '
  <div class="alert alert-success">
   Your data has been successfully saved into System
  </div>
  ';
 }
 echo $output;
}

?>

