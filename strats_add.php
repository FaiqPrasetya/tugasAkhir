<?php 
session_start();

if ($_SESSION['status'] != 'login') {
  header("location: index.php");
}

if ($_SESSION['level'] != 1) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>BIG BRAIN STRATS</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">

</head>

<style>
  body {
    font-family: 'Manjari', sans-serif;
  }

  .sidebar {
    height: auto;
    background-image: linear-gradient(to bottom, rgb(255, 70, 70), rgb(204, 56, 56), rgb(127, 35, 35));
  }

  h4 {
    padding-top: 20px;
    color: white;
  }

  #title {
    margin-bottom: 20px;
    margin-top: 5px;
  }
</style>

<div id="wrapper">

  <!-- Sidebar -->
  <ul class="sidebar navbar-nav navbar-light">

    <!-- <h4 class="text-center" >Admin</h4> -->

    <li class="nav-item active">
      <a class="nav-link" href="index.php">

      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="tables.php">
    </li>

    <!-- Admin -->
    <li class="nav-item dropdown">
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Logout:</h6>
        <!-- <a class="dropdown-item" href="login.html">Login</a> -->
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
      </div>
    </li>
  </ul>

  <div id="content-wrapper">

    <div class="container-fluid">

      <div>
        <h1 id="title">Upload Strats</h1>
      </div>

      <br>

      <form class="form-horizontal" method="post" action="./backend/strats-upload-broker.php" enctype="multipart/form-data">

        <div class="form-group">
          <label class="control-label col-sm-2" for="map id">Pilih Map</label>
          <div class="col-sm-10">
            <input style="width: 50%;" type="text" list="map" class="form-control" name="map_name" placeholder="-MAP-" required>
            <datalist id="map">
              <?php
              require('backend/koneksi.php');

              $sql = "SELECT * FROM maps";
              $content = $connect->query($sql);

              while ($data = $content->fetch_assoc()) {

              ?>
                <option><?php echo $data['map_name'] ?></option>
              <?php }
              ?>
            </datalist>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="image">Gambar Strats</label>
          <div class="col-sm-10">
            <input type="file" class="file-control" name="strats_image" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Nama Strat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="strats_name" placeholder="Nama Strats" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="desc">Strats Desc</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control ckeditor" name="strats_desc" placeholder="Deskripsi Strats" required></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="map id">Pilih Agent (1)</label>
          <div class="col-sm-10">
            <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_one" placeholder="-AGENT-" required>
            <datalist id="agent">
              <?php
              require('backend/koneksi.php');

              $sql = "SELECT * FROM agents";
              $content = $connect->query($sql);

              while ($data = $content->fetch_assoc()) {

              ?>
                <option><?php echo $data['agent_name'] ?> -<?php echo $data['agent_type'] ?></option>
              <?php }
              ?>
            </datalist>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="desc">Deskripsi Agent (1)</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control ckeditor" name="agent_one_desc" placeholder="Deskripsi Strats" required></textarea>
          </div>
        </div>

        <!--  -->

        <div class="form-group">
          <label class="control-label col-sm-2" for="map id">Pilih Agent (2)</label>
          <div class="col-sm-10">
            <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_two" placeholder="-AGENT-" required>
            <datalist id="agent">
              <?php
              require('backend/koneksi.php');

              $sql = "SELECT * FROM agents";
              $content = $connect->query($sql);

              while ($data = $content->fetch_assoc()) {

              ?>
                <option><?php echo $data['agent_name'] ?> -<?php echo $data['agent_type'] ?></option>
              <?php }
              ?>
            </datalist>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="desc">Deskripsi Agent (2)</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control ckeditor" name="agent_two_desc" placeholder="Deskripsi Strats" required></textarea>
          </div>
        </div>

        <!--  -->

        <div class="form-group">
          <label class="control-label col-sm-2" for="map id">Pilih Agent (3)</label>
          <div class="col-sm-10">
            <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_three" placeholder="-AGENT-" required>
            <datalist id="agent">
              <?php
              require('backend/koneksi.php');

              $sql = "SELECT * FROM agents";
              $content = $connect->query($sql);

              while ($data = $content->fetch_assoc()) {

              ?>
                <option><?php echo $data['agent_name'] ?> -<?php echo $data['agent_type'] ?></option>
              <?php }
              ?>
            </datalist>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="desc">Deskripsi Agent (1)</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control ckeditor" name="agent_three_desc" placeholder="Deskripsi Strats" required></textarea>
          </div>
        </div>

        <!--  -->

        <div class="form-group">
          <label class="control-label col-sm-2" for="map id">Pilih Agent (4)</label>
          <div class="col-sm-10">
            <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_four" placeholder="-AGENT-" required>
            <datalist id="agent">
              <?php
              require('backend/koneksi.php');

              $sql = "SELECT * FROM agents";
              $content = $connect->query($sql);

              while ($data = $content->fetch_assoc()) {

              ?>
                <option><?php echo $data['agent_name'] ?> -<?php echo $data['agent_type'] ?></option>
              <?php }
              ?>
            </datalist>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="desc">Deskripsi Agent (4)</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control ckeditor" name="agent_four_desc" placeholder="Deskripsi Strats" required></textarea>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="map id">Pilih Agent (5)</label>
          <div class="col-sm-10">
            <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_five" placeholder="-AGENT-" required>
            <datalist id="agent">
              <?php
              require('backend/koneksi.php');

              $sql = "SELECT * FROM agents";
              $content = $connect->query($sql);

              while ($data = $content->fetch_assoc()) {

              ?>
                <option><?php echo $data['agent_name'] ?> -<?php echo $data['agent_type'] ?></option>
              <?php }
              ?>
            </datalist>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="desc">Deskripsi Agent (5)</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control ckeditor" name="agent_five_desc" placeholder="Deskripsi Strats" required></textarea>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-success" value="Upload Strats" class="btn btn-default">Upload Strats</button>
            <a href="home.php"><input type="button" class="btn btn-danger" value="Fuck Go back"></a>
          </div>
        </div>

      </form>
    </div>

  </div>

  <!-- DataTables Example -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

</body>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</html>