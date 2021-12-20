<?php 
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE BINARY username='$username' and BINARY password='$password'";
    $data = mysqli_query($connect, $query);
    
    $row = mysqli_fetch_assoc($data);

    // Penentu level user
    if($row['level'] == 1) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        $_SESSION['level'] = 1;
        header('Location: ../home.php');
    } else if($row['level'] == 2){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        $_SESSION['level'] = 2;
        header('Location: ../home.php');
    } else {
        header('Location: ../index.php');
        echo 'Login gagal!';
    }
?>