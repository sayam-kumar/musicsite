<?php 
    include_once '../admin/conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Free Latest Punjabi Single Track</title>
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
        .header1{
            color: white;
            margin: 7px 0;
            padding: 7px;
            font-size: 11px;
            background: #2288ee;
            font-weight: 450;
            outline: 0.5px solid rgba(0, 0, 0, 0.466);
        }
        .freespace{
            height: 85px;
        }
        .newlatest_singletrack{
            /* use alternate height when we need adjust  */
            /* height: 390px; */
            height: auto;
            font-size: 11px;
        }
        .newlatest_singletrack p{
            cursor: pointer;
        }
        .newlatest_singletrack a{
            text-decoration: none;
            color: #3399FF;
        }
        .newlatest_singletrack span{
            color: #797979;
        }
        #breadcrumb{
            color: #3399FF;
        }
        #breadcrumb span{
            color: #797979;
        }
        .recommended{
            font-size: 11px;
        }
        .recommended p{
            color: red;
        }
        .recommended span{
            color: #3399FF;
        }
        #r{
            color: red;
        }
        #artistname{
            color: green;
        }
        #play{
            font-size: 11px;
            color: green;
        }
        #play span {
            color: #3399FF;
            cursor: pointer;
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
        #tn{
            color: #3399FF;
        }
    </style>
</head>
<body>
    <section>
        <header></header>
        <div class="advertisement">
            <p>Advertisement</p>
            <p style="font-weight: 400;" id="breadcrumb">Home &#187; Single Track &#187; <span>Latest Single Tracks</span></p>
        </div>
        <div class="header1">! Latest Single Tracks</div>
        <div class="recommended">
            <audio controls>
                <source src="horse.ogg" type="audio/ogg">
                <source src="horse.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
            </audio>              
        </div>
        <div class="newlatest_singletrack">
            <!-- Fetch data from database or use loop -->
            <?php
                // Pagination
                // Reuslt Per Page
                $result_per_page = 5;
                // Check how many rows in database
                $sql = "SELECT * FROM `song_detail`";
                $res = mysqli_query($conn, $sql);
                $number_of_rows = mysqli_num_rows($res);

                // total number of page available
                $number_of_pages = ceil($number_of_rows/$result_per_page);

                // visitor is currently on
                if(!isset($_GET['page'])){
                    $page = 1;
                }else{
                    $page = $_GET['page'];
                }

                // LIMIT starting number for the result on the displaying page
                $this_page_first_resutl = ($page-1)*$result_per_page;

                // Fetch Data From Database
                $sql = "SELECT * FROM `song_detail` LIMIT ".$this_page_first_resutl . ',' . $result_per_page;
                $res = mysqli_query($conn, $sql);
                while($daata = mysqli_fetch_assoc($res)){
                    $sid = $daata['song_id'];
                    $tn = $daata['trackname'];
                    $an = $daata['artistname'];
                    $audio = $daata['audio'];
                    echo "<hr><p><a id='nlink' href='songsingle_track.php?id=$sid&tn=$tn&an=$an'>
                    <b style='color:red;'>&#187; </b><span id='tn'>$tn</span><span style='color:#797979;'> [$an]</span></a></p>
                    <p id='play'>Play - <span id='48'>48kbps -</span><span id='128'>128kbps -</span><span id='320'>320kbps -</span><a href='../partials/audio/$daata[audio]' download='$daata[trackname] prog.com'> Download Original File</a></p>";
                }

                // Display link to the page
                for($page=1; $page<=$number_of_pages; $page++){
                    echo '<a href="newlatest_play&loud.php?page=' . $page . '" > '. $page .' </a>';
                }
            ?>
            
        </div>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="../index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>
