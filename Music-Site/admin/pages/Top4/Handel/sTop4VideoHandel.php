<?php 
    include "../../../conn.php";
    $v_id = $_POST['v_num'];
    $sn = $_POST['sn'];
    $an = $_POST['an'];
    $album = $_POST['albumn'];
    $video = $_POST['video'];
    $banner = $_POST['b'];

    $insert = "INSERT INTO `sTop4Video` (video_id, sn, an, albmn, videot, b) VALUES ('$v_id', '$sn', '$an', '$album', '$video', '$banner')";
    $res = mysqli_query($conn, $insert);
    if($res){
        echo 1;
    }else{
        echo mysqli_error($conn);
    }
?>