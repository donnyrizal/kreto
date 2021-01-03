<?php
session_start();
include("../koneksi.php");
if (!isset($_SESSION['admin'])) {
    echo "<script>window.location='../user/index.php?pesan=dilarang'</script>";
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>PDHFOSTI - Daftar Pemesanan</title>
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

        <!-- JQuery DataTable Css -->
        <link href="../assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- Morris Chart Css-->
        <link href="../assets/plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../assets/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../assets/css/themes/theme-blue.css" rel="stylesheet" />

        <!-- CSS manual -->
        <link href="../manual.css" rel="stylesheet">
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
                <p>Tunggu Sebentar...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->

        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="./">Admin - KRETO</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
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
                        <img src="../assets/images/programmer.png" width="60" height="60" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <b style="text-transform: uppercase;"><?php echo $_SESSION['admin']['username']; ?></b>
                        </div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li role="separator" class="divider"></li>
                                <li><a href="../logout.php"><i class="material-icons">power_settings_new</i>Keluar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="./">
                                <i class="material-icons">home</i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li>
                            <a href="daftar.php">
                                <i class="material-icons">assignment</i>
                                <span>Daftar Pemesanan</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="./user.php">
                                <i class="material-icons">people</i>
                                <span>Daftar User</span>
                            </a>
                        </li>

                        <li class="header">ACCOUNT</li>

                        <li>
                            <a href="../logout.php">
                                <i class="material-icons col-red">power_settings_new</i>
                                <span>Keluar</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2019 <a href="https://fosti.ums.ac.id/">FOSTI</a>
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
                                    Daftar Ticket Order <small>Halaman admin untuk melihat data Ticket Order Fosti...</small>
                                </h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIM</th>
                                                <th>Nama</th>
                                                <th>Angkatan</th>
                                                <th>Nick Name</th>
                                                <th>Ukuran</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 0;
                                            $sql = "SELECT nim, nama, angkatan, nickname, size, quantity FROM pemesanan INNER JOIN user ON nim=username";
                                            $query = mysqli_query($koneksi, $sql);

                                            while ($siswa = mysqli_fetch_array($query)) {
                                                echo "<tr>";

                                                echo "<td style='text-align: center !important;'>" . ++$i . "</td>";
                                                echo "<td>" . $siswa['nim'] . "</td>";
                                                echo "<td>" . $siswa['nama'] . "</td>";
                                                echo "<td style='text-align: center !important;'>" . $siswa['angkatan'] . "</td>";
                                                echo "<td>" . $siswa['nickname'] . "</td>";
                                                echo "<td style='text-align: center !important;'>" . $siswa['size'] . "</td>";
                                                echo "<td style='text-align: center !important;'>" . $siswa['quantity'] . "</td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Exportable Table -->
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

        <!-- Jquery DataTable Plugin Js -->
        <script src="../assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
        <script src="../assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
        <script src="../assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
        <script src="../assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
        <script src="../assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
        <script src="../assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
        <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
        <script src="../assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

        <!-- Custom Js -->
        <script src="../assets/js/admin.js"></script>
        <script src="../assets/js/pages/tables/jquery-datatable.js"></script>

        <!-- Demo Js -->
        <script src="../assets/js/demo.js"></script>
    </body>

    </html>
<?php

}
?>