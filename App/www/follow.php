<?php
    $con = mysqli_connect("localhost","root","") or die ("could not connect");
    mysqli_select_db($con, "victorious_shots") or die ("could not find db");

        $followeruname = $_POST['follower'];
        $followeduname = $_POST['followed'];

            $query = mysqli_query($con, "insert into followers(follower, followed) values ('$followeruname', '$followeduname')");
            $count = mysqli_num_rows($query);

    exit();
?>