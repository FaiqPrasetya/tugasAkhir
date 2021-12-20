<?php
session_start();

include 'koneksi.php';

if ($_SESSION['status'] != 'login') {
    header("location: index.php");
}

if ($_SESSION['level'] != 1) {
    header("Location: index.php");
}

$strats_id = $_GET['strats_id'];

$mapname = $_POST['map_name'];
$stratsNAME = $_POST['strats_name'];
$stratsDESC = $_POST['strats_desc'];

$A1 = $_POST['agent_one'];
$A1D = $_POST['agent_one_desc'];

$A2 = $_POST['agent_two'];
$A2D = $_POST['agent_two_desc'];

$A3 = $_POST['agent_three'];
$A3D = $_POST['agent_three_desc'];

$A4 = $_POST['agent_four'];
$A4D = $_POST['agent_four_desc'];

$A5 = $_POST['agent_five'];
$A5D = $_POST['agent_five_desc'];

if (isset($_POST['ubah_gambar'])) {
    $mapname = $_POST['map_name'];

    $stratsIMG = $_FILES['strats_image']['name'];
    $tmp = $_FILES['strats_image']['tmp_name'];
    $processedIMG = date('dmY') . $stratsIMG;
    $path = "../img/strats/" . $processedIMG;

    $stratsNAME = $_POST['strats_name'];
    $stratsDESC = $_POST['strats_desc'];

    $A1 = $_POST['agent_one'];
    $A1D = $_POST['agent_one_desc'];

    $A2 = $_POST['agent_two'];
    $A2D = $_POST['agent_two_desc'];

    $A3 = $_POST['agent_three'];
    $A3D = $_POST['agent_three_desc'];

    $A4 = $_POST['agent_four'];
    $A4D = $_POST['agent_four_desc'];

    $A5 = $_POST['agent_five'];
    $A5D = $_POST['agent_five_desc'];

    if (move_uploaded_file($tmp, $path)) {
        $query = "UPDATE strats SET map_name='$mapname',
                                      strats_image='$processedIMG',
                                      strats_name='$stratsNAME',
                                      strats_desc='$stratsDESC',
                                      agent_one='$A1',
                                      agent_one_desc='$A1D',
                                      agent_two='$A2',
                                      agent_two_desc='$A2D',
                                      agent_three='$A3',
                                      agent_three_desc='$A3D',
                                      agent_four='$A4',
                                      agent_four_desc='$A4D',
                                      agent_five='$A5',
                                      agent_five_desc='$A5D'
                                      WHERE strats_id = '$strats_id'";

        $sql = mysqli_query($connect, $query);

        if ($sql) {
            header("Location: ../strats.php");
        } else {
            echo "FAILED!" . mysqli_error($connect);
        }
    } else {
        echo "FAILED UPLOAD IMAGE!" . mysqli_error($connect);
    }
} else {
    $query = "UPDATE strats SET map_name='$mapname',
                                      strats_name='$stratsNAME',
                                      strats_desc='$stratsDESC',
                                      agent_one='$A1',
                                      agent_one_desc='$A1D',
                                      agent_two='$A2',
                                      agent_two_desc='$A2D',
                                      agent_three='$A3',
                                      agent_three_desc='$A3D',
                                      agent_four='$A4',
                                      agent_four_desc='$A4D',
                                      agent_five='$A5',
                                      agent_five_desc='$A5D'
                                      WHERE strats_id = '$strats_id'";

    $sql = mysqli_query($connect, $query);
    if ($sql) {
        header("Location: ../strats.php");
    } else {
        echo "FAILED AGAIN" . mysqli_error($connect);
    }
}
