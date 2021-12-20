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

            <?php
              require('backend/koneksi.php');

              $strats_id = $_GET['strats_id'];

              $sql = "SELECT * FROM strats WHERE strats_id = '$strats_id'";
              $content = $connect->query($sql);

              $data = mysqli_fetch_array($content);

            ?>

            <form class="form-horizontal" method="POST" action="./backend/strats-edit-broker.php?strats_id=<?php echo $data['strats_id'] ?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="map id">Pilih Map</label>
                    <div class="col-sm-10">
                        <input style="width: 50%;" type="text" list="map" class="form-control" name="map_name" placeholder="-MAP-" value="<?php echo $data['map_name'] ?>" required>
                        <datalist id="map">
                            <option>fracture</option>
                            <option>haven</option>
                            <option>icebox</option>
                            <option>split</option>
                            <option>breeze</option>
                            <option>bind</option>
                            <option>ascent</option>
                        </datalist>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="image">Gambar Strats</label>
                    <div class="col-sm-10">
                    <input type="checkbox" class="" name="ubah_gambar" value="true"> Ceklis jika ingin mengubah Gambar Strats<br>
                        <input type="file" class="file-control" name="strats_image">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Nama Strat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="strats_name" placeholder="Nama Strats" value="<?php echo $data['strats_name'] ?>" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Strats Desc</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control ckeditor" name="strats_desc" placeholder="Deskripsi Strats" required>
                            <?php echo $data['strats_desc'] ?>
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="map id">Pilih Agent (1)</label>
                    <div class="col-sm-10">
                        <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_one" placeholder="-AGENT-" value="<?php echo $data['agent_one'] ?>" required>
                        <datalist id="agent">
                            <option>Brimstone -Controller</option>
                            <option>Viper -Controller</option>
                            <option>Omen -Controller</option>
                            <option>Killjoy -Sentinel</option>
                            <option>Cypher -Sentinel</option>
                            <option>Sova -Initiator</option>
                            <option>Phoenix -Duelist</option>
                            <option>Jett -Duelist</option>
                            <option>Reyna -Duelist</option>
                            <option>Raze -Duelist</option>
                            <option>Breach -Initiator</option>
                            <option>Skye -Initiator</option>
                            <option>Yoru -Duelist</option>
                            <option>Astra -Controller</option>
                            <option>KAY/O -Initiator</option>
                            <option>Chamber -Sentinel</option>
                        </datalist>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Deskripsi Agent (1)</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control ckeditor" name="agent_one_desc" placeholder="Deskripsi Strats" required>
                            <?php echo $data['agent_one_desc'] ?>
                        </textarea>
                    </div>
                </div>

                <!--  -->

                <div class="form-group">
                    <label class="control-label col-sm-2" for="map id">Pilih Agent (2)</label>
                    <div class="col-sm-10">
                        <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_two" placeholder="-AGENT-" value="<?php echo $data['agent_two'] ?>" required>
                        <datalist id="agent">
                            <option>Brimstone -Controller</option>
                            <option>Viper -Controller</option>
                            <option>Omen -Controller</option>
                            <option>Killjoy -Sentinel</option>
                            <option>Cypher -Sentinel</option>
                            <option>Sova -Initiator</option>
                            <option>Phoenix -Duelist</option>
                            <option>Jett -Duelist</option>
                            <option>Reyna -Duelist</option>
                            <option>Raze -Duelist</option>
                            <option>Breach -Initiator</option>
                            <option>Skye -Initiator</option>
                            <option>Yoru -Duelist</option>
                            <option>Astra -Controller</option>
                            <option>KAY/O -Initiator</option>
                            <option>Chamber -Sentinel</option>
                        </datalist>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Deskripsi Agent (2)</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control ckeditor" name="agent_two_desc" placeholder="Deskripsi Strats" required>
                            <?php echo $data['agent_two_desc'] ?>
                        </textarea>
                    </div>
                </div>

                <!--  -->

                <div class="form-group">
                    <label class="control-label col-sm-2" for="map id">Pilih Agent (3)</label>
                    <div class="col-sm-10">
                        <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_three" value="<?php echo $data['agent_three'] ?>" placeholder="-AGENT-" required>
                        <datalist id="agent">
                            <option>Brimstone -Controller</option>
                            <option>Viper -Controller</option>
                            <option>Omen -Controller</option>
                            <option>Killjoy -Sentinel</option>
                            <option>Cypher -Sentinel</option>
                            <option>Sova -Initiator</option>
                            <option>Phoenix -Duelist</option>
                            <option>Jett -Duelist</option>
                            <option>Reyna -Duelist</option>
                            <option>Raze -Duelist</option>
                            <option>Breach -Initiator</option>
                            <option>Skye -Initiator</option>
                            <option>Yoru -Duelist</option>
                            <option>Astra -Controller</option>
                            <option>KAY/O -Initiator</option>
                            <option>Chamber -Sentinel</option>
                        </datalist>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Deskripsi Agent (3)</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control ckeditor" name="agent_three_desc" placeholder="Deskripsi Strats" required>
                            <?php echo $data['agent_three_desc'] ?>
                        </textarea>
                    </div>
                </div>

                <!--  -->

                <div class="form-group">
                    <label class="control-label col-sm-2" for="map id">Pilih Agent (4)</label>
                    <div class="col-sm-10">
                        <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_four" value="<?php echo $data['agent_four'] ?>" placeholder="-AGENT-" required>
                        <datalist id="agent">
                            <option>Brimstone -Controller</option>
                            <option>Viper -Controller</option>
                            <option>Omen -Controller</option>
                            <option>Killjoy -Sentinel</option>
                            <option>Cypher -Sentinel</option>
                            <option>Sova -Initiator</option>
                            <option>Phoenix -Duelist</option>
                            <option>Jett -Duelist</option>
                            <option>Reyna -Duelist</option>
                            <option>Raze -Duelist</option>
                            <option>Breach -Initiator</option>
                            <option>Skye -Initiator</option>
                            <option>Yoru -Duelist</option>
                            <option>Astra -Controller</option>
                            <option>KAY/O -Initiator</option>
                            <option>Chamber -Sentinel</option>
                        </datalist>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Deskripsi Agent (4)</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control ckeditor" name="agent_four_desc" placeholder="Deskripsi Strats" required>
                            <?php echo $data['agent_four_desc'] ?>
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="map id">Pilih Agent (5)</label>
                    <div class="col-sm-10">
                        <input style="width: 50%;" type="text" list="agent" class="form-control" name="agent_five" value="<?php echo $data['agent_five'] ?>" placeholder="-AGENT-" required>
                        <datalist id="agent">
                            <option>Brimstone -Controller</option>
                            <option>Viper -Controller</option>
                            <option>Omen -Controller</option>
                            <option>Killjoy -Sentinel</option>
                            <option>Cypher -Sentinel</option>
                            <option>Sova -Initiator</option>
                            <option>Phoenix -Duelist</option>
                            <option>Jett -Duelist</option>
                            <option>Reyna -Duelist</option>
                            <option>Raze -Duelist</option>
                            <option>Breach -Initiator</option>
                            <option>Skye -Initiator</option>
                            <option>Yoru -Duelist</option>
                            <option>Astra -Controller</option>
                            <option>KAY/O -Initiator</option>
                            <option>Chamber -Sentinel</option>
                        </datalist>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="desc">Deskripsi Agent (5)</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control ckeditor" name="agent_five_desc" placeholder="Deskripsi Strats" required>
                            <?php echo $data['agent_five_desc'] ?>
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success" value="Update Strats" class="btn btn-default">Update Strats</button>
                        <a href="strats.php"><input type="button" class="btn btn-danger" value="Fuck Go back"></a>
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