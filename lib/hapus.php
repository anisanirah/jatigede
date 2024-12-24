<?php
include 'lib/koneksi.php';

$id_pemesanan = $_GET['id_pemesanan'];
$sql = "DELETE FROM pemesanan WHERE id_pemesanan='$id_pemesanan'";
$query = mysqli_query($db, $sql);

if($query) {
    echo "<script>
            alert('Data berhasil dihapus');
            window.location.href='daftar.php';
          </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            window.location.href='daftar.php';
          </script>";
}
?>