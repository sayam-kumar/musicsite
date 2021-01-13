<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function showdiv(){
            document.getElementById('alet').style.visibility = 'visible';
        }
        setTimeout("showdiv()", 3000);

        function hidediv(){
            document.getElementById('alet').style.visibility='hidden';
        }

        setTimeout("hidediv()", 13000);

    </script>
    <title>DjPunjab Clone</title>
    <link rel = "icon" href ="https://djpunjab.fm/images/logo-new.jpg" type = "image/x-icon"> 
    <style>
    section {
        width: 100%;
        padding: 1px;
        box-sizing: border-box;
        font-size: 11.5px;
        font-family: Verdana, Arial, Helvetica, sans-serif;
    }

    header {
        width: 100%;
        height: 40px;
        background: black;
        border-bottom: 3px solid goldenrod;
    }

    .box img {
        width: 220px;
        height: 300px;
    }

    .box p {
        color: rgba(0, 0, 0, 0.534);
        margin: 0;
        padding: 0;
        font-size: 12px;
        /* letter-spacing: 2px; */
    }

    .box span {
        color: green;
    }

    .box a {
        color: #3399ff;
        text-decoration: none;
    }

    .header1,
    .header2,
    .header3,
    .header4 {
        color: white;
        margin: 10px 0;
        padding: 7px;
        font-size: 11px;
        background: #3399FF;
        font-weight: bold;
        outline: 0.5px solid black;
        /* outline-offset: 0.2px; */
    }

    .topsong {
        width: 100%;
    }

    .topsong a {
        color: #3399FF;
        text-decoration: none;
    }

    .topsong span {
        color: red;
    }

    .topsong p {
        margin: 0;
        padding: 0;
        color: green;
    }

    .hinditrack {
        padding-top: -2;
    }

    ul {
        padding: 0;
        margin: 10px 0 5px 0px;
        color: #5d5d5d;
    }

    ul li {
        list-style: none;
    }

    .top20 {
        font-size: 11px;
    }

    .top20 ul li {
        list-style: none;
        padding: 5px;
    }

    .top20 ul li a {
        color: #3399ff;
        text-decoration: none;
    }

    .top20 input {
        width: 320px;
        margin-top: 15px;
    }

    .top20 button {
        padding: 8px 22px;
        color: white;
        background: #2288ee;
        border-radius: 10px;
        border: 0.1px solid #2288ee;
        box-shadow: 1px 2px 5px #000033;
    }

    .musiczone {
        font-size: 11px;
    }

    .musiczone ul li {
        padding: 5px;
        list-style: none;
    }

    .musiczone ul li a {
        color: #3399ff;
        text-decoration: none;
    }

    .musiczone span {
        color: red;
    }

    .contactus {
        font-size: 11px;
    }

    .contactus ul li {
        padding: 5px;
        list-style: none;
    }

    .contactus ul li a {
        color: #3399ff;
        text-decoration: none;
    }

    .contactus span {
        color: red;
    }

    .header5 {
        color: white;
        margin: 10px 0;
        padding: 9px 0;
        font-size: 11px;
        text-align: center;
        background: #797979;
        outline: 0.5px solid black;
        border-bottom: 2px solid #ff0000;
        /* outline-offset: 0.2px; */
    }

    h1 {
        color: #797979;
        font-size: 24px;
    }

    h2 {
        color: #797979;
    }

    h3 {
        color: #797979;
    }

    h4 {
        color: #797979;
    }

    a:hover {
        color: black;
        text-decoration: underline overline;
    }

    a:visited {
        color: #0099FF;
        font-size: 11px;
    }

    a:active {
        color: #0099FF;
        font-size: 11px;
    }

    .alert {
        position: relative;
    }

    .alert:before,
    .alert:after {
        z-index: -1;
        position: absolute;
        content: "";
        bottom: 25px;
        left: 10px;
        width: 50%;
        top: 80%;
        max-width: 300px;
        background: #777;
        -webkit-box-shadow: 0 35px 20px #777;
        -moz-box-shadow: 0 35px 20px #777;
        box-shadow: 0 35px 20px #777;
        -webkit-transform: rotate(-8deg);
        -moz-transform: rotate(-8deg);
        -o-transform: rotate(-8deg);
        -ms-transform: rotate(-8deg);
        transform: rotate(-8deg);
    }

    .alert:after {
        -webkit-transform: rotate(8deg);
        -moz-transform: rotate(8deg);
        -o-transform: rotate(8deg);
        -ms-transform: rotate(8deg);
        transform: rotate(8deg);
        right: 10px;
        left: auto;
    }

    .alertUpper {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 999;
    }

    .alert {
        width: 300px;
        height: auto;
        padding: 15px;
        text-align: justify;
        box-sizing: border-box;
        background: whitesmoke;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
    }

    .alert h4 {
        color: red;
        font-size: x-large;
    }

    .alert p {
        line-height: 30px;
        font-size: larger;
    }

    @media screen and (max-width: 321px){
        .alert{
            width: 300px;
            height: auto;
        }
    }

    </style>
