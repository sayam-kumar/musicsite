<?php 
    include "../../conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Show Top 4 Song</title>
</head>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th {
        text-align: left;
    }
</style>
<body>
    <table style="width:100%">
        <tr>
            <th>S No.</th>
            <th>Track Name</th>
            <th>Artist Name</th>
            <th>Delete</th>
        </tr>
        <?php 
            $sno = 1;
            $sql = "SELECT * FROM `stop4`";
            $res = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <td><?php echo $sno?></td>
            <td><?php echo $data['tn']?></td>
            <td><?php echo $data['an']?></td>
            <td><a onclick="delete4('<?php echo $data['sno']; ?>')">Delete</a></td>
        </tr>
        <?php
        $sno += 1;
        }
        ?>
    </table>
    <script>
        function delete4(id){
            var test = id;
            $.ajax({
                url : "delaudio.php",
                type : "POST",
                data : {
                    del_id : test,
                },
                success : function(data){
                    if(data == 1){
                        alert("Recorde Deleted..");
                        location.reload();
                    }else{
                        alert("Unable to Delete Recorde");
                    }
                },
                error : function(data){
                    alert(data);
                }
            })
        }
    </script>
</body>
</html>