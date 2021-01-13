<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        #loading{ 
            display: none;
            padding: 8px;
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        #loading img{
            width: 400px;
            height: 450px;
        }
        section{
            width: 100%;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }
        h2{
            letter-spacing: 3px;
            text-align: center;
        }
        .row{
            width: 100%;
            display: flex;
            flex-direction: row;
            background: #000;
        }
        .col1{
            padding-bottom: 30px;
            font-size: 22px;
            width: 33.33%;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(0deg, rgb(11, 140, 229) 0%, rgb(11, 140, 229) 16.667%,rgb(36, 162, 230) 16.667%, rgb(36, 162, 230) 33.334%,rgb(62, 184, 232) 33.334%, rgb(62, 184, 232) 50.001000000000005%,rgb(87, 207, 233) 50.001%, rgb(87, 207, 233) 66.668%,rgb(113, 229, 235) 66.668%, rgb(113, 229, 235) 83.33500000000001%,rgb(138, 251, 236) 83.335%, rgb(138, 251, 236) 100.002%);
        }
        .col2{
            padding-bottom: 30px;
            font-size: 22px;
            width: 33.33%;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(0deg, rgb(11, 140, 229) 0%, rgb(11, 140, 229) 16.667%,rgb(36, 162, 230) 16.667%, rgb(36, 162, 230) 33.334%,rgb(62, 184, 232) 33.334%, rgb(62, 184, 232) 50.001000000000005%,rgb(87, 207, 233) 50.001%, rgb(87, 207, 233) 66.668%,rgb(113, 229, 235) 66.668%, rgb(113, 229, 235) 83.33500000000001%,rgb(138, 251, 236) 83.335%, rgb(138, 251, 236) 100.002%);
        }
        .col3{
            padding-bottom: 30px;
            font-size: 22px;
            width: 33.33%;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(0deg, rgb(11, 140, 229) 0%, rgb(11, 140, 229) 16.667%,rgb(36, 162, 230) 16.667%, rgb(36, 162, 230) 33.334%,rgb(62, 184, 232) 33.334%, rgb(62, 184, 232) 50.001000000000005%,rgb(87, 207, 233) 50.001%, rgb(87, 207, 233) 66.668%,rgb(113, 229, 235) 66.668%, rgb(113, 229, 235) 83.33500000000001%,rgb(138, 251, 236) 83.335%, rgb(138, 251, 236) 100.002%);
        }
        .row1{
            width: 100%;
            display: flex;
            flex-direction: row;
        }
        .col11{
            width: 33.33%;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .col11 input{
            margin-bottom: 18px;
            width: 70%;
        }
        .col11 button{
            width: 60%;
        }
        .col22{
            width: 33.33%;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: whitesmoke;
        }
        .col22 input{
            margin-bottom: 18px;
            width: 70%;
        }
        .col33{
            width: 33.33%;
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <section>
        <div id="loading">
            <!-- <p>Uploading Please Wait</p> -->
            <img src="https://thumbs.gfycat.com/EmptyHorribleEmperorshrimp-max-1mb.gif" alt="Uploading Image">
        </div>
        <h2>Admin Pannel</h2>
        <div class="row">
            <div class="col1">Top Artist</div>
            <div class="col2">Upload Music</div>
            <div class="col3">Upload Video</div>
        </div>
        <div class="row1">
            <div class="col11">
                <input type="text" name="artist" placeholder="Enter Artist Name" id="name"><br>

                <label for="verified">Verified</label>
                <input type="radio" name="verified" value="verified">
                <label for="verified">No-Verified</label>
                <input type="radio" id="" name="verified" value="noverified">
                <button type="submit" id="submit">Add</button>
            
            </div>
            <div class="col22">
                <form method="post" id="info_form">
                    <p style="padding: 3px">All Fields Are <strong>*Required</strong></p>
                    <label>Image </label>
                    <input type="file" name="upImg" id="upImg"><br>
                    
                    <input type="text" placeholder="Track/Song Name" name="trackname" id="trackname"><br>
                    <input type="text" placeholder="Artist Name" name="artistname" id="artistname"><br>
                    <input type="text" placeholder="Lyrics Name" name="lyricsname" id="lyricsname"><br>
                    <input type="text" placeholder="Music/Composer Name" name="musicname" id="musicname"><br>
                    <input type="text" placeholder="Label/Company Name" name="labelname" id="labelname"><br>
                    <label>Audio </label>
                    <input type="file" name="audio" id="audio">
                    <button type="submit" id="submit-btn">Upload Song</button>
                </form>
            </div>
            <div class="col33">
                <form method="post" id="v_upload">
                    <label for="upVideo">Video MP4</label><br>
                    <input type="file" name="upVideo" id="upVideo"><br>

                    <input type="text" name="songName" id="v_artistName" placeholder="Song Name"><br>
                    <input type="text" name="artistName" id="artistName" placeholder="Artist/Singer Name"><br>
                    <input type="text" name="albumName" id="albumName" placeholder="Album/Movie Name"><br>
                    <input type="text" name="catName" id="catName" placeholder="Category Name"><br>
                    <label for="banner">Video Banner</label><br>
                    <input type="file" name="banner" id="banner" placeholder="Video Banner"><br>
                    <button type="submit" id="submit-btn">Upload Video</button>
                </form>
            </div>
        </div>
        <style>
            .row2{
                width: 100%;
                height: 100px;
                background: gray;
                display: flex;
                flex-direction: row;
            }
            .col111,
            .col000{
                width: 33.33%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .col111 a,
            .col000 a{
                color: #000;
                padding: 5px 8px;
                text-decoration: none;
                background: whitesmoke;
            }
            .col111 p,
            .col000 p{
                padding-top: 5px;
            }
            .col222{
                width: 33.33%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .col222 a{
                color: #000;
                padding: 5px 8px;
                text-decoration: none;
                background: whitesmoke;
            }
            .col222 p{
                padding-top: 5px;
            }
        </style>
        <div class="row2">
            <div class="col000">
                <a href="pages/Top4/svh.php">Top S/V/H Pannel</a>
                <p>SingleTrack/Video/Hindi</p>
            </div>
            <div class="col111">
                <a href="pages/top20.php">Top 20 Song</a>
                <p>Week/Monthly</p>
            </div>
            <a href=""></a>
            <div class="col222">
                <a href="pages/top20video.php">Top 20 Video</a>
                <p>Week/Monthly</p>
            </div>
        </div>
    </section>
    <script>
        $(document).ajaxStart(function() {
            $("#loading").show();
        }).ajaxStop(function() {
            $("#loading").hide();
        });
        $('#submit').on("click", function(){
            var artistname = $('#name').val();
            var radioValue = $("input[name='verified']:checked").val();
            $.ajax({
                url : "pages/artistHandel.php",
                type : "POST",
                data : {
                    getartistname : artistname,
                    radio : radioValue
                    },
                success : function(data){
                    if(data == 1){
                        alert('Top Artist Name Upload Successfully');
                        reset();
                    }else(data == 0)
                        alert('Cannot Upload Top Artist Name');
                },
                error : function(data){
                    console.log(data);
                }
            });
        });

        $('#info_form').on("submit", function(e){
            e.preventDefault();
            var formdata = new FormData (this);
            $.ajax({
                url : "pages/uploadsongHandel.php",
                type : "POST",
                contentType : false,
                processData : false,
                data : formdata,
                success : function(data){
                    console.log(data);
                    if(data == 1){
                        alert('Song Upload Successfully');
                    }else{
                        // use while error occur other wise comment it.
                        // alert(data);
                        alert("Unable To Upload Song");
                    }
                },
                error : function(data){
                    alert(data);
                }
            });
        });

        $('#v_upload').on('submit',function(e){
            e.preventDefault();
            var vformdata = new FormData (this);
            $.ajax({
                url : "pages/uploadvideosongHandel.php",
                type : "POST",
                contentType : false,
                processData : false,
                data : vformdata,
                success : function(data){
                    console.log(data);
                    if(data == 1){
                        alert('video upload successfully');
                        $('#songName').val('');
                        $('#artistName').val('');
                        $('#catName').val('');
                        $('#albumName').val('');
                        $('#banner').val('');
                    }else if(data == 0){
                        alert('Unable To Upload Video');
                    }
                },
                error : function(data){
                    alert(data);
                }
            })
        })
    </script>
</body>
</html>