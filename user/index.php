<?php
session_start();
function greetingWord()
{
    $hour = date("G");

    if ($hour > 0 && $hour < 24) {
        if ($hour >= 3 && $hour < 12) {
            echo "<p>Good Morning. Have a nice holiday 🤗 </p>";
        } else if ($hour >= 12 && $hour < 17) {
            echo "<p>Good afternoon. Have a nice holiday 🤗 </p>";
        } else {
            echo "<p>Good evening. Have a nice holiday 🤗 </p>";
        }
    }
}
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../login.php?pesan=dilarang'</script>";
} else {

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>KRETO - Ticket Ordering</title>
        <!-- Favicon-->
        <link rel="icon" href="../assets/images/train.svg" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="../assets/iconfont/material-icons.css" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../assets/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />
    </head>

    <body class="theme-blue">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Wait for a moment please...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <div class="bg-1"></div>
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="./">USER - KRETO</a>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="../assets/images/programmer.png" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b><?php echo $_SESSION['user']['nama']; ?></b>
                            <br>
                            <?php echo $_SESSION['user']['username']; ?>

                        </div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li role="separator" class="divider"></li>
                                <li><a href="../logout.php"><i class="material-icons">power_settings_new</i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active">
                            <a href="./">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="./pemesanan.php#pemesanan">
                                <i class="material-icons">assignment</i>
                                <span>Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="./view.php">
                                <i class="material-icons">insert_drive_file</i>
                                <span>View your Order</span>
                            </a>
                        </li>


                        <li class="header">ACCOUNT</li>

                        <li>
                            <a href="../logout.php">
                                <i class="material-icons col-red">power_settings_new</i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2019 <a href="https://KRETO.ums.ac.id/;">KRETO</a>
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
            <!-- Right Sidebar -->

            <!-- #END# Right Sidebar -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <h2>DASHBOARD</h2>
                </div>

                <!-- Widgets -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-blue">
                                <h2>
                                    User <small>Order your ticket here</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p class="align-justify"><?php echo greetingWord(); ?> </p>
                                <p> </p>
                                <p class="align-justify"></p>
                            </div>
                        </div>
                    </div>
                    <!-- #END# Browser Usage -->
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    Today
                                    <small><?php echo date("l, d F Y"); ?></small>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Jquery Core Js -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../assets/plugins/node-waves/waves.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Morris Plugin Js -->
        <script src="../assets/plugins/raphael/raphael.min.js"></script>
        <script src="../assets/plugins/morrisjs/morris.js"></script>

        <!-- ChartJs -->
        <script src="../assets/plugins/chartjs/Chart.bundle.js"></script>

        <!-- Flot Charts Plugin Js -->
        <script src="../assets/plugins/flot-charts/jquery.flot.js"></script>
        <script src="../assets/plugins/flot-charts/jquery.flot.resize.js"></script>
        <script src="../assets/plugins/flot-charts/jquery.flot.pie.js"></script>
        <script src="../assets/plugins/flot-charts/jquery.flot.categories.js"></script>
        <script src="../assets/plugins/flot-charts/jquery.flot.time.js"></script>

        <!-- Sparkline Chart Plugin Js -->
        <script src="../assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>

        <!-- Custom Js -->
        <script src="../assets/js/admin.js"></script>
        <script src="../assets/js/pages/index.js"></script>

        <!-- Demo Js -->
        <script src="../assets/js/demo.js"></script>
    </body>

    </html>
<?php
}
?>