<?php

include "koneksi.php";
if ($_SESSION['status'] != 'login') {
  header("location: index.php");
}

if ($_SESSION['level'] != 1) {
  header("Location: index.php");
}

$strats_id = $_GET['strats_id'];

$query = "SELECT * FROM strats WHERE strats_id='$strats_id'";
$sql = mysqli_query($connect, $query); 
$data = mysqli_fetch_array($sql); 

if(is_file("../img/strats/".$data['strats_image'])) 
  unlink("../img/strats/".$data['strats_image']); 

$query2 = "DELETE FROM strats WHERE strats_id='$strats_id'";
$sql2 = mysqli_query($connect, $query2); 
if($sql2){ 
  
  header("location: ../strats.php"); // Redirect ke halaman index.php
}else{
  
  echo "Data gagal dihapus. <a href='../strats.php'>Kembali</a>" . mysqli_error($connect);
}
?>