<?php 
    include '../admin/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 30 Single Track - DjPunjab.com</title>
    <style>
        section{
            width: 100%;
            padding: 1px;
            box-sizing: border-box;
            font-size: 11.5px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        header{
            width: 100%;
            height: 40px;
            background: black;
            border-bottom: 3px solid goldenrod;
        }
        .advertisement{
            height: auto;
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
            font-weight: 500;
            outline: 0.5px solid rgba(0, 0, 0, 0.466);
        }
        #query{
            margin-top: 12px;
        }
        select{
            margin-top: 8px;
        }
        .top20 p{
            color: #3399FF;
        }
        .top20 span{
            color: green;
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
        #breadcrumb{
            color: #3399FF;
        }
        #breadcrumb span{
            color: #797979;
        }
        .links{
            color: #3399FF;
        }
        .links p{
            font-size: 11px;
        }
        .links span{
            color: #797979;
        }
        #chngcolor{
            color: red;
        }
    </style>
</head>
<body>
    <section>
        <header></header><hr>
        <div class="advertisement">
            <p>Advertisement</p>
            <p id="breadcrumb">Home &#187; Single Track &#187; <span>Top 30 Tracks (Month)</span></p>
        </div>
        <div class="header1">! Artist Type !</div><hr>
        <div class="links">
            <p id="chngcolor">Type => <span>| single Track</span></p>
            <p><span>Zip File -> </span> 48kbps - 128kbps -320kbps</p>
            <p><span>One Click Download -> </span> 48kbps - 128kbps -320kbps</p>
            <hr>
        </div>
        <div class="top20">
            <!-- loop -->
            
            <?php
                // Pagination with php
                //S1 Define how many results you want per page
                $result_per_page = 2;
                
                // find out the number of result stored in database
                $sql = "SELECT * FROM `top30Month`";
                $res = mysqli_query($conn, $sql);
                $number_of_results = mysqli_num_rows($res);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <p onclick="window.location.href='songsingle_track.php?tn=<?php echo $data['tname']?>&id=<?php echo $data['song_id']?>&an=<?php echo $data['aname']?>'">&#187; <?php echo $data['tname']?><span> [<?php echo $data['aname']?>]</span></p>
            <?php
            }
            ?>
        </div><hr>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>