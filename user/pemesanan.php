<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../login.php/?pesan=dilarang'</script>";
} else {
    $username = $_SESSION['user']['username'];
    include_once("../koneksi.php");
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>KRETO - Halaman Ticket Order <?= $username; ?> </title>
        <!-- Favicon-->
        <link rel="icon" href="../assets/images/train.svg" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="../assets/iconfont/material-icons.css" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Bootstrap Material Datetime Picker Css -->
        <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

        <!-- Bootstrap DatePicker Css -->
        <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

        <!-- Waves Effect Css -->
        <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Bootstrap Spinner Css -->
        <link href="../assets/plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

        <!-- Bootstrap Select Css -->
        <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="../assets/css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="../assets/css/themes/all-themes.css" rel="stylesheet" />

        <!-- CSS sweetalert -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

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
                <p>Wait for a moment.. ...</p>
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
                    <a class="navbar-brand" href="./">USER - KRETO</a>
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
                        <li class="">
                            <a href="./">
                                <i class="material-icons">home</i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="active">
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
                        <p>&copy; Donny Rizal &middot; <a href="#">Privacy</a> &middot; <a href="#notice">Terms</a></p>
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
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-blue">
                                <h2>ORDER YOUR TICKET HERE</h2>
                                <small>We are ready to bring you into <i>Paradise</i> of Indonesia</small>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <img class="img-responsive" src="https://www.etrainstatus.com/static/assets/template/etrainstatus/desktop/images/seat_map/Sleeper-SL.png" alt="">
                                            <p class="align-center"><b>Train Seat Map Layour </b></p>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1">
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <img class="img-responsive" src="../assets/images/pdh/destination.jpg" alt="">

                                        <p class="align-center"><b>Daftar destination </b></p>

                                    </div> -->
                                    <!-- With Captions -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Gallery</h2>
                                            </div>
                                            <div class="body">
                                                <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                                    <!-- Indicators -->
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                                    </ol>
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="../assets/images/image-gallery/4.jpg" />
                                                            <div class="carousel-caption">
                                                                <h3>Dense Forest</h3>
                                                                <p>Find this peacefull moment that you can get in Indonesia</p>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="http://indonesia.travel/content/dam/indtravelrevamp/en/main-banner/global/new-year-2021/newyear-homepage-banner.jpg" />
                                                            <div class="carousel-caption">
                                                                <h3>Beach, of course</h3>
                                                                <p>Relax your body and get sun that you might not get very hot in your hometown</p>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="../assets/images/image-gallery/9.jpg" />
                                                            <div class="carousel-caption">
                                                                <h3>Mountain</h3>
                                                                <p>Find a luxurious moment that might be you ain't gonna get in other city</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #END# With Captions -->

                                    <!-- With Captions 2 -->
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>Gallery</h2>
                                            </div>
                                            <div class="body">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                    <!-- Indicators -->
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                    </ol>
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/bali-nusa-tenggara/bali/bali/Image1.jpg" />
                                                            <div class="carousel-caption">
                                                                <h3>Feast Your Eyes</h3>
                                                                <p>Of a rich cultures in Indonesia</p>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="https://www.indonesia.travel/content/dam/indtravelrevamp/en/destinations/revisi-2020/destinations-thumbnail/Bandung-Thumbnail.jpg" />
                                                            <div class="carousel-caption">
                                                                <h3>Chiling</h3>
                                                                <p>Enjoy every last second of you life in here</p>
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <img src="../assets/images/image-gallery/5.jpg" />
                                                            <div class="carousel-caption">
                                                                <h3>Rocky Mountain</h3>
                                                                <p>Not only just in Sam, but also in Indonesia</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #END# With Captions -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE username='$username'");
                $row = mysqli_num_rows($query);
                if ($row > 0) {
                    $data = mysqli_fetch_array($query);
                ?>
                    <div id="pemesanan" class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form id="form_validation" action="update.php" method="POST">
                                <div class="card">
                                    <div class="header">
                                        <h2 class="">Form Edit Ticket Order</h2>
                                        <small>Edit your ticket if there's an error </small>
                                    </div>
                                    <div class="body">
                                        <h2 class="card-inside-title">Personal Information</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="nim" class="form-control" placeholder="<?php echo $_SESSION['user']['username'] ?>" disabled="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="nama" class="form-control" placeholder="<?php echo $_SESSION['user']['nama'] ?>" disabled="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h2 class="card-inside-title">Ticket Order</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <label for="origin">From</label>
                                                        <select name="origin" id="origin" class="form-control show-tick">
                                                            <option value="<?php echo $data['origin']; ?>"><?php echo $data['origin']; ?> ( Origin Before )</option>
                                                            <option value="<?php echo $data['origin']; ?>"><?php echo $data['origin']; ?> ( Origin Before )</option>
                                                            <option value="Jakarta">Jakarta</option>
                                                            <option value="Bandung">Bandung</option>
                                                            <option value="Solo">Solo</option>
                                                            <option value="Raja Ampat">Raja Ampat</option>
                                                            <option value="Lombok">Lombok</option>
                                                            <option value="Jogjakarta">Jogjakarta</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <label for="destination">Destination</label>
                                                        <select name="destination" id="destination" class="form-control show-tick">
                                                            <option value="<?php echo $data['destination']; ?>"><?php echo $data['destination']; ?> ( Destination before )</option>
                                                            <option value="<?php echo $data['destination']; ?>"><?php echo $data['destination']; ?> ( Destination before )</option>
                                                            <option value="Jakarta">Jakarta</option>
                                                            <option value="Bandung">Bandung</option>
                                                            <option value="Solo">Solo</option>
                                                            <option value="Raja Ampat">Raja Ampat</option>
                                                            <option value="Lombok">Lombok</option>
                                                            <option value="Jogjakarta">Jogjakarta</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <label for="seat">Seat Row</label>
                                                        <select name="seat" id="seat" class="form-control show-tick">
                                                            <option value="<?php echo $data['seat']; ?>"><?php echo $data['seat']; ?> ( Seat Before )</option>
                                                            <?php foreach (range(1, 72) as $item) {
                                                                echo "<option value='$item'>Seat No. $item</option>";
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h2 class="card-inside-title">Range</h2>
                                                    <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="date start..." name="datestart" value="<?php echo $data['datestart']; ?>">
                                                        </div>
                                                        <span class="input-group-addon">to</span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="date end..." name="dateend" value="<?php echo $data['dateend']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-sm-9">
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" name="simpan" class="btn btn-primary waves-effect">
                                                    <i class="material-icons">send</i>
                                                    <span> EDIT Ticket Order </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                <?php
                } else {
                ?>
                    <div id="pemesanan" class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form id="form_validation" action="beli.php" method="POST">
                                <div class="card">
                                    <div class="header">
                                        <h2 class="">Form Ticket Order</h2>
                                        <small>Fill your personal information and your ticket in here</small>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);">Information</a></li>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <h2 class="card-inside-title">Personal Information</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="nim" class="form-control" placeholder="<?php echo $_SESSION['user']['username'] ?>" disabled="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="nama" class="form-control" placeholder="<?php echo $_SESSION['user']['nama'] ?>" disabled="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h2 class="card-inside-title">Ticket Order</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <label for="origin">From</label>
                                                        <select name="origin" id="origin" class="form-control show-tick">
                                                            <option value="Jakarta">Jakarta</option>
                                                            <option value="Jakarta">Jakarta</option>
                                                            <option value="Bandung">Bandung</option>
                                                            <option value="Solo">Solo</option>
                                                            <option value="Raja Ampat">Raja Ampat</option>
                                                            <option value="Lombok">Lombok</option>
                                                            <option value="Jogjakarta">Jogjakarta</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <label for="destination">Destination</label>
                                                        <select name="destination" id="destination" class="form-control show-tick">
                                                            <option value="Jakarta">Jakarta</option>
                                                            <option value="Jakarta">Jakarta</option>
                                                            <option value="Bandung">Bandung</option>
                                                            <option value="Solo">Solo</option>
                                                            <option value="Raja Ampat">Raja Ampat</option>
                                                            <option value="Lombok">Lombok</option>
                                                            <option value="Jogjakarta">Jogjakarta</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <label for="seat">Seat Row</label>
                                                        <select name="seat" id="seat" class="form-control show-tick">
                                                            <?php foreach (range(1, 72) as $item) {
                                                                echo "<option value='$item'>Seat No. $item</option>";
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <div class="form-line">
                                                        <label for="departure_date">Departure</label>
                                                        <input type="date" required name="departure_date" id="departure_date" class="form-control" />
                                                    </div>
                                                </div> -->

                                                <div class="form-group">
                                                    <h2 class="card-inside-title">Range</h2>
                                                    <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="date start..." name="datestart">
                                                        </div>
                                                        <span class="input-group-addon">to</span>
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" placeholder="date end..." name="dateend">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-sm-9">
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" name="pesan" class="btn btn-success waves-effect">
                                                    <i class="material-icons">send</i>
                                                    <span> Book </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>

                <?php } ?>
            </div>
            </div>
            </div>
        </section>
        <!-- Jquery Core Js -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <!--  <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script> -->

        <!-- Slimscroll Plugin Js -->
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../assets/plugins/node-waves/waves.js"></script>

        <!-- Jquery Validation Plugin Css -->
        <script src="../assets//plugins/jquery-validation/jquery.validate.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="../assets/plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Morris Plugin Js -->
        <script src="../assets/plugins/raphael/raphael.min.js"></script>
        <script src="../assets/plugins/morrisjs/morris.js"></script>

        <!-- Jquery Spinner Plugin Js -->
        <script src="../assets/plugins/jquery-spinner/js/jquery.spinner.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="../assets//plugins/node-waves/waves.js"></script>

        <!-- Custom Js -->
        <script src="../assets/js/admin.js"></script>
        <script src="../assets/js/pages/forms/form-validation.js"></script>

        <!-- Demo Js -->
        <script src="../assets/js/demo.js"></script>

        <!-- Sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

        <!-- Bootstrap Material Datetime Picker Plugin Js -->
        <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

        <!-- Bootstrap Datepicker Plugin Js -->
        <script src=" ../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

        <script>
            var x, i, j, selElmnt, a, b, c;
            /*look for any elements with the class "custom-select":*/
            x = document.getElementsByClassName("custom-select");
            for (i = 0; i < x.length; i++) {
                selElmnt = x[i].getElementsByTagName("select")[0];
                /*for each element, create a new DIV that will act as the selected item:*/
                a = document.createElement("DIV");
                a.setAttribute("class", "select-selected");
                a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                x[i].appendChild(a);
                /*for each element, create a new DIV that will contain the option list:*/
                b = document.createElement("DIV");
                b.setAttribute("class", "select-items select-hide");
                for (j = 1; j < selElmnt.length; j++) {
                    /*for each option in the original select element,
                    create a new DIV that will act as an option item:*/
                    c = document.createElement("DIV");
                    c.innerHTML = selElmnt.options[j].innerHTML;
                    c.addEventListener("click", function(e) {
                        /*when an item is clicked, update the original select box,
                        and the selected item:*/
                        var y, i, k, s, h;
                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                        h = this.parentNode.previousSibling;
                        for (i = 0; i < s.length; i++) {
                            if (s.options[i].innerHTML == this.innerHTML) {
                                s.selectedIndex = i;
                                h.innerHTML = this.innerHTML;
                                y = this.parentNode.getElementsByClassName("same-as-selected");
                                for (k = 0; k < y.length; k++) {
                                    y[k].removeAttribute("class");
                                }
                                this.setAttribute("class", "same-as-selected");
                                break;
                            }
                        }
                        h.click();
                    });
                    b.appendChild(c);
                }
                x[i].appendChild(b);
                a.addEventListener("click", function(e) {
                    /*when the select box is clicked, close any other select boxes,
                    and open/close the current select box:*/
                    e.stopPropagation();
                    closeAllSelect(this);
                    this.nextSibling.classList.toggle("select-hide");
                    this.classList.toggle("select-arrow-active");
                });
            }

            function closeAllSelect(elmnt) {
                /*a function that will close all select boxes in the document,
                except the current select box:*/
                var x, y, i, arrNo = [];
                x = document.getElementsByClassName("select-items");
                y = document.getElementsByClassName("select-selected");
                for (i = 0; i < y.length; i++) {
                    if (elmnt == y[i]) {
                        arrNo.push(i)
                    } else {
                        y[i].classList.remove("select-arrow-active");
                    }
                }
                for (i = 0; i < x.length; i++) {
                    if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                    }
                }
            }
            /*if the user clicks anywhere outside the select box,
            then close all select boxes:*/
            document.addEventListener("click", closeAllSelect);

            $('#bs_datepicker_range_container').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy',
                container: '#bs_datepicker_range_container'
            });
        </script>

        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "editsukses") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Your order has succesfully edited',
                type: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "sukses") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Order Success!',
                type: 'success',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "editgagal") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Failed to edit, something is wrong!',
                type: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "gagal") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Failed to order!',
                type: 'error',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "error") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Please try again once more.!',
                type: 'info',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "beli") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Make sure you make an order first!',
                type: 'warning',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            } else if ($_GET['pesan'] == "edit") {
                echo "<script type='text/javascript'>
                swal({
                title: 'You already have ordered! If there's something wrong Edit here',
                type: 'warning',
                confirmButtonText: 'OK',
                confirmButtonColor: '#4caf50',
                reverseButtons: true,
                focusConfirm: true,
                  });
                </script>";
            }
        }
        ?>

    </body>

    </html>
<?php
}
?>