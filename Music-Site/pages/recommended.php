<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Single Track Song DjPunjab</title>
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
        .recommended{
            /* use alternate height when we need adjust  */
            /* height: 390px; */
            height: auto;
            font-size: 11px;
        }
        .recommended p{
            color: red;
        }
        .recommended a{
            text-decoration: none;
            color: #3399FF;
        }
        .recommended span{
            color: #797979;
        }
        #artistname{
            color: green;
        }
        #r{
            color: red;
        }
        #breadcrumb{
            color: #3399FF;
        }
        #breadcrumb span{
            color: #797979;
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
            <p style="font-weight: 400;" id="breadcrumb">Home &#187; Single Track &#187; <span>Recommended</span></p>
        </div>
        <div class="header1">! Latest Single Tracks</div>              
        </div>
        <div class="recommended">
            <!-- Fetch data from database or use loop -->
            <?php
                include '../admin/conn.php';
                // Result per page
                $result_per_page = 8;

                // number of result stored in data
                $sql = "SELECT * FROM `song_detail`";
                $res = mysqli_query($conn, $sql);
                $number_of_result = mysqli_num_rows($res);

                // $number of total page available
                $number_of_pages = ceil($number_of_result/
                $result_per_page);
                
                // which page number visitor is currently on
                if(!isset($_GET['page'])){
                    $page = 1;
                }else{
                    $page = $_GET['page'];
                }

                // Formula 
                $this_page_first_result = ($page-1)*$result_per_page;

                // Retrive data form database with LIMIT

                $sql = "SELECT * FROM `song_detail` LIMIT " . $this_page_first_result . ',' . $result_per_page;
                $res = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($res)){
                    $sid = $data['song_id'];
                    $tn = $data['trackname'];
                    $an = $data['artistname'];
                    echo "<p><a id='nlink' href='songsingle_track.php?id=$sid&tn=$tn&an=$an'>
                    <b style='color:red;'>&#187; </b><span id='tn' >$tn</span><span style='color:#797979;'> [$an]</span></a></p>";
                }
                // Display link in the page
                for($page=1;$page<=$number_of_pages;$page++){
                    echo '<a href="recommended.php?page=' . $page . '" >'.$page.'</a>';
                }
            ?>
        </div>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="../index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>