<?php
session_start();
if ($_SESSION['status'] != 'login') {
  header("location: index.php");
}


require('backend/koneksi.php');

$strats_id = $_GET['strats_id'];

$sql = "SELECT * FROM strats WHERE strats_id = '$strats_id'";
$content = $connect->query($sql);

$data = mysqli_fetch_array($content);

?>

<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Back</title>
  <link rel="stylesheet" href="css/nicepage.css" media="screen">
  <link rel="stylesheet" href="css/Back.css" media="screen">
  <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.28.7, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Back">
  <meta property="og:type" content="website">
</head>

<body data-home-page="Back.html" data-home-page-title="Back" class="u-body">
  <header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-89c2">
    <div class="u-clearfix u-sheet u-sheet-1">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="home.php" style="padding: 10px 20px;">Back</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="mappage.php" style="padding: 10px 20px;">Back</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <div class="u-container-style">
        <img class="u-border-2 u-border-custom-color-2 u-container-style u-group u-image u-image-1" src="img/strats/<?php echo $data['strats_image'] ?>">
      </div>
      <h3 class="u-headline u-text u-text-1">
        <a><?php echo $data['strats_name'] ?></a>
        <p class="u-align-left u-text u-text-2"><?php echo $data['map_name'] ?></p>
        <h2 class="u-align-left u-text u-text-3"><?php echo $data['strats_desc'] ?></h2>
      </h3>
    </div>
  </header>
  <section class="u-clearfix u-custom-color-1 u-section-1" id="sec-54ee">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <h3 class="u-align-left u-custom-item u-text u-text-default u-text-1"><?php echo $data['agent_one'] ?></h3>
              <p class="u-custom-item u-text u-text-default u-text-2"><?php echo $data['agent_one_desc'] ?></p>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-2">
              <h3 class="u-align-left u-custom-item u-text u-text-default u-text-3"><?php echo $data['agent_two'] ?></h3>
              <p class="u-custom-item u-text u-text-default u-text-4"><?php echo $data['agent_two_desc'] ?></p>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <h3 class="u-align-left u-custom-item u-text u-text-default u-text-5"><?php echo $data['agent_three'] ?></h3>
              <p class="u-custom-item u-text u-text-default u-text-6"><?php echo $data['agent_three_desc'] ?></p>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-4">
              <h3 class="u-align-left u-custom-item u-text u-text-default u-text-7"><?php echo $data['agent_four'] ?></h3>
              <p class="u-custom-item u-text u-text-default u-text-8"><?php echo $data['agent_four_desc'] ?></p>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <h3 class="u-align-left u-custom-item u-text u-text-default u-text-9"><?php echo $data['agent_five'] ?></h3>
              <p class="u-custom-item u-text u-text-default u-text-10"><?php echo $data['agent_five_desc'] ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-custom-color-1 u-footer u-footer" id="sec-fb2d">
    <div class="u-clearfix u-sheet u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">Footer Lamo</p>
    </div>
  </footer>
</body>

</html>