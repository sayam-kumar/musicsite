<?php
    include "../conn.php";
    $id = $_POST['w_id'];
    $sn = $_POST['songname'];
    $an = $_POST['artistname'];
    $albn = $_POST['albumname'];
    $cn = $_POST['catname'];
    $vt = $_POST['videothumb'];
    $b = $_POST['banner'];
    $insert = "INSERT INTO `addT20Video` (v_id, sn, an, albn, cn, vt, b) VALUE ('$id', '$sn', '$an', '$albn', '$cn', '$vt', '$b')";
    $res = mysqli_query($conn, $insert);
    if($res){
        echo 1;
    }else{
        echo mysqli_error($conn);
    }
?>