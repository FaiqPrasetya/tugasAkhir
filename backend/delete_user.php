<?php
if($_SESSION['status'] != 'login') {
    header("location: index.php");
}

if($_SESSION['level'] != 1) {
    header("location: home.php");
}

include 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id = '$id'";
$data = mysqli_query($connect, $sql);
if ($data) {
    header("location: ../table.php");
    echo "<h2>User Deleted</h2>";
} else {
    header("location: ../table.php");
    echo "<h2>User deletion failed</h2><br>" . mysqli_error($connect);
}
?>