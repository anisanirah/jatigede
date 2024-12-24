<!DOCTYPE html>
<html lang="id">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Detail Pemesanan</title>
   <style>
       body {
           font-family: Arial, sans-serif;
           margin: 0;
           padding: 20px;
           background-color: #1a1a1a;
           color: white;
       }
       .container {
           max-width: 1200px;
           margin: 0 auto;
           padding: 20px;
       }
       header {
           text-align: center;
           margin-bottom: 30px;
       }
       nav {
           margin: 20px 0;
       }
       nav a {
           color: #fff;
           text-decoration: none;
           margin: 0 15px;
           padding: 5px 10px;
       }
       nav a:hover {
           text-decoration: underline;
       }
       .table {
           width: 100%;
           border-collapse: separate;
           border-spacing: 0;
           margin: 20px 0;
           background-color: #333;
           border-radius: 8px;
       }
       .table th, .table td {
           padding: 15px;
           text-align: left;
           border-bottom: 1px solid #444;
       }
       .table th {
           background-color: #444;
           font-weight: bold;
       }
       .table tr:last-child td {
           border-bottom: none;
       }
       .table a {
           color: #4a9eff;
           text-decoration: none;
           margin-right: 10px;
       }
       .table a:hover {
           text-decoration: underline;
       }
       h1 {
           margin-bottom: 30px;
           text-align: center;
       }
   </style>
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
       
       <?php
       include 'lib/koneksi.php';

       $sql = "SELECT * FROM pemesanan ORDER BY created_at DESC";
       $query = mysqli_query($db, $sql);

       if (mysqli_num_rows($query) == 0) {
           echo '<p style="text-align: center;">Tidak ada pemesanan</p>'; 
           exit;
       } else {
           $results = [];
           while ($row = mysqli_fetch_assoc($query)) {
               $results[] = $row;
           }
       ?>

       <h1>Daftar Pemesanan</h1>
       <table class="table">
           <thead>
               <tr>
                   <th>No</th>
                   <th>Nama Pemesan</th>
                   <th>Nomor HP</th>
                   <th>Tanggal Berangkat</th>
                   <th>Total Tagihan</th>
                   <th>Aksi</th>
               </tr>
           </thead>
           <tbody>
               <?php
               $co = 1;
               foreach ($results as $detail) {
               ?>
               <tr>
                   <td><?=$co?></td>
                   <td><?=$detail['nama_pemesanan']?></td>
                   <td><?=$detail['hp_pemesan']?></td>
                   <td><?=$detail['waktu_wisata']?></td>
                   <td>Rp <?=number_format($detail['total_tagihan'], 0, ',', '.')?></td>
                   <td>
                       <a href="index.php?aksi=detail&id_pemesanan=<?=$detail['id_pemesanan']?>">Detail</a>
                       <a href="index.php?aksi=edit&id_pemesanan=<?=$detail['id_pemesanan']?>">Edit</a>
                       <a href="hapus.php?id_pemesanan=<?=$detail['id_pemesanan']?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                   </td>
               </tr>
               <?php
                   $co++;
               }
               ?>
           </tbody>
       </table>
       <?php
       } 
       ?>
   </div>
</body>
</html>