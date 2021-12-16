<?php  
  
session_start();  
require('koneksi.php');  
  
if(isset($_POST) && !empty($_POST['id'])){  
  
        $sql = "DELETE FROM strats WHERE id = ".$_POST['id'];  
        $mysqli->query($sql);  
  
        $_SESSION['success'] = 'Image deleted.';  
        header("Location: ");  
}else{  
    $_SESSION['error'] = 'Error';  
    header("Location: ");  
}
?>