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
    <title>Admin List | Top 20 Song [week]</title>
</head>
<body>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>Song id</th>
                <th>Track Name</th>
                <th>Artist Name</th>
                <th>Lyrics Name</th>
                <th>Music Name</th>
                <th>Add T20 Song</th>
                <th>Month</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sql = "SELECT * FROM `song_detail`";
                $res = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <tr>
                <td><?php echo $data['song_id'];?></td>
                <td><?php echo $data['trackname'];?></td>
                <td><?php echo $data['artistname'];?></td>
                <td><?php echo $data['lyricsname'];?></td>
                <td><?php echo $data['musicname'];?></td>
                <td style="text-align: center; color:blue; cursor:pointer;">
                <a onclick="window.location.href='addT20Handel.php?sid=<?php echo $data['song_id'];?>&tn=<?php echo $data['trackname'];?>&an=<?php echo $data['artistname'];?>&ln=<?php echo $data['lyricsname'];?>&mn=<?php echo $data['musicname'];?>&st=<?php echo $data['songthumb']?>&audio=<?php echo $data['audio']?>'">Week</a>
                </td>
                <!-- window.location.href='addT30Handel.php?song_id=<?php echo $data['song_id'];?>' -->
                <td><a onclick="addMonth('<?php echo $data['song_id'];?>','<?php echo $data['trackname'];?>','<?php echo $data['artistname'];?>','<?php echo $data['lyricsname'];?>','<?php echo $data['musicname'];?>','<?php echo $data['audio'];?>','<?php echo $data['songthumb'];?>')">Month</a></td>
                <td style="color: red;"><a onclick="pDelete('<?php echo $data['song_id']?>')">Delete</a></td>
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
            <a href="addT20.php">View Top 20 Song List</a>
            <p style="padding: 0; margin:0;">Week</p>
        </div>
        <div class="col1">
            <a href="addT30Month.php">View Top 30 Song List</a>
            <p style="padding: 0; margin:0;">Monthly</p>
        </div>
    </div>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );

        function addMonth(id, tn, an, ln, mn, audio, st){
            var gid = id;
            var tn = tn;
            var an = an;
            var ln = ln;
            var mn = mn;
            var audio = audio;
            var st = st;

            $.ajax({
                url : "addT30Handel.php",
                type : "POST",
                data : {
                    song_id : gid,
                    tname : tn,
                    aname : an,
                    lname : ln,
                    mname : mn,
                    audio : audio,
                    st : st
                    },
                success : function(data){
                    if(data == 1){
                        alert("Song Added To TOP Month List");
                    }else if(data == 0){
                        alert("Unable Song Added to TOP Month List");
                    }
                },
                error : function(data){
                    alert(data);
                }
            })
        }

        function pDelete(del_id){
            var del = del_id;
            $.ajax({
                url : "delSong_detail.php",
                type : "POST",
                data : {
                    del_id : del,
                },
                success : function(data){
                    if(data == 1){
                        alert("Delete Successfully");
                        location.reload();
                    }else{
                        alert("Unable To Delete Recorde");
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