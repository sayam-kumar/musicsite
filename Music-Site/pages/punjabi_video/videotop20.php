<?php 
    include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Download Free Latest Top 20 Month Punjabi Video Songs</title>
    <style>
        section{
            width: 100%;
            padding: 1px;
            box-sizing: border-box;
            font-size: 11.5px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        header{
            color: white;
            width: 100%;
            height: 40px;
            font-weight: bold;
            padding-left: 8px;
            background: black;
            border-bottom: 5px solid #e4a915;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .advertisement p{
            color: rgb(195, 0, 0);
            font-size: 11px;
            font-weight: bold;
        }
        .header1{
            color: white;
            margin: 7px 0;
            padding: 7px;
            font-size: 11px;
            background: #2288ee;
            font-weight: bold;
            outline: 0.5px solid rgba(0, 0, 0, 0.466);
        }
        .latest_video{
            width: 100%;
            height: auto;
            display: flex;
            flex-direction: column;
        }
        .row{
            cursor: pointer;
            display: flex;
            flex-direction: row;
        }
        .col1{
            width: 150px;
            height: 90px;
            display: flex;
            flex-direction: row;
            padding-bottom: 3px;
        }
        .col1 video{
            width: 150px;
            height: 90px;
            display: flex;
            flex-direction: row;
        }
        .col2{
            padding-left: 4px;
            width: calc(100% - 150px);
            height: 90px;
            display: flex;
            flex-direction: column;
        }
        .col2 a{
            width:400px;
            color: #333333;
            font-weight: bold;
            text-decoration: none;
        }
        .col2 span{
            color: #ff0000;
        }
        .col2 p{
            margin-top: 4px;
            color: red;
        }
        .header5{
            color: white;
            margin: 10px 0 2px 0;
            padding: 9px 0;
            font-size: 11px;
            text-align: center;
            background: #797979;
            outline: 0.5px solid black;
            border-bottom: 2px solid #ff0000;
        }
        .row:nth-child(even){
            background-color: #f2f2f2;
        }
        .row:hover{
            background-color: #e7e4e4;
        }
    </style>
</head>
<body>
    <section>
        <header>djpunjab.com official</header><hr>
        <div class="advertisement">
            <p>Advertisement</p>
        </div>
        <div class="header1">! Latest Video</div>              
        </div>
        <div class="latest_video">
            <?php 
                    include "../../admin/conn.php";
                // $sql = "SELECT video_detail.songName, video_detail.artistName, video_detail.albumName, video_detail.catName, video_detail.videoThumb, video_detail.banner FROM video_detail RIGHT JOIN addT20Video ON video_detail.video_id = addT20Video.v_id";
                $sql = "SELECT * FROM `addT20Video` ORDER BY sno DESC";
                $res = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <div class="row" id="nextpagevideo" onclick="window.location.href='nextpagevideo.php?code=<?php echo $data['v_id'] ?>'">
                <div class="col1">
                    <img src="../../partials/video/videobanner<?php echo $data['b']?>">
            </div>
                <div class="col2">
                    <a href=""><?php echo $data['sn']?><span>[R]</span></a>
                    <p><?php echo $data['an']?></p>
                </div>
            </div>
            <?php 
            }
            ?>
        </div><hr>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="../index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
    <script>
    // $('#nextpagevideo').on("click", function(){
    //     $.ajax({
    //         url : "nextpagevideo.php",
    //         type : "POST",
    //     })
    // });
    </script>
</body>
</html>