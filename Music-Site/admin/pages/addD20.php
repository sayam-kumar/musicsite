<?php 
    include "../conn.php";
    $delete_id = $_GET['del_id'];

    $del = "DELETE FROM `addT20` WHERE song_id = '$delete_id'";
    $res = mysqli_query($conn, $del);
    if($res){
        echo "<script>alert('Data Deleted Successfully..')</script>";
        header("location: addT20.php");
    }else{
        echo "<script>alert('!...No Data Deleted...! ')</script>";
    }
?>