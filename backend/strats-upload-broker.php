<?php 
    include "koneksi.php";

    $mapname = $_POST['map_name'];

    $stratsIMG = $_FILES['strats_image']['name'];
    $processedIMG = date('dmY').$stratsIMG;
    $path = "../img/strats/".$processedIMG;
    $tmp = $_FILES['strats_image']['tmp_name'];

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

    if(move_uploaded_file($tmp, $path)) {
        $sql = "INSERT INTO strats(map_name, 
                                   strats_image,
                                   strats_name,
                                   strats_desc,
                                   agent_one,
                                   agent_one_desc,
                                   agent_two,
                                   agent_two_desc,
                                   agent_three,
                                   agent_three_desc,
                                   agent_four,
                                   agent_four_desc,
                                   agent_five,
                                   agent_five_desc)
                VALUES('$mapname',
                       '$processedIMG',
                       '$stratsNAME',
                       '$stratsDESC',
                       '$A1',
                       '$A1D',
                       '$A2',
                       '$A2D',
                       '$A3',
                       '$A3D',
                       '$A4',
                       '$A4D',
                       '$A5',
                       '$A5D')";
        $sql = mysqli_query($connect, $sql);

        if($sql) {
            header("location: ../strats.php");
        } else {
            echo "Upload Error!" . mysqli_error($connect);
            echo "<br><a href='../strats_add.php'>Kembali Ke Form</a>";
        }
    } else {
        echo "Image Upload Error!" . mysqli_error($connect);
        echo "<br><a href='../strats_add.php'>Kembali Ke Form</a>";
    }


?>