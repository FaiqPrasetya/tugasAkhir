<?php
include 'koneksi.php';
$id = $_GET['id'];
$username = $_GET['username'];
$password = $_GET['password'];
$level = $_GET['level'];
$encryptedPass = md5($password);
$sql = "UPDATE user set username='$username',
password='$encryptedPass', level='$level' WHERE id='$id'";
$data = mysqli_query($connect, $sql);

if ($data) {
    echo "<h2>Update Success</h2>";
    // header("Location: ../table.php");
} else {
    echo "<h2>Update Failed </h2><br>" . mysqli_error($connect);
    // header("Location: ../table.php");
}
?>