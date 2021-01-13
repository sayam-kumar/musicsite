<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Top 20 Single Track - DjPunjab.com</title>
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
        #nlink{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <section>
        <header></header><hr>
        <div class="advertisement">
            <p>Advertisement</p>
            <p id="breadcrumb">Home &#187; Single Track &#187; <span>Top 20 Tracks (week)</span></p>
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
                include_once '../admin/conn.php';
                // Pagination 
                //S1 Define how many results you want per page
                $result_per_page = 5;

                // Find out the number of result stored in database
                $sql = "SELECT * FROM `addT20`";
                $res = mysqli_query($conn, $sql);
                $number_of_results = mysqli_num_rows($res);
                
                // Determine totalnuber of pages available
                $number_of_pages = ceil($number_of_results/$result_per_page);

                // Determine which page number visitor is currently on
                if(!isset($_GET['p'])){
                    $p = 1;
                }else{
                    $p = $_GET['p'];
                }
                // Determine the sql LIMIT starting number for the results on the displaying page
                $this_page_first_result = ($p-1)*$result_per_page;

                // Retrieve select result from database and display them on page
                $sql = "SELECT * FROM `addT20` LIMIT ". $this_page_first_result . ',' . $result_per_page;
                $res = mysqli_query($conn, $sql);
                while($daata = mysqli_fetch_assoc($res)){
                    $sid = $daata['song_id'];
                    $tn = $daata['tn'];
                    $an = $daata['an'];
                    echo "<p><a id='nlink' href='songsingle_track.php?id=$sid&tn=$tn&an=$an'>
                    <b style='color:red;'>&#187; </b><span>$tn</span><span style='color:#797979;'> [$an]</span></a></p>";
                }

                // display the links to the pages
                for($p=1; $p<=$number_of_pages; $p++){
                    echo '<a id="pagination" href="top20.php?p='. $p .'">' . $p . '</a>';
                }
            ?>
        </div><hr>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="../index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>