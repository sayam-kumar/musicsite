<?php 
    include "../admin/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Artist | Djpunjab</title>
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
            height: 114px;
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
            font-weight: 500;
            outline: 0.5px solid rgba(0, 0, 0, 0.466);
        }
        #query{
            margin-top: 12px;
        }
        select{
            margin-top: 8px;
        }
        .topartists{
            /* use alternate height when we need adjust  */
            /* height: 390px; */
            height: 570px;
            font-size: 11px;
        }
        .topartists p{
            color: red;
        }
        .topartists a{
            text-decoration: none;
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
    </style>
</head>
<body>
    <section>
        <header></header><hr>
        <div class="advertisement">
            <p>Advertisement</p>
        </div>
        <div class="header1">! Artist Type !</div>
        <div class="topselect">
            <select id="artist">
                <option value="topartist" selected>Top Artists</option>
                <option value="verified">Verified Artists</option>
            </select><br>
            <button id="query" type="submit">Submit Query</button><hr>
        </div>
        <div class="header2">! Top Artists !</div>
        <div class="topartists">
            <!-- loop -->
            <?php            
                $sql = "SELECT * FROM `top_artist`";
                $res = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <p>&#187; <a href="#"><?php echo $data['artist_name']; ?></a></p>
            <?php 
            }
            ?>
        </div><hr>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>