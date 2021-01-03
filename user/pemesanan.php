<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
    $Nim = $_SESSION['user']['username'];
    include_once("../koneksi.php");
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>PDHFOSTI - Halaman Ticket Order</title>
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
                    <a class="navbar-brand" href="./">PENGGUNA - KRETO</a>
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
                        <li class="">
                            <a href="./">
                                <i class="material-icons">home</i>
                                <span>Beranda</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="./pemesanan.php#pemesanan">
                                <i class="material-icons">assignment</i>
                                <span>Pemesanan</span>
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
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-blue">
                                <h2 class="">INFORMASI DESAIN PDH</h2>
                                <small>Informasi mengenai desain dan ukuran PDH</small>
                            </div>
                            <div class="body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="">
                                            <img class="img-responsive" src="../assets/images/PDH/pdhbaru.jpg" alt="">

                                            <p class="align-center"><b>Desain PDH</b></p>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-1">
                                    </div>
                                    <div class="col-md-4">
                                        <img class="img-responsive" src="../assets/images/PDH/ukuran.jpg" alt="">

                                        <p class="align-center"><b>Daftar Ukuran PDH</b></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                $query = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE nim='$Nim'");
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
                                        <small>Edit Form dibawah ini apablia pemesanan anda ada yang salah</small>
                                    </div>
                                    <div class="body">
                                        <h2 class="card-inside-title">Informasi Pribadi</h2>
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
                                                    <div class="form-line">
                                                        <input type="text" required name="nickname" class="form-control" value="<?php echo $data['nickname']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <p>
                                                            Ukuran
                                                        </p>
                                                        <select name="ukuran" class="form-control show-tick">
                                                            <option value="<?php echo $data['size']; ?>"><?php echo $data['size']; ?> ( Ukuran Sebelumnya )</option>
                                                            <option value="<?php echo $data['size']; ?>"><?php echo $data['size']; ?> ( Ukuran Sebelumnya )</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                            <option value="XXXL">XXXL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group spinner" data-trigger="spinner">
                                                    <p>
                                                        Jumlah
                                                    </p>
                                                    <div class="form-line">
                                                        <input name="quantity" type="text" class="form-control text-center" value="<?php echo $data['quantity']; ?>" data-rule="quantity">
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                                        <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                                    </span>
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
                                        <small>Isi form dibawah untuk melakukan Ticket Order</small>
                                        <ul class="header-dropdown m-r--5">
                                            <li class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                    <i class="material-icons">more_vert</i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="javascript:void(0);">Informasi</a></li>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="body">
                                        <h2 class="card-inside-title">Informasi Pribadi</h2>
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
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" name="nickname" class="form-control" placeholder="Nickname.." required />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-select">
                                                        <p>
                                                            Ukuran
                                                        </p>
                                                        <select name="ukuran" class="form-control show-tick">
                                                            <option value="S">S</option>
                                                            <option value="S">S</option>
                                                            <option value="M">M</option>
                                                            <option value="L">L</option>
                                                            <option value="XL">XL</option>
                                                            <option value="XXL">XXL</option>
                                                            <option value="XXXL">XXXL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="input-group spinner" data-trigger="spinner">
                                                    <p>
                                                        Jumlah
                                                    </p>
                                                    <div class="form-line">
                                                        <input name="quantity" type="text" class="form-control text-center" value="1" data-rule="quantity">
                                                    </div>
                                                    <span class="input-group-addon">
                                                        <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                                        <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-sm-9">
                                            </div>
                                            <div class="col-sm-3">
                                                <button type="submit" name="pesan" class="btn btn-success waves-effect">
                                                    <i class="material-icons">send</i>
                                                    <span> PESAN PDH </span>
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
        </script>

        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "editsukses") {
                echo "<script type='text/javascript'>
                swal({
                title: 'Edit Pemesanan Berhasil!',
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
                title: 'Pemesanan Berhasil!',
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
                title: 'Gagal Melakukan Edit Pemesanan!',
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
                title: 'Gagal Melakukan Pemesanan!',
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
                title: 'Silahkan Coba Lagi Nanti!',
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
                title: 'Anda Belum Melakukan Pemesanan, Silahkan lakukan Pemesanan Terlebih Dahulu!',
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
                title: 'Anda Telah Melakukan Pemesanan, Silahkan EDIT PEMESANAN APABILA DATA SALAH!',
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