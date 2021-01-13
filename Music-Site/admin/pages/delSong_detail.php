<?php 
    include "../conn.php";
    $del = $_POST['del_id'];

    $delete = "DELETE FROM `song_detail` WHERE song_id = '$del'";
    $res = mysqli_query($conn, $delete);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>