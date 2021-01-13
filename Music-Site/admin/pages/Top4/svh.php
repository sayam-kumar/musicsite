<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>SVH</title>
</head>
<style>
    section{
        width: 100%;
        padding: 1px;
        box-sizing: border-box;
        font-size: 11.5px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    header{
        color: #ffffff;
        width: 100%;
        height: 40px;
        background: black;
        border-bottom: 3px solid goldenrod;
        font-size: larger;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }
    .header1{
        color: white;
        margin: 7px 0;
        padding: 7px;
        font-size: 11px;
        background: #2288ee;
        font-weight: 450;
        outline: 0.5px solid rgba(0, 0, 0, 0.466);
    }
    .row{
        width: 100%;
        height: 89vh;
        background-color: green;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }
    .col1{
        width: 100%;
        height: 300px;
        display: flex;
        flex-direction: column;
        background: whitesmoke;
        overflow: auto;
    }
    .col2{
        width: 100%;
        height: 300px;
        display: flex;
        flex-direction: column;
        background: red;
        overflow: auto;
    }
    .col3{
        width: 100%;
        height: 300px;
        display: flex;
        flex-direction: column;
        background: gray;
        overflow: auto;
    }
    .col4{
        width: 100%;
        height: auto;
        display: flex;
        flex-direction: row;
        background: blue;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        text-align: left;
        padding: 15px;
    }
    tr{
        text-align: center;
    }
</style>
<body>
    <section>
        <header>S = Single Track  ||  V = Video  ||  H = Hindi</header>
        <div class="row">
            <div class="col1">
                <div class="header1">Single Tracks</div>
                <table style="width:100%">
                    <tr>
                        <th>S No.</th>
                        <th>TrackName</th>
                        <th>ArtistName</th>
                        <th>LyricsName</th>
                        <th>Add Top 4</th>
                    </tr>
                    <?php
                        include "../../conn.php";
                        $sno = 1;
                        $sql = "SELECT * FROM `song_detail`";
                        $res = mysqli_query($conn, $sql);
                        while($data = mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo $sno;?></td>
                        <td><?php echo $data['trackname']?></td>
                        <td><?php echo $data['artistname']?></td>
                        <td><?php echo $data['lyricsname']?></td>
                        <td><a style="cursor: pointer; color:blue; font-weight:bolder" onclick="addFour('<?php echo $data['song_id'];?>','<?php echo $data['trackname'];?>','<?php echo $data['artistname'];?>','<?php echo $data['lyricsname'];?>','<?php echo $data['musicname'];?>','<?php echo $data['audio'];?>','<?php echo $data['songthumb'];?>')">Add </a></td>
                    </tr>
                    <?php
                    $sno += 1;
                    }
                    ?>
                </table> 
            </div>
            <div class="col2">
                <div class="header1">Video Tracks</div>
                <table style="width:100%">
                    <tr>
                        <th>S No.</th>
                        <th>SongName</th>
                        <th>ArtistName</th>
                        <th>AlbumName</th>
                        <th>Add Top 4 Video</th>
                    </tr>
                    <?php
                        $video_sno = 1;
                        $video = "SELECT * FROM `video_detail`";
                        $result = mysqli_query($conn, $video);
                        while($dataa = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $video_sno;?></td>
                        <td><?php echo $dataa['songName']?></td>
                        <td><?php echo $dataa['artistName']?></td>
                        <td><?php echo $dataa['albumName']?></td>
                        <td><a style="cursor: pointer; color:blue; font-weight:bolder" onclick="addFourVideo('<?php echo $dataa['video_id'];?>','<?php echo $dataa['songName'];?>','<?php echo $dataa['artistName'];?>','<?php echo $dataa['albumName'];?>','<?php echo $dataa['videoThumb'];?>','<?php echo $dataa['banner'];?>')">Add </a></td>
                    </tr>
                    <?php
                    $video_sno += 1;
                    }
                    ?>
                </table>
            </div>    
            <div class="col3">
                <div class="header1">Top 4 [Week]</div>
                <table style="width:100%">
                    <tr>
                        <th>S No.</th>
                        <th>TrackName</th>
                        <th>ArtistName</th>
                        <th>LyricsName</th>
                        <th>Week Top 4</th>
                    </tr>
                    <?php
                        include "../../conn.php";
                        $week_sno = 1;
                        $week = "SELECT * FROM `song_detail`";
                        $week_res = mysqli_query($conn, $week);
                        while($week_data = mysqli_fetch_assoc($week_res)){
                    ?>
                    <tr>
                        <td><?php echo $week_sno;?></td>
                        <td><?php echo $week_data['trackname']?></td>
                        <td><?php echo $week_data['artistname']?></td>
                        <td><?php echo $week_data['lyricsname']?></td>
                        <td><a style="cursor: pointer; color:blue; font-weight:bolder" onclick="addWeek('<?php echo $week_data['song_id'];?>','<?php echo $week_data['trackname'];?>','<?php echo $week_data['artistname'];?>','<?php echo $week_data['lyricsname'];?>','<?php echo $week_data['musicname'];?>','<?php echo $week_data['audio'];?>','<?php echo $week_data['songthumb'];?>')">Add Top Week</a></td>
                    </tr>
                    <?php
                    $week_sno += 1;
                    }
                    ?>
                </table>
            </div>
        </div>
        <a href="sTop4Show.php">Top 4 Song</a>
        <a href="showTop4Video.php">Top 4 Video</a>
        <a href="showTop4Week.php">Top 4 Week</a>
    </section>
    <script>
        function addFour(id, tn, an, lyn, mn, audio, songthumb, ){
            var test = id;
            var tnt = tn;
            var aname = an;
            var lyname = lyn;
            var mname = mn;
            var audioo = audio;
            var songthumbb = songthumb;
            $.ajax({
                url : "Handel/stopHandel.php",
                type : "POST",
                data : {
                    song_sno : test,
                    trackname : tnt,
                    artistname : aname,
                    lyricsname : lyname,
                    musicname : mname,
                    a : audioo,
                    st : songthumbb,
                },
                success : function(data){
                    if(data == 1){
                        alert("Add successfully");
                    }else{
                        alert("Unable to add song");
                    }
                },
                error : function(data){
                    alert(data);
                }
            })
        }

        function addFourVideo(num, sn, an, albn, vt, b){
            var number = num;
            var songn = sn;
            var artistn = an;
            var albmn = albn;
            var videot = vt;
            var banner = b;
            $.ajax({
            url : "Handel/sTop4VideoHandel.php",
            type : "POST",
            data : {
                v_num : number,
                sn : songn,
                an : artistn,
                albumn : albmn,
                video : videot,
                b : banner,
            },
            success : function(data){
                if(data == 1){
                    alert("Video Add Successfully");
                }else{
                    alert(data);
                }
            },
            error : function(data){
                alert(data);
            }
        })
    }

    function addWeek(id, tn, an, lyn, mn, audio, songthumb, ){
            var test = id;
            var tnt = tn;
            var aname = an;
            var lyname = lyn;
            var mname = mn;
            var audioo = audio;
            var songthumbb = songthumb;
            $.ajax({
                url : "Handel/sTop4WeekHandel.php",
                type : "POST",
                data : {
                    song_sno : test,
                    trackname : tnt,
                    artistname : aname,
                    lyricsname : lyname,
                    musicname : mname,
                    a : audioo,
                    st : songthumbb,
                },
                success : function(data){
                    if(data == 1){
                        alert("Add successfully");
                    }else{
                        alert("Unable to add song");
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