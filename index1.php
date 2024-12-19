<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Paket Wisata</title>
    <link rel="stylesheet" href="index1.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Pemesanan</h1>
            <nav>
                <a href="index.php">Beranda</a>
                <a href="index.php">Daftar Paket Wisata</a>
                <a href="#">Hubungi Kami</a>
            </nav>
        </header>

        <main>
            <h2>Form Pemesanan Paket Wisata</h2>
            <form>
                <!-- Input Nama -->
                <label for="nama">Nama Lengkap</label>
                <input type="text" id="nama" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>

                <!-- Input Handphone -->
                <label for="handphone">Nomor Handphone</label>
                <input type="text" id="handphone" placeholder="Nomor Handphone 08..." required>

                <!-- Input Waktu -->
                <label for="waktu">Waktu Mulai Perjalanan</label>
                <input type="date" id="waktu" required>

                <!-- Input Hari Wisata -->
                <label for="hari">Hari Wisata</label>
                <input type="number" id="hari" value="1" min="1" required>

                <!-- Paket Tambahan -->
                <fieldset>
                    <legend>Pilihan Paket Tambahan</legend>
                    <label>
                        <input type="checkbox" class="paket" value="1000000" onchange="hitungTotal()"> Penginapan (Rp. 1.000.000)
                    </label><br>
                    <label>
                        <input type="checkbox" class="paket" value="1200000" onchange="hitungTotal()"> Transportasi (Rp. 1.200.000)
                    </label><br>
                    <label>
                        <input type="checkbox" class="paket" value="500000" onchange="hitungTotal()"> Service/Makan (Rp. 500.000)
                    </label>
                </fieldset>

                <!-- Jumlah Peserta -->
                <label for="peserta">Jumlah Peserta</label>
                <input type="number" id="peserta" value="1" min="1" onchange="hitungTotal()">

                <!-- Harga Paket -->
                <label for="harga">Harga Paket</label>
                <input type="text" id="harga" value="0" readonly>

                <!-- Total Tagihan -->
                <label for="total">Total Tagihan</label>
                <input type="text" id="total" value="0" readonly>

                <!-- Tombol Simpan dan Ulangi -->
                <div class="buttons">
                    <button type="submit" class="btn-primary">Simpan</button>
                    <button type="reset" class="btn-secondary" onclick="resetTotal()">Ulangi</button>
                </div>
            </form>
        </main>

        <footer>
            <p>Wisata Jatigede © 2024.</p>
        </footer>
    </div>

    <!-- JavaScript -->
    <script>
        // Fungsi menghitung total harga paket dan tagihan
        function hitungTotal() {
            const checkboxes = document.querySelectorAll('.paket');
            const jumlahPeserta = parseInt(document.getElementById('peserta').value);

            let hargaPaket = 0;

            // Menjumlahkan harga dari paket yang dicentang
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    hargaPaket += parseInt(checkbox.value);
                }
            });

            // Hitung total tagihan berdasarkan jumlah peserta
            const totalTagihan = hargaPaket * jumlahPeserta;

            // Tampilkan hasil ke input Harga Paket dan Total Tagihan
            document.getElementById('harga').value = hargaPaket.toLocaleString('id-ID');
            document.getElementById('total').value = totalTagihan.toLocaleString('id-ID');
        }

        // Fungsi reset nilai harga dan total tagihan
        function resetTotal() {
            document.getElementById('harga').value = "0";
            document.getElementById('total').value = "0";
        }
    </script>
</body>
</html>
