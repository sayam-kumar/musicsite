<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Admin List | Top 30 Song [Month]</title>
</head>
<body>
    <h2 style="text-align: center;">TOP 30 SONG [MONTH]</h2>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>S No</th>
                <th>Track Name</th>
                <th>Artist Name</th>
                <th>Lyrics Name</th>
                <th>Music Name</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include "../conn.php";
                $sno = 1;
                $sql = "SELECT top_month_id, trackname, artistname, lyricsname, musicname, labelname FROM `song_detail`, `top30Month` WHERE song_detail.song_id = top30Month.song_id";
                $res = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <tr>
            <td><?php echo $data['top_month_id'];?></td>
                <td><?php echo $data['trackname'];?></td>
                <td><?php echo $data['artistname'];?></td>
                <td><?php echo $data['lyricsname'];?></td>
                <td><?php echo $data['musicname'];?></td>
                <td><button onclick="del(<?php echo $data['top_month_id'];?>)">Delete</button></td>
            </tr>
            <?php 
            $sno++;
            }
            ?>
            
        </tbody>
    </table>
    <a href="top20.php">Back</a>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
        function del(id){
            var del = id;
            $.ajax({
                url : "addD30.php",
                type : "POST",
                data : {id : del},
                success : function(data){
                    if(data == 1){
                        alert('Delete Successfully..');
                        location.reload();
                    }else{
                        alert('Unable To Delete Data');
                    }
                },
                error : function(data){
                    alert(data);
                }
            })
        }
    </script>
</body>
</html>