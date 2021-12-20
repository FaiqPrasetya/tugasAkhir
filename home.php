<?php
session_start();

?>

<html>

<head>
    <link rel="stylesheet" href="./css/homeStyles.css">
    <link rel="stylesheet" href="./css/extrahomeStyles.css">
</head>

<body>

    <div class="nav">
        <ul>
            <li><a href="index.php" class="nav-link">Home</a></li>
            <?php
            if ($_SESSION['level'] == 1) {
                echo "<li><a href='form_register.php' class='nav-link'>Account Management</a></li>";
                echo "<li><a href='strats.php' class='nav-link'>Upload Strats</a></li>";
            }
            if ($_SESSION['status'] == 'login') {
                echo "<li><a href='backend/logout-broker.php' class='nav-link'>Logout</a></li>";
            }
            ?>
        </ul>
    </div>

    <!--  -->

    <?php
    require('backend/koneksi.php');

    $sql = "SELECT * FROM maps";
    $content = $connect->query($sql);

    $data = mysqli_fetch_array($content);

    ?>

    <!--  -->

    <div class="wrapper">
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href="mappage.php?map_name=<?php echo $data['map_name'] = 'ascent' ?>"><b>ASCENT</b></a>
            </div>
            <img src="img/maps/ascent.png" alt="ascent" />
        </div>
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href="mappage.php?map_name=<?php echo $data['map_name'] = 'bind' ?>"><b>BIND</b></a>
            </div>
            <img src="img/maps/bind.png" alt="bind" />
        </div>
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href="mappage.php?map_name=<?php echo $data['map_name'] = 'breeze' ?>"><b>BREEZE</b></a>
            </div>
            <img src="img/maps/breeze.png" alt="breeze" />
        </div>
    </div>
    <div class="wrapper">
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href="mappage.php?map_name=<?php echo $data['map_name'] = 'fracture' ?>"><b>FRACTURE</b></a>
            </div>
            <img src="img/maps/fracture.png" alt="fracture" />
        </div>
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href="mappage.php?map_name=<?php echo $data['map_name'] = 'haven' ?>"><b>HAVEN</b></a>
            </div>
            <img src="img/maps/haven.png" alt="haven" />
        </div>
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href="mappage.php?map_name=<?php echo $data['map_name'] = 'icebox' ?>"><b>ICEBOX</b></a>
            </div>
            <img src="img/maps/icebox.png" alt="icebox" />
        </div>
    </div>
    <div class="wrapper">
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href="mappage.php?map_name=<?php echo $data['map_name'] = 'split' ?>"><b>SPLIT</b></a>
            </div>
            <img src="img/maps/split.png" alt="split" />
        </div>
    </div>
</body>

</html>