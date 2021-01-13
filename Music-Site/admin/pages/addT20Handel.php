<?php 
    include "../conn.php";
    $song_id = $_GET['sid'];
    $tn = $_GET['tn'];
    $an = $_GET['an'];
    $ln = $_GET['ln'];
    $mn = $_GET['mn'];
    $st = $_GET['st'];
    $audio = $_GET['audio'];
    if($song_id != '' || $tn !='' || $an !='' || $ln !='' || $mn !='' || $st != '' || $audio != ''){
        $insert = "INSERT INTO `addT20` (song_id, tn, an, ln, mn, st, audio) VALUES ('$song_id', '$tn','$an','$ln','$mn', '$st', '$audio')";
        $res = mysqli_query($conn, $insert);
        if($res){
            echo "<script>alert('Top Song Added successfully')</script>";
            header('location: addT20.php');
        }else{
            echo "<script>alert('Failed To Upload Top Song..')</script>";
            echo mysqli_error($conn);
        }
    }else{
        echo "<script>alert('All Fields Are Empty!')</script>";
    }

?> 
<?php 
    include "../conn.php";
?>