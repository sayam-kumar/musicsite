<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Single Track - DjPunjab</title>

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
        .freespace{
            height: auto;
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
            font-weight: 450;
            outline: 0.5px solid rgba(0, 0, 0, 0.466);
        }
        .searchtracks{
            height: auto;
            font-size: 10px;
        }
        .searchtracks input{
            width: 320px;
            margin-top: 15px;
        }
        .searchtracks button{
            padding: 8px 22px;
            color: white;
            background: #2288ee;
            border-radius: 10px;
            border: 0.1px solid #2288ee;
            box-shadow: 1px 2px 5px #000033;
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
        <div class="freespace"></div><hr>
        <div class="advertisement">
            <p>Advertisement</p>
        </div>
        <div class="header1">Search Single Tracks</div>
        <div class="searchtracks">
            <?php 
                
            ?>
            <input id="search" type="search" name="search" placeholder="DjPunjab Search">
            <!-- <button type="submit">Search</button> -->
        </div><hr>
        <div class="table">
            <p style="text-transform: capitalize;">No Recorde Found</p>
        </div>
        <p><a style="color:#3399FF; text-decoration: none; font-size: 11px;" href="index.php">&#187; Home</a></p>
        <div class="header5">DjPunjab.com (2020)</div>
    </section>
    <script>
        $('#search').on('keyup', function(){
            var searchTerm = $(this).val();
            $.ajax({
                url : "searchTerm.php",
                type : "post",
                data : {
                    search : searchTerm,
                },
                success : function(data){
                    $('.table').html(data);
                }
            });
        });
    </script>
</body>
</html>