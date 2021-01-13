<?php 
    include "../conn.php";
    $video_id = $_POST['video_id'];
    $sn = $_POST['songname'];
    $an = $_POST['artistname'];
    $albn = $_POST['albumname'];
    $cn = $_POST['catname'];
    $vt = $_POST['videothumb'];
    $b = $_POST['banner'];
    $insert = "INSERT INTO `addT30Video` (video_id, sn, an, albn, cn, vt, b) VALUE ('$video_id', '$sn', '$an', '$albn', '$cn', '$vt', '$b')";
    $res = mysqli_query($conn, $insert);
    if($res){
        echo 1;
    }else{
        echo 0;
        echo mysqli_error($conn);
    }
?>