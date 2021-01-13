<?php 
    include "../admin/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A to Z Artist - DjPunjab</title>
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
        #breadcrumb{
            color: #3399FF;
        }
        #breadcrumb span{
            color: #797979;
        }
        .artistList{
            font-size: 11px;
        }
        .artistList p{
            color: red;
        }
        .artistList span{
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
        <header></header>
        <div class="advertisement">
            <p>Advertisement</p>
            <p style="font-weight: 400;" id="breadcrumb">Home &#187; Single Track &#187; <span>A to Z Artist Name</span></p>
        </div>
        <div class="header1">! A to Z Artist !</div>              
        </div>
        <div class="artistList">
            <!-- Fetch data from database or use loop -->
            <?php 
                include 'conn.php';
                $sql = "SELECT * FROM `top_artist` WHERE ";
            ?>
            <p>&#187; <span> A</span></p>
        </div>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="../index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
</body>
</html>