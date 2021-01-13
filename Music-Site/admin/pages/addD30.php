<?php
    include "../conn.php";
    $delete_id = $_POST['id'];

    $del = "DELETE FROM `top30Month` WHERE top_month_id = '$delete_id'";
    $res = mysqli_query($conn, $del);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>