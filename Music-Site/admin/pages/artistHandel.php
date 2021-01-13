<?php 
    include "../conn.php";
    $artistName = $_POST['getartistname'];
    $verify = $_POST['radio'];
    
    $insert = "INSERT INTO `top_artist` (artist_name, verify) VALUES ('$artistName', '$verify')";
    $res = mysqli_query($conn, $insert);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>