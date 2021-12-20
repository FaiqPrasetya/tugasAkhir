<?php
session_start();

if($_SESSION['status'] != 'login') {
    header("location: index.php");
}
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
                if($_SESSION['level'] == 1) {
                    echo "<li><a href='form_register.php' class='nav-link'>Account Management</a></li>";
                    echo "<li><a href='#' class='nav-link'>Upload Strats</a></li>";
                }
                if($_SESSION['status'] == 'login') {
                    echo "<li><a href='backend/logout-broker.php' class='nav-link'>Logout</a></li>";
                }
            ?>
        </ul>
    </div>

    <!--  -->

    <!--  -->

    <div class="wrapper">
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href=""><b>ASCENT</b></a>
            </div>
            <img src="img/maps/ascent.png" alt="ascent" />
        </div>
        <div class="media">
            <div class="layer"> 
                <a style="text-decoration: none" href=""><b>BIND</b></a>
            </div>
            <img src="img/maps/bind.png" alt="bind" />
        </div>
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href=""><b>BREEZE</b></a>
            </div>
            <img src="img/maps/breeze.png" alt="breeze" />
        </div>
    </div>
    <div class="wrapper">
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href=""><b>FRACTURE</b></a>
            </div>
            <img src="img/maps/fracture.png" alt="fracture" />
        </div>
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href=""><b>HAVEN</b></a>
            </div>
            <img src="img/maps/haven.png" alt="haven" />
        </div>
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href=""><b>ICEBOX</b></a>
            </div>
            <img src="img/maps/icebox.png" alt="icebox" />
        </div>
    </div>
    <div class="wrapper">
        <div class="media">
            <div class="layer">
                <a style="text-decoration: none" href=""><b>SPLIT</b></a>
            </div>
            <img src="img/maps/split.png" alt="split" />
        </div>
    </div>
</body>

</html>