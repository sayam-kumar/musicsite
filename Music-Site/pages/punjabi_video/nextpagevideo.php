<!-- <?php 
    include "../../admin/conn.php";
    $code = $_GET['code'];
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);
    while($data = mysqli_fetch_assoc($res)){
        echo "$data[songName]";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['songName'] ?></title>
    <?php 
    }
    ?>
</head>
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
</style>
<body>
    <section>
        <header>djpunjab.com official</header><hr>
    </section>
</body>
</html> -->

<?php 
    include "../../admin/conn.php";
    $code = $_GET['code'];
    $sql = "SELECT * FROM `video_detail` WHERE video_id = '$code'";
    $res = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_assoc($res)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['songName'] ?></title>
    <style>
        section{
            width: 100%;
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
        .header1,
        .header2,
        .header4{
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
            width: 300px;
            height: 190px;
            display: flex;
            flex-direction: column;
            /* background: green; */
        }
        .col1 img{
            width: 300px;
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
            font-weight: 19px;
            color: green;
            font-weight: bolder;
        }
        .col2 span{
            color: #3399FF;
            font-weight: bold;
        }
        .downloadFormat p{
            color: #3399FF;
            font-size: 11px;
            cursor: pointer;
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
        #vid{
            padding: 5px 2px;
            /* background: gray; */
        }
        #vid a{
            color: #3399FF;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <section>
        <header style="color: white; display:flex;" >djpunjab.com official</header><hr>
        <div class="advertisement">
            <p style="font-weight: 400;" id="breadcrumb">Home &#187; Latest Video &#187; 
        </div>
        <div class="header1">Song Title Name </div>              
        </div>
        <div class="songdetail">
            <!-- Fetch data from database or use loop -->
            <div class="row">
                <div class="col1">
                    <img src="../../partials/video/videobanner/<?php echo $data['banner']?>" alt="Here is song banner.">
                </div>
                <div class="col2">
                    <p style="font-size:14px;"><span id="ta"><?php echo $data['songName']; ?></span></p>
                    <p>Artist: <span><?php echo $data['artistName']; ?></span></p>
                    <p>Album/Movie: <span><?php echo $data['albumName']; ?></span></p>
                    <a href="#">Share on whatsapp</a>
                </div>
            </div>
        </div>
        <div class="header2">Select Download Format</div>
        <div class="downloadFormat">
            <p id="vid"><a href="../../partials/video/<?php echo $data['videoThumb'];?>" download="<?php echo $data['songName']; ?> (prog.com)">Download HD Video <span>(720p HD)</span> </a></p>
            <p id="vid"><a href="../../partials/video/<?php echo $data['videoThumb'];?>" download="<?php echo $data['songName']; ?> (prog.com)">Download FULL HD Video <span>(1080p FHD)</span> </a></p>
            <?php 
        }
        ?>
    </div>
    <div class="header4">SnapShot</div>
    <div class="snapshot"><p style="color: gray;">No SnapShot Available</p></div>
    <div class="header3">Recommended Tracks For You</div>
    <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="../index.php">&#187; Home</a></p>
    <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>