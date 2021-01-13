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
    <title>Admin List | Top 20 Video [week]</title>
</head>
<style>
#center{
    text-align: center;
}
</style>
<body>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Video id</th>
                <th>Song Name</th>
                <th>Artist Name</th>
                <th>Album Name</th>
                <th>Category Name</th>
                <th>Add T20 Video</th>
                <th>Month</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sno = 1; 
                $sql = "SELECT * FROM `video_detail`";
                $res = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <tr id="center" >
                <td><?php echo $sno ?></td>
                <td><?php echo $data['video_id'];?></td>
                <td><?php echo $data['songName'];?></td>
                <td><?php echo $data['artistName'];?></td>
                <td><?php echo $data['albumName'];?></td>
                <td><?php echo $data['catName'];?></td>
                <?php 
                    $sno += 1;
                ?>
                <td style="color: blue; cursor:pointer;"><a onclick="addWeek('<?php echo $data['video_id'];?>','<?php echo $data['songName'];?>','<?php echo $data['artistName'];?>','<?php echo $data['albumName'];?>','<?php echo $data['catName'];?>','<?php echo $data['videoThumb'];?>','<?php echo $data['banner'];?>')">Week</a></td>
                <td style="color: blue; cursor:pointer;"><a onclick="addMonth('<?php echo $data['video_id'];?>','<?php echo $data['songName'];?>','<?php echo $data['artistName'];?>','<?php echo $data['albumName'];?>','<?php echo $data['catName'];?>','<?php echo $data['videoThumb'];?>','<?php echo $data['banner'];?>')">Month</a></td>
            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <style>
        .row{
            width: 100%;
            height: 50px;
            background: gray;
            display: flex;
            flex-direction: row;
        }
        .col1{
            width: 33.33%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .col1 a{
            color: white;
            text-decoration: none;
            background-color: green;
            padding: 5px 8px;
        }
    </style>
    <div class="row">
        <div class="col1">
            <a href="showT20Video.php">View Top 20 Video List</a>
            <p style="padding: 0; margin:0;">Week</p>
        </div>
        <div class="col1">
            <a href="showT30Video.php">View Top 30 Video List</a>
            <p style="padding: 0; margin:0;">Monthly</p>
        </div>
    </div>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

        function addWeek(id, sn, an, albn, cn, vt, b){
            var wid = id;
            var songname = sn;
            var artistname = an;
            var albumname = albn;
            var catname = cn;
            var videothumb = vt;
            var banner = b;
            $.ajax({
                url : "addT20VideoHandel.php",
                type : "POST",
                data : {
                    w_id : wid,
                    songname : songname,
                    artistname : artistname,
                    albumname : albumname,
                    catname : catname,
                    videothumb : videothumb,
                    banner : banner,
                },
                success : function(data){
                    if(data == 1){
                        alert('Top 20 Week Added Successfully');
                    }else{
                        alert(data)
                    }
                },
                error : function(data){
                    alert(data);
                }
            })
        }

        function addMonth(id, sn, an, albn, cn, vt, b){
            var vid = id;
            var songname = sn;
            var artistname = an;
            var albumname = albn;
            var catname = cn;
            var videothumb = vt;
            var banner = b;
            $.ajax({
                url : "addT30VideoHandel.php",
                type : "POST",
                data : {
                    video_id : vid,
                    songname : songname,
                    artistname : artistname,
                    albumname : albumname,
                    catname : catname,
                    videothumb : videothumb,
                    banner : banner,
                    },
                success : function(data){
                    if(data == 1){
                        alert("Song Added To TOP Month List");
                    }else{
                        alert(data);
                        alert("Unable Song Added to TOP Month List");
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

<!------------------- Useable Code ------------------>
<!-- &tn=<?php echo $data['trackname'];?>&an=<?php echo $data['artistname'];?>&ln=<?php echo $data['lyricsname'];?>&mn=<?php echo $data['musicname'];?>&st=<?php echo $data['songthumb']?>&audio=<?php echo $data['audio']?>' -->