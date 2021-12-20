<?php

if($_SESSION['status'] != 'login') {
    header("location: index.php");
}

if($_SESSION['level'] != 1) {
    header("location: home.php");
}


include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

$sql = "INSERT INTO user(username, password, level)
    VALUES('$username', '$password', '$level')";

if (mysqli_query($connect, $sql)) {
    header('Location: ../table.php');
} else {
    header('Location: ../form_register.php');
    echo "<h2>Gagal!</h2><br>" . mysqli_error($connect);
}
mysqli_close($connect);
?>