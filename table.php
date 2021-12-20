<?php 
session_start();

if($_SESSION['status'] != 'login') {
    header("location: index.php");
}

if($_SESSION['level'] != 1) {
    header("location: home.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./css/tableStyles.css">
</head>

<body>



    <table class="center" id="user">
        <a href="form_register.php" style="text-align: left; margin-left: 5px;">back</a>
        <h1>User List</h1>
        <tr>
            <th>id</th>
            <th>Username</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>

        <?php
        require('backend/koneksi.php');

        $sql = "SELECT * FROM user";
        $content = $connect->query($sql);

        while ($data = $content->fetch_assoc()) {

        ?>
            <tr>
                <td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['level'] ?></td>
                <td>
                    <a href="backend/delete_user.php?id=<?php echo $data['id']; ?>">Delete</a>
                    <a href="update_form.php?id=<?php echo $data['id']; ?>">Edit</a>
                </td>
            </tr>
        <?php
        } ?>
    </table>
</body>

</html>