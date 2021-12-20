<?php 
session_start();

if($_SESSION['status'] != 'login') {
    header("location: index.php");
}

if($_SESSION['level'] != 1) {
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
    <form id="registration" action="./backend/register-broker.php" method="POST">
        <a href="home.php">Home</a>
        <a href="table.php">List User</a>
        <h3><b>User Registration</b></h3><br>
        <fieldset>
            <input placeholder="Username" type="text" name="username" tabindex="1" required autofocus autocomplete="off">
        </fieldset>
        <fieldset>
            <input placeholder="Password" type="password" name="password" tabindex="2" required autocomplete="off">
        </fieldset>
        <fieldset>
            <input placeholder="Level" type="number" name="level" tabindex="3" required autocomplete="off">
        </fieldset>
        <fieldset>
            <button name="submit" type="submit">Submit</button>
        </fieldset>
    </form>
</div>

</html>