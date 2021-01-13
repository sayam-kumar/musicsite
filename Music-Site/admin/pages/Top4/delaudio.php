<?php 
    include "../../conn.php";
    $delete = $_POST['del_id'];
    $test = "DELETE FROM `stop4` WHERE sno = '$delete'";
    $res = mysqli_query($conn, $test);
    if($res){
        echo 1;
    }else{
        echo 0;
    }
?>