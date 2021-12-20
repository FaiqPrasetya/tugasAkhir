<?php
session_start();
$id = $_GET['id'];

if ($_SESSION['status'] != 'login') {
    header("location: index.php");
}

if ($_SESSION['level'] != 1) {
    header("location: home.php");
}
?>
<html>

<head>
    <link rel="stylesheet" href="css/formStyles.css">
    <style>
        #registration a {
            margin-right: 5px;
        }
    </style>
</head>

<div class="container">
    <form id="registration" action="./backend/update-broker.php" method="GET">

        <?php
        require('backend/koneksi.php');

        $sql = "SELECT * FROM user WHERE id= '$id'";
        $content = $connect->query($sql);

        while ($data = $content->fetch_assoc()) {

        ?>

            <a href="table.php">Cancel</a>
            <h3><b>Update </b><?php echo $data['username'] ?></h3><br>
            <fieldset>
                <p>ID</p>
                <input placeholder="ID" type="text" value="<?php echo $data['id'] ?>" name="id" tabindex="1">
            </fieldset>
            <fieldset>
                <p>Username</p>
                <input placeholder="Username" type="text" value="<?php echo $data['username'] ?>" name="username" tabindex="2" required autofocus autocomplete="off">
            </fieldset>
            <fieldset>
                <p>password</p>
                <input placeholder="Password" type="password" value="<?php echo $data['password'] ?>" name="password" tabindex="3" required autocomplete="off">
            </fieldset>
            <fieldset>
                <p>level</p>
                <input placeholder="Level" type="number" value="<?php echo $data['level'] ?>" name="level" tabindex="4" required autocomplete="off">
            </fieldset>
            <fieldset>
                <button name="btnEdit" value="Edit data" type="submit">Submit</button>
            </fieldset>

        <?php
        }
        ?>
    </form>
</div>

</html>