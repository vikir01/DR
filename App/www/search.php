<?php
    $con = mysqli_connect("localhost","root","") or die ("could not connect");
    mysqli_select_db($con, "victorious_shots") or die ("could not find db");
    $output ='';

    if(isset($_POST['searchVal'])){
        $searchq = $_POST['searchVal'];
        if(strpos($searchq, '#') === 0){
            $query = mysqli_query($con, "SELECT image FROM images WHERE id in (SELECT img_id FROM tags WHERE tag='$searchq')") or die ("could not search");
            $count = mysqli_num_rows($query);
            if($count==0){
                $output = 'No results found.';
            }else{
                while($row = mysqli_fetch_array($query)){
                    $img = $row['image'];
                    $output .=  '<div class="divimgsearch"><img class="imgsearch" src="data:image/jpeg;base64,'.$img.'"></div>';
                }
            }
        }
        else{
            $query = mysqli_query($con, "SELECT * FROM registration WHERE username LIKE '%$searchq%'") or die ("could not search");
            $count = mysqli_num_rows($query);
            if($count==0){
                $output = 'No results found.';
            }else{
                while($row = mysqli_fetch_array($query)){
                    $uname = $row['username'];
                    $id = $row['id'];

                    $output .= '<div><a href="profile.php?username='.$uname.'">'.$uname.'</a></div>';
                }
            }
        }
    }
    print("$output");
?>