<?php
    include "../admin/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download Latest Punjabi Single Track</title>

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
        .latest_singletrack{
            height: auto;
            font-size: 10px;
        }
        .latest_singletrack p{
            color: red;
            cursor: pointer;
        }
        .latest_singletrack span{
            color: #3399FF;
            text-decoration: none;
        }
        .latest_singletrack .artist_name{
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
        #nlink{
            text-decoration: none;
        }
        #pagination{
            color: black;
            padding: 4px;
            margin-left: 15px;
            background: whitesmoke;
            text-decoration: none;
        }
        #pagination:hover{
            background: green;
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
        <div class="freespace"></div><hr>
        <div class="recommended">
            <p>[R] use for <span>Recommended Songs Only</span></p>
            <p>[v] use for Video Available</p>
        </div><hr>
        <div class="latest_singletrack">
            <!-- Fetch data from database or use loop -->
            <?php
                // pagination with php
                // define how many resutls you want per page
                $resut_per_page = 5;

                // find out the number of resutl stored in database
                $sql = "SELECT * FROM `song_detail` ORDER BY song_id DESC";
                $res = mysqli_query($conn, $sql);
                $number_of_results = mysqli_num_rows($res);

                // Determine total number of pages available
                $number_of_pages = ceil($number_of_results/$resut_per_page);   

                // determine which page number visitor is currently on
                if(!isset($_GET['page'])){
                    $page = 1;
                }else{
                    $page = $_GET['page']; 
                }

                // determine the sql LIMIT starting number for the results on the displaying page
                $this_page_first_result = ($page-1)*$resut_per_page;

                // Retrieve select results from database and display them on page
                $ssql = "SELECT * FROM `song_detail` LIMIT " . $this_page_first_result . ',' .$resut_per_page;
                $rres = mysqli_query($conn, $ssql);
                while($daata = mysqli_fetch_assoc($rres)){
                    $sid = $daata['song_id'];
                    $tn = $daata['trackname'];
                    $an = $daata['artistname'];
                    echo "<p><a id='nlink' href='songsingle_track.php?id=$sid&tn=$tn&an=$an'>
                    <b style='color:red;'>&#187; </b><span>$tn</span><span style='color:#797979;'> [$an]</span></a></p>";
                }

                // display the links to the pages
                for($page=1; $page<=$number_of_pages; $page++){
                    echo '<a id="pagination" href="latest_singletrack.php?page='. $page .'">'. $page .'</a>';
                }
            ?>
        </div>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="../index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>
