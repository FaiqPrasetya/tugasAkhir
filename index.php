<?php
session_start();

// Hide session yang belum ada
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(-1);
// 

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Judul Tab Browser -->
    <title>STRATS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Stylesheet untuk main -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/hero-slider.css">
    <link rel="stylesheet" href="css/templatemo-main.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/indexLogin.css">

    <!-- End of Stylesheet -->

    <!-- Ambil Font google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- Ambil JS modernizr -->
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>

<body>

    <!-- Navbar Samping -->
    <div class="fixed-side-navbar">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home"><span>Intro</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#summary"><span>Quick Summary</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#feed"><span>Valorant Feed</span></a></li>
        </ul>
    </div>
    <!-- End of navbar samping -->

    <!-- Content ke 1 -->
    <!-- Hero page, video, halaman login -->
    <div class="parallax-content baner-content" id="home">
        <div class="container">
            <div class="first-content">

                <!-- Hero Title -->
                <h1>VALORANT</h1>
                <span>Super secret <em>Strats</em> Database</span>

                <!-- Button Discover More dan Login page -->
                <div class="primary-button">
                    <a href="#summary">Discover More</a>
                    <a href='#' onclick="document.getElementById('id01').style.display='block'" style='width:auto;'>Member Login</a>
                    <!-- Button untuk menampilkan Login  -->
                    <?php
                    if ($_SESSION['status'] == 'login') {
                        echo "<a href='home.php'>Home</a>";
                    } else if (!isset($_SESSION)) {
                        echo "<a href='#' onclick='document.getElementById('id01').style.display='block'' style='width:auto;'>Member Login</a>";
                    }
                    ?>

                    <div id="id01" class="modal">

                        <!-- Form login  -->
                        <form class="modal-content animate" action="backend/login-broker.php" method="post">
                            <div class="imgcontainer">
                                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            </div>
                            <!-- Input dari form login -->

                            <?php
                            if ($_SESSION['status'] != 'login') {
                                echo "<div class='container'>";
                                echo "<label for='uname'><b>Username</b></label>";
                                echo "<input type='text' placeholder='Enter Username' name='username' autocomplete='off' required>";

                                echo "<label for='psw'><b>Password</b></label>";
                                echo "<input type='password' placeholder='Enter Password' name='password' autocomplete='off' required>";

                                echo "<button type='submit'>Login</button>";
                                echo "</div>";
                            }
                            ?>
                        </form>
                    </div>
                </div>
                <!-- End of Discover more dan login -->
            </div>
        </div>
    </div>
    <!-- End of Content ke 1 -->

    <!-- Content ke 2 & 3 -->
    <div class="service-content" id="summary">
        <div class="container">
            <div class="row">
                <!-- Content ke 2 -->
                <div class="col-md-4">
                    <div class="left-text">
                        <h4>More About <b>ALTI Carni</b></h4>
                        <div class="line-dec"></div>
                        <p>Carni is an indonesian Valorant player currently playing for the team ALTI, working as an in-game leader. Leading the team to victory</p>
                        <ul>
                            <li>- Immortal 2 SEA</li>
                            <li>- Sentinels and Controller Specialist</li>
                            <li>- 2 Years of experience</li>
                            <li>- Has the dragon skin lmao</li>
                        </ul>
                        <div class="primary-button">
                            <a href="https://twitter.com/carni1337">Twitter</a>
                        </div>
                    </div>
                </div>
                <!-- End of Content ke 2 -->

                <!-- Content ke 3 -->
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Scycon UNAIR (2nd Place)</h4>
                                <div class="line-dec"></div>
                                <p>Chelind Fellow</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>King of Kings Valorant RRQ (32th)</h4>
                                <div class="line-dec"></div>
                                <p>Chelind Fellow</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Smala Cup 2021 (1st Place)</h4>
                                <div class="line-dec"></div>
                                <p>Liquid Astro</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>King of Kings Valorant RRQ s2 (32th)</h4>
                                <div class="line-dec"></div>
                                <p>Liquid Galaxy</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>Garuda Valorant Indonesia (16th)</h4>
                                <div class="line-dec"></div>
                                <p>Liquid Galaxy</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="service-item">
                                <h4>SI Fest UNSRI (1st Place)</h4>
                                <div class="line-dec"></div>
                                <p>Liquid Galaxy</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Content ke 3 -->
            </div>
        </div>
    </div>
    <!-- End of Content ke 2 & 3-->

    <!-- Content ke 4 -->
    <div class="parallax-content projects-content" id="feed">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/dieforyou.jpeg" data-lightbox="image-1"><img src="img/dieforyou.jpeg" alt=""></a>
                                <div class="text-content">
                                    <h4>DIE FOR YOU - ZEDD REMIX | OFFICIAL AUDIO VISUALIZER | VALORANT CHAMPIONS 2021</h4>
                                    <span><a href="https://www.youtube.com/watch?v=KOIvuz2HCXQ">OPEN</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/yoru.jpeg" data-lightbox="image-1"><img src="img/yoru.jpeg" alt=""></a>
                                <div class="text-content">
                                    <h4>STATES OF THE AGENTS - YORU</h4>
                                    <span><a href="https://playvalorant.com/en-us/news/dev/state-of-the-agents-yoru/">OPEN</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/chmbr.jpeg" data-lightbox="image-1"><img src="img/chmbr.jpeg" alt=""></a>
                                <div class="text-content">
                                    <h4>VALORANT PATCH NOTES 3.12</h4>
                                    <span><a href="https://playvalorant.com/en-us/news/game-updates/valorant-patch-notes-3-12/">OPEN</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/chpr.jpeg" data-lightbox="image-1"><img src="img/chpr.jpeg" alt=""></a>
                                <div class="text-content">
                                    <h4>VALORANT GAME AND NETWORK INSTABILITY BASICS</h4>
                                    <span><a href="https://playvalorant.com/en-us/news/game-updates/valorant-game-and-network-instability-basics/">OPEN</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/trophy.jpeg" data-lightbox="image-1"><img src="img/trophy.jpeg" alt=""></a>
                                <div class="text-content">
                                    <h4>THIS IS THE ART OF GREATNESS | VALORANT CHAMPIONS 2021</h4>
                                    <span><a href="https://www.youtube.com/watch?v=lhaEs0pAUwg">OPEN</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonials-item">
                                <a href="img/champs.jpeg" data-lightbox="image-1"><img src="img/champs.jpeg" alt=""></a>
                                <div class="text-content">
                                    <h4>CHAMPIONS 2021 SKIN REVEAL TRAILER - VALORANT</h4>
                                    <span><a href="https://www.youtube.com/watch?v=LJ0w_9-qXpM">OPEN</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Content ke 4 -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-button">
                        <a href="#home">Back To Top</a>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                    <p>Copyright &copy; 2019 Company Name - Design: <a rel="nofollow noopener" href="https://templatemo.com"><em>TemplateMo</em></a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->


    <!-- Script AJAX, Login page, dan animasi dari home page ini -->
    <!-- MAIN == dari template | SECONDARY == untuk login di halaman ini -->

    <!-- AJAX + Ambil js di folder atas  (A)-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- End of script (A)-->

    <!-- MAIN -->
    <script>
        function openCity(cityName) {
            var i;
            var x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            document.getElementById(cityName).style.display = "block";
        }
    </script>
    <!-- MAIN -->

    <script>
        // SECONDARY
        // Script untuk login, dan tema nya diambil dari W3Schools
        // Tema dari login ada di css/indexLogin.css
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        // END OF SECONDARY

        // MAIN
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $(".fixed-side-navbar a, .primary-button a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
        // END OF MAIN
    </script>
    <!-- End of Script page -->
</body>

</html>