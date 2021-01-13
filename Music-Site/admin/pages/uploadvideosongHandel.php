<?php 
    include "../conn.php";
    $videofile = $_FILES['upVideo']['name'];
    $temp_video = $_FILES['upVideo']['tmp_name'];
    $banner = $_FILES['banner']['name'];
    $temp_banner = $_FILES['banner']['tmp_name'];
    if(move_uploaded_file($temp_video, '../../partials/video/'.$videofile)){
        if(move_uploaded_file($temp_banner, '../../partials/video/videobanner/'.$banner)){
            $songName = $_POST['songName'];
            $artistName = $_POST['artistName'];
            $albumName = $_POST['albumName'];
            $catName = $_POST['catName'];
            $insert = "INSERT INTO `video_detail` (songName, artistName, albumName, catName, videoThumb, banner) VALUES ('$songName', '$artistName', '$albumName', '$catName', '$videofile', '$banner')";
            $res = mysqli_query($conn, $insert);
            if($res){
                echo 1;
            }else{
                echo 0;
            }
        }else{
            echo "<script>alert('Banner File Error')</script>";
        }
    }else{
        echo "<script>alert('Video File Error')</script>";
    }
?>