<?php 
    include "../conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <title>Admin List | Top 20 Song [week]</title>
</head>
<body>
    <h2 style="text-align: center;">TOP 20 SONG [WEEK]</h2>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Song id</th>
                <th>Track Name</th>
                <th>Artist Name</th>
                <th>Lyrics Name</th>
                <th>Music Name</th>
                <th>Delelte</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $sno = 1;
                $sql = "SELECT * FROM `addT20`";
                $res = mysqli_query($conn, $sql);
                while($data = mysqli_fetch_assoc($res)){
            ?>
            <tr>
                <td><?php echo $sno;?></td>
                <td><?php echo $data['song_id'];?></td>
                <td><?php echo $data['tn'];?></td>
                <td><?php echo $data['an'];?></td>
                <td><?php echo $data['ln'];?></td>
                <td><?php echo $data['mn'];?></td>
                <td><a onclick="window.location.href='addD20.php?del_id=<?php echo $data['song_id']; ?>'">Delete</a></td>
            </tr>
            <?php
            $sno += 1; 
            }
            ?>
        </tbody>
    </table>
    <a href="top20.php">Back</a>
    <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>