</head>

<body>
    <section>
        <div class="alertUpper" id="alet" style="visibility: hidden;">
            <div class="alert" id="alet">
                <h4>Alert !</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus recusandae eligendi laudantium</p>
            </div>
        </div>
        <header>
            <img src="partials/djicon.png" alt="site icon">
        </header>
        <div class="box">
            <img src="partials/dj.jpeg" alt="site logo">
            <p>WelCome To <span>Mobile's Heaven</span></p>
            <p>Bookmark Sace As DjPunjab.Com - <a href="#">Disclaimer</a></p>
        </div>
        <div class="header1">Wed 01st December, 2020</div>
        <div class="topsong">
            <!-- Single Track -->
            <p>Single Track &#187;  
            <?php 
                include "admin/conn.php";
                $sql = "SELECT * FROM `stop4` LIMIT 4";
                $res = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <a onclick="window.location.href='pages/songsingle_track.php?id=<?php echo $data['song_sno']?>&tn=<?php echo $data['tn']?>&an=<?php echo $data['an']?>'"><?php echo $data['tn']?><span>[<?php echo $data['an']?>]</span></a> &#187; 
            <?php 
            }
            ?>
            <!-- Video songs -->
            <p>Punjabi Video &#187; 
            <?php 
                include "admin/conn.php";
                $video = "SELECT * FROM `sTop4Video` LIMIT 4";
                $video_res = mysqli_query($conn, $video);
                while($vdata = mysqli_fetch_assoc($video_res)){
            ?>
            <a onclick="window.location.href='pages/punjabi_video/nextpagevideo.php?code=<?php echo $vdata['video_id']?>'"><?php echo $vdata['sn']?><span>[<?php echo $vdata['an']?>]</span></a> &#187; 
            <?php 
            }
            ?>
            <!-- Hindi Track -->
            <p class="hinditrack">Top 4 Week &#187; 
            <?php 
                include "admin/conn.php";
                $week = "SELECT * FROM `sTop4Week` LIMIT 4";
                $week_res = mysqli_query($conn, $week);
                while($wdata = mysqli_fetch_assoc($week_res)){
            ?>
            <a onclick="window.location.href='pages/songsingle_track.php?id=<?php echo $wdata['song_id']?>&tn=<?php echo $wdata['tn']?>&an=<?php echo $wdata['an']?>'"><?php echo $wdata['tn']?><span>[<?php echo $wdata['an']?>]</span></a> &#187; 
            <?php 
            }
            ?>
            <ul>
                <li>&#187; <a href="#">All Updates </a>[Sometimes We Do Not Update on HomePage]</li>
            </ul>
        </div>
        <div class="header2">Shortcuts</div>
        <div class="top20">
            <ul>
                <li><a href="pages/top_artist.php">&#187; Top Artist</a></li>
                <li><a href="https://djbollywood.fm/">&#187; Top 20 Bollywood</a></li>
                <li><a href="pages/top20.php">&#187; Top 20 </a><span>[weekly]</span></li>
                <li><a href="pages/top30.php">&#187; Latest Top Punjabi Song</a><span>[Monthly]</span></li>
            </ul>
            <input type="search" name="search" placeholder="DjPunjab Search">
            <button type="submit">Search</button>
        </div>
        <div class="header3">Music Zone</div>
        <div class="musiczone">
            <ul>
                <li><a href="pages/single_track.php">&#187; Single Tracks</a></li>
                <li><a href="#">&#187; Bollywood Music</a></li>
                <li><a href="#">&#187; Singer Collection </a><span>[All Artist]</span></li>
                <li><a href="pages/punjabi_video/punjabi_video.php">&#187; Punjabi Video</a></li>
            </ul>
        </div>
        <div class="header4">Contact Us</div>
        <div class="contactus">
            <ul>
                <li><a href="pages/privacy/dcma.php">&#187; DMCA Policy </a><span>[Regarding CopyRight Content]</span>
                </li>
                <li><a href="#">&#187; Privacy Policy</a></li>
            </ul>
        </div>
        <div class="header5">A DjPunjab Team Creation (2020)</div>
        <h1>djpunjab songs 2020</h1>
        <h2>djpunjab new song</h2>
        <h3>dj punjab.com</h3>
        <h4>djpunjab top 20 songs</h4>
    </section>
</body>

</html>