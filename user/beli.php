<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
    include("../koneksi.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['pesan'])){

    // ambil data dari formulir
        $Nim = $_SESSION['user']['username'];
        $nick = mysqli_escape_string($koneksi, $_POST['nickname']);
        $ukuran = mysqli_escape_string($koneksi, $_POST['ukuran']);
        $jumlah = mysqli_escape_string($koneksi, $_POST['quantity']);
        
        // cek apakah user telah melakukan pemesanan atau belum
        $query=mysqli_query($koneksi, "SELECT nim FROM pemesanan WHERE nim='$Nim'");
        $row=mysqli_num_rows($query);
        if ($row > 0) {
            echo "<script>window.location='./pemesanan.php?pesan=edit#pemesanan';</script>";
        } else {
            // buat query PEMESANAN
            $sql = "INSERT INTO pemesanan (nim, nickname, size, quantity) VALUE ('$Nim', '$nick', '$ukuran', '$jumlah')";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                // buat query SET PEMESANAN USER
                $sql = "UPDATE user SET status='1' WHERE username='$Nim'";
                $query = mysqli_query($koneksi, $sql);

                // apakah query simpan berhasil?
                if($query) {
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
?>