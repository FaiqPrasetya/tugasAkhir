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

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>STRATS BOI</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">

  <!-- JQuery -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

</head>

<style>
  body {
    font-family: 'Manjari', sans-serif;
  }

  .sidebar {
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

<body id="page-top">

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav navbar-light">

      <h4 class="text-center">Strats Page</h4>

      <li class="nav-item active">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Home</span>
        </a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <div>
          <h1 id="title">Dashboard</h1>
        </div>

        <!-- Icon Cards-->
        <div class="row">

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-plus"></i>
                </div>
                <div class="mr-5">Add new strats</div>
              </div>
              <a class="card-footer text-white clearfix small " href="strats_add.php">
                <span class="float-left">CLICK HERE</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>


        </div>

        <!-- DataTables Example -->
        <div class="card mb-3 shadow-lg">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Strats Master List
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Strats</th>
                    <th>MAP</th>
                    <th>IMAGE</th>
                    <th>DESC</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>

                  <?php

                  include "./backend/koneksi.php";

                  $query = "SELECT * FROM strats";

                  $sql = mysqli_query($connect, $query);

                  while ($data = mysqli_fetch_array($sql)) {

                    echo "<tr>";
                    echo "<td>" . $data['strats_id'] . "</td>";
                    echo "<td>" . $data['strats_name'] . "</td>";
                    echo "<td>" . $data['map_name'] . "</td>";
                    echo "<td>
                              <img styles:'align-item' class='img-responsive' alt='' src='img/strats/" . $data['strats_image'] . "'width='200' height='200'>
                          </td>";
                    echo "<td>" . $data['strats_desc'] . "</td>";
                    echo "<td><a class='btn btn-info' href='strats_edit.php?strats_id=" . $data['strats_id'] . "'>Edit</a></td>";
                    echo "<td><a class='btn btn-danger' href='backend/strats-deletion-broker.php?strats_id=" . $data['strats_id'] . "'>Hapus</a></td>";
                    echo "</tr>";
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingin Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" pilih Logout untuk meninggalkan halaman ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
      });
    });
  </script>

</body>

</html>