<?php 
    include "../admin/conn.php";
    $trackname = $_GET['tn'];
    $artistname = $_GET['an'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $trackname. " ". $artistname?></title>
    <style>
        section{
            width: 100%;
            padding: 1px;
            box-sizing: border-box;
            font-size: 11.5px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        header{
            width: 100%;
            height: 40px;
            background: black;
            border-bottom: 3px solid goldenrod;
        }
        .advertisement p{
            color: rgb(195, 0, 0);
            font-size: 11px;
            font-weight: bold;
        }
        .header1,
        .header2{
            color: white;
            margin: 7px 0;
            padding: 7px;
            font-size: 11px;
            background: #2288ee;
            font-weight: 450;
            outline: 0.5px solid rgba(0, 0, 0, 0.466);
        }
        #breadcrumb{
            color: #3399FF;
        }
        #breadcrumb span{
            color: #797979;
        }
        .artistList{
            width: 100%;
            font-size: 11px;
            display: flex;
            flex-direction: column;
        }
        .row{
            width: 100%;
            height: 190px;
            display: flex;
            flex-direction: row;
        }
        .col1{
            width: 170px;
            display: flex;
            flex-direction: column;
            /* background: green; */
        }
        .col1 img{
            width: 170px;
            height: 190px;
        }
        .col2{
            width: calc(100% - 170px);
            font-size: 11px;
            display: flex;
            flex-direction: column;
        }
        .col2 p{
            padding: 0;
            margin: 4px;
        }
        .col2 a{
            color: white;
            text-decoration: none;
            padding: 6px 4px;
            margin: 20px 4px 0 2px;
            font-size: 11px;
            background: #16b508;
            width: 100px;
        }
        #ta{
            color: red;
            font-weight: bold;
        }
        .col2 span{
            color: #3399FF;
            font-weight: bold;
        }
        .downloadFormat p{
            color: #3399FF;
            font-size: 11px;
            /* font-weight: bold; */
        }
        .downloadFormat span{
            color: #797979;
        }
        .header3{
            color: #f34444;
            margin: 7px 0;
            padding: 7px;
            font-size: 11px;
            background: #efefef;
            font-weight: 450;
            outline: 0.5px solid rgba(0, 0, 0, 0.466);
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
    </style>
</head>
<body>
    <section>
        <header></header><hr>
        <div class="advertisement">
            <p>Advertisement</p>
            <p style="font-weight: 400;" id="breadcrumb">Home &#187; Latest Single Track &#187; <span><?php echo $trackname. " ". $artistname?></span></p>
        </div>
        <div class="header1">Song Title Name </div>              
        </div>
        <div class="songdetail">
            <!-- Fetch data from database or use loop -->
            <div class="row">
                <div class="col1">
                <?php 
                        $sid = $_GET['id'];
                        $sql = "SELECT * FROM `song_detail` WHERE song_id = '$sid'";
                        $res = mysqli_query($conn, $sql);
                        while($data = mysqli_fetch_assoc($res)){
                    ?>
                    <img src="../partials/images/<?php echo $data['songthumb'];?>" alt="Here is song banner.">
                </div>
                <div class="col2">
                    <p>Track: <span id="ta"><?php echo $data['trackname']; ?></span></p>
                    <p>Artist: <span><?php echo $data['artistname']; ?></span></p>
                    <p>Lyrics: <span><?php echo $data['lyricsname']; ?></span></p>
                    <p>Music: <span><?php echo $data['musicname']; ?></span></p>
                    <p>Label: <span><?php echo $data['labelname']; ?></span></p>
                    <a href="#">Share on whatsapp</a>
                </div>
            </div>
        </div>
        <?php echo $data['audio'];?>
        <div class="header2">Select Download Format</div>
        <div class="downloadFormat">
            <del><p>Download in 48 Kbps <span>[2.33 MB]</span></p>
            <p>Download in 128 Kbps <span>[5.52 MB]</span></p>
            <p>Download in 320 Kbps <span>[9.22MB]</span></p><br></del>
            <p><a href="../partials/audio/<?php echo $data['audio'];?>" download="<?php echo $trackname; ?> prog.com">Download Origianl File</a></p>
            <?php 
            }
            ?>
        </div>
        <div class="header3">Recommended Tracks For You</div>
        
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="../index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>