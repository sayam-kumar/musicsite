<?php 
    include "../conn.php";
    $song_id = $_POST['song_id'];
    $track_n = $_POST['tname'];
    $artist_n = $_POST['aname'];
    $lyrics_n = $_POST['lname'];
    $music_n = $_POST['mname'];
    $audio = $_POST['audio'];
    $song_thumb = $_POST['st'];

    $insert = "INSERT INTO `top30Month` (song_id, tname, aname, lname, mname, audio, st) VALUE ('$song_id', '$track_n', '$artist_n', '$lyrics_n', '$music_n', '$audio','$song_thumb')";
    $res = mysqli_query($conn, $insert);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>