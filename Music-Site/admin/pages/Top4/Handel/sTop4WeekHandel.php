<?php
    include "../../../conn.php";
    $song_id = $_POST['song_sno'];
    $tn = $_POST['trackname'];
    $an = $_POST['artistname'];
    $lyn = $_POST['lyricsname'];
    $mn = $_POST['musicname'];
    $audio = $_POST['a'];
    $songt = $_POST['st'];
    
    $insert = "INSERT INTO `sTop4Week` (song_id, tn, an, lyn, mn, audio, songthumb) VALUES ('$song_id', '$tn', '$an', '$lyn', '$mn', '$audio', '$songt')";
    $res = mysqli_query($conn, $insert);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>