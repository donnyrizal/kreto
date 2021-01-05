<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../login.php?pesan=dilarang'</script>";
} else {
    include("../koneksi.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if (isset($_POST['pesan'])) {

        // ambil data dari formulir
        $username = $_SESSION['user']['username'];
        $origin = mysqli_escape_string($koneksi, $_POST['origin']);
        $destination = mysqli_escape_string($koneksi, $_POST['destination']);
        $seat = mysqli_escape_string($koneksi, $_POST['seat']);
        $datestart = mysqli_escape_string($koneksi, $_POST['datestart']);
        $dateend = mysqli_escape_string($koneksi, $_POST['dateend']);

        // cek apakah user telah melakukan pemesanan atau belum
        $query = mysqli_query($koneksi, "SELECT username FROM pemesanan WHERE username='$username'");
        $row = mysqli_num_rows($query);
        if ($row > 0) {
            echo "<script>window.location='./pemesanan.php?pesan=edit#pemesanan';</script>";
        } else {
            // buat query PEMESANAN
            $sql = "INSERT INTO `pemesanan`(`username`, `origin`, `destination`, `seat`, `datestart`, `dateend`) VALUES ('$username', '$origin', '$destination', '$seat','$datestart','$dateend')";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                // buat query SET PEMESANAN USER
                $sql = "UPDATE user SET status='1' WHERE username='$username'";
                $query = mysqli_query($koneksi, $sql);

                // apakah query simpan berhasil?
                if ($query) {
                    // kalau berhasil alihkan ke halaman pemesanan
                    echo "<script>window.location='./pemesanan.php?pesan=sukses#pemesanan';</script>";
                } else {
                    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
                    echo "<script>window.location='./pemesanan.php?pesan=error#pemesanan';</script>";
                }
            } else {
                echo "<script>window.location='./pemesanan.php?pesan=gagal#pemesanan';</script>";
            }
        }
    } else {
        echo "<script>window.location='./';</script>";
    }
}
