<?php 
    include '../admin/conn.php';
    $search_value = $_POST['search'];

    $sql = "SELECT * FROM `song_detail` WHERE trackname LIKE '%{$search_value}%'";
    $res = mysqli_query($conn, $sql);
    $ot = "";
    if(mysqli_num_rows($res) > 0){
        while($data = mysqli_fetch_assoc($res)){
            echo $data['trackname']."<br>";
        }
    }else{
        echo 'no recorde found';
    }
?>