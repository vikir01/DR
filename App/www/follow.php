<?php
    $con = mysqli_connect("localhost","root","") or die ("could not connect");
    mysqli_select_db($con, "victorious_shots") or die ("could not find db");

        $followeruname = $_POST['followed'];
        $followeduname = $_POST['follower'];
        $notification = " Hey! ".$followeruname." just followed you!";

            $query = mysqli_query($con, "insert into followers(followed, follower) values ('$followeduname', '$followeruname')");
            $count = mysqli_num_rows($query);

            $querynotifications = mysqli_query($con,"insert into notifications(username, notification) values ('$followeduname', '$notification')");

    exit();
?>