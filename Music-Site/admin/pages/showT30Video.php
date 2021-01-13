<?php 
    include "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Admin List | Top 30 Video [Month]</title>
</head>
<body>
    <h2 style="text-align: center;">TOP 30 VIDEO [MONTH]</h2>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Song Name</th>
                <th>Artist Name</th>
                <th>Album Name</th>
                <th>Cat Name</th>
                <th>Delelte</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sno = 1;
                // $test = "SELECT video_detail.songName, video_detail.artistName, video_detail.albumName, video_detail.catName, video_detail.videoThumb, video_detail.banner
                // FROM video_detail
                // RIGHT JOIN addT30Video ON video_detail.video_id=addT30Video.video_id";
                $test = "SELECT * FROM `addT30Video`";
                $res = mysqli_query($conn, $test);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <tr>
                <td><?php echo $sno;?></td>
                <td><?php echo $data['sn'];?></td>
                <td><?php echo $data['an'];?></td>
                <td><?php echo $data['albn'];?></td>
                <td><?php echo $data['cn'];?></td>
                <td style="color: blue;"><a onclick="dellVid('<?php echo $data['sno'] ?>')">Delete</a></td>
                <?php
                $sno += 1;
                }
                ?>
            </tr>
        </tbody>
    </table>
    <a href="top20.php">Back</a>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

        function dellVid(num){
            var test = num;
            $.ajax({
                url : "addD30Video.php",
                type : "POST",
                data : {
                    d_id : test,
                },
                success : function(data){
                    if(data == 1){
                        alert('Delete Successfully..');
                        location.reload();
                    }else{
                        alert("Error While Deleting Data ")
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