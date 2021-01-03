<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../?pesan=dilarang'</script>";
} else {
    include("../koneksi.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if(isset($_POST['simpan'])){

    // ambil data dari formulir
        $Nim = $_SESSION['user']['username'];
        $nick = mysqli_escape_string($koneksi, $_POST['nickname']);
        $ukuran = mysqli_escape_string($koneksi, $_POST['ukuran']);
        $jumlah = mysqli_escape_string($koneksi, $_POST['quantity']);
        
        // cek apakah user telah melakukan pemesanan atau belum
        $query=mysqli_query($koneksi, "SELECT nim FROM pemesanan WHERE nim='$Nim'");
        $row=mysqli_num_rows($query);
        if ($row == 0) {
            echo "<script>window.location='./pemesanan.php?pesan=beli#pemesanan';</script>";
        } else {
            // buat query PEMESANAN
            $sql = "UPDATE pemesanan SET nickname='$nick', size='$ukuran', quantity='$jumlah' WHERE nim='$Nim'";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                // kalau berhasil alihkan ke halaman pemesanan
                echo "<script>window.location='./pemesanan.php?pesan=editsukses#pemesanan';</script>";
            } else {
                echo "<script>window.location='./pemesanan.php?pesan=editgagal#pemesanan';</script>";
            }
        }
    } else {
        echo "<script>window.location='./';</script>";
    }
}
?>