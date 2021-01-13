<?php 
    include "../conn.php";
    $fileimage = $_FILES['upImg']['name'];
    $temp_image = $_FILES['upImg']['tmp_name'];

    $fileaudio = $_FILES['audio']['name'];
    $temp_audio = $_FILES['audio']['tmp_name'];
    if(move_uploaded_file($temp_image, "../../partials/images/".$fileimage)){
        if(move_uploaded_file($temp_audio, "../../partials/audio/".$fileaudio)){
            $trackname = $_POST['trackname'];
            $artistname = $_POST['artistname'];
            $lyricsname = $_POST['lyricsname'];
            $musicname = $_POST['musicname'];
            $labelname = $_POST['labelname'];
            // $songthumb = $_POST['songthumb'];
            $insert = "INSERT INTO `song_detail` (trackname, artistname, lyricsname, musicname, labelname, songthumb, audio) VALUES ('$trackname', '$artistname', '$lyricsname','$musicname', '$labelname', '$fileimage', '$fileaudio')";
            $res = mysqli_query($conn, $insert);
            if($res){
                echo 1;
            }else{
                echo mysqli_error($conn);
            }
        }else{
            echo '<script>alert("Audio File Error...")</script>';
        }
    }else{
        echo '<script>alert("Image Error..")</script>';
    }
?>

