<?php 
    include "../conn.php";
    $delete_id = $_POST['d_id'];

    $del = "DELETE FROM `addT20Video` WHERE sno = '$delete_id'";
    $res = mysqli_query($conn, $del);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>