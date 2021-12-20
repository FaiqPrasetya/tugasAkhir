<?php 
session_start();

if($_SESSION['status'] != 'login') {
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/tableStyles.css">
</head>

<body>



    <table class="center" id="user">
        <a style="text-decoration: none; font-weight:bold; color:aliceblue;" href="home.php" style="text-align: left; margin-left: 5px;">Back</a>
        <h1>STRATS LIST</h1>
        <tr>
            <th>Strats id</th>
            <th>Strats Name</th>
            <th>Open Strats</th>
        </tr>

        <?php
        $mapname = $_GET['map_name'];
        require('backend/koneksi.php');

        $sql = "SELECT * FROM strats WHERE map_name = '$mapname'";
        $content = $connect->query($sql);

        while ($data = $content->fetch_assoc()) {

        ?>
            <tr>
                <td><?php echo $data['strats_id'] ?></td>
                <td><?php echo $data['strats_name'] ?></td>
                <td>
                    <a style="text-decoration: none; font-weight:bold; color:black;" href="map.php?strats_id=<?php echo $data['strats_id']; ?>">OPEN</a>
                </td>
            </tr>
        <?php
        } ?>
    </table>
</body>

</html>