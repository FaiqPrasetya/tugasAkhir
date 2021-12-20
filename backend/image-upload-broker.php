<?php  
  
session_start();

if ($_SESSION['status'] != 'login') {
    header("location: index.php");
  }
  
  if ($_SESSION['level'] != 1) {
    header("Location: index.php");
  }

require('koneksi.php');  
  
if(isset($_POST) && !empty($_FILES['strats_image']['name']) && !empty($_POST['strats_name'])){  
  
    $mapid = $_GET['map_id'];
    $a1 = $_GET['agent_one'];
    $a2 = $_GET['agent_two'];
    $a3 = $_GET['agent_three'];
    $a4 = $_GET['agent_four'];
    $a5 = $_GET['agent_five'];

    $ad1 = $_GET['agent_one_desc'];
    $ad2 = $_GET['agent_two_desc'];
    $ad3 = $_GET['agent_three_desc'];
    $ad4 = $_GET['agent_four_desc'];
    $ad5 = $_GET['agent_five_desc'];

    $name = $_FILES['strats_image']['name'];  
    list($txt, $ext) = explode(".", $name);  
    $strats_name = time().".".$ext;  
    $tmp = $_FILES['strats_image']['tmp_name'];  
  
    if(move_uploaded_file($tmp, '../image/'.$strats_name)){  
  
        $sql = "INSERT INTO strats (map_id, strats_image, strats_name, strats_desc,
                                    agent_one, agent_one_desc, agent_two, agent_two_desc,
                                    agent_three, agent_three_desc, agent_four, agent_four_desc,
                                    agent_five, agent_five_desc) 
                VALUES ('".$mapid."','".$strats_name."','".$_POST['strats_name']."','". $_POST['strats_desc'] ."',
                        '".$a1."','".$ad1."','".$a2."','".$ad2."','".$a3."','".$ad3."','".$a4."','".$ad4."','".$a5."','".$ad5."',)";  
        $mysqli->query($sql);  
  
        $_SESSION['success'] = 'Uploading of image is successfully.';  
        header("Location: ");  
    }else{  
        $_SESSION['error'] = 'Uploading of image is failed';  
        header("Location: ");  
    }  
}else{  
    $_SESSION['error'] = 'Please Select Image or Write title';  
    header("Location: ");  
}
