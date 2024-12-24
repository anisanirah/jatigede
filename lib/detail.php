<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'jatigede';

$db = mysqli_connect($hostname, $username, $password, $database_name);

$id_pemesanan = htmlentities($_GET['id']);

$sql = "SELECT * FROM pemesanan where id = '$id_pemesanan'";

$query = mysqli_query($db, $sql);
date_default_timezone_set('Asia/Jakarta');

if (mysqli_num_rows($query) == 0) {
   echo 'tidak ada';
   exit;
} else {
   $detail = mysqli_fetch_row($query);
?>

<main>
            <h2>Detail Pemesanan #<?=$detail[0]?></h2>
            <form method="post" action="lib/proses.php">
                <!-- Input Nama -->
                <label for="nama">Nama Lengkap</label>
                <p><?=$detail[1]?></p>

                <!-- Input Handphone -->
                <label for="handphone">Nomor Handphone</label>
                <p><?=$detail[2]?></p>

                <!-- Input Waktu -->
                <label for="waktu">Waktu Mulai Perjalanan</label>
                <p><?=$detail[3]?></p>

                <!-- Input Hari Wisata -->
                <label for="hari">Hari Wisata</label>
                <p><?=$detail[4]?></p>

                <!-- Paket Tambahan -->
                <fieldset>
                    <legend>Pilihan Paket Tambahan</legend>
                    <label>
                        <input name="paket_inap" type="checkbox" <?=($detail[5]==1)?'checked':''?> disabled class="paket" value="1000000" onchange="hitungTotal()"> Penginapan (Rp. 1.000.000)
                    </label><br>
                    <label>
                        <input name="paket_transport" <?=($detail[6]==1)?'checked':''?> disabled type="checkbox" class="paket" value="1200000" onchange="hitungTotal()"> Transportasi (Rp. 1.200.000)
                    </label><br>
                    <label>
                        <input name="paket_makan" <?=($detail[7]==1)?'checked':''?> disabled type="checkbox" class="paket" value="500000" onchange="hitungTotal()"> Service/Makan (Rp. 500.000)
                    </label>
                </fieldset>

                <!-- Jumlah Peserta -->
                <label for="peserta">Jumlah Peserta</label>
                <p><?=$detail[8]?></p>

                <!-- Harga Paket -->
                <label for="harga">Total Tagihan</label>
                <p><?=$detail[9]?></p>

                <!-- Total Tagihan -->
                <label for="total">Tanggal Pemesanan</label>
                <p><?=$detail[10]?></p>

                <!-- Tombol Simpan dan Ulangi -->
                <div class="buttons">
                    <button class="btn btn-primary">Buat Pesanan Baru</button>
                    <button onclick="window.print()" class="btn btn-secondary">Cetak</button>
                </div>
            </form>
        </main>
    <?php } ?>
</body>
</html>
