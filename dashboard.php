<?php
session_start();

// Cek login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}

// Data produk (5 produk)
$kode_barang = ["K001", "K002", "K003", "K004", "K005"];
$nama_barang = ["Nasi Goreng", "Air Mineral", "Teh Kotak", "Coca-Cola", "Ayam Goreng"];
$harga_barang = [10000, 3000, 5000, 6000, 7000];

// Tambahan dari commit 5
$beli = [];
$total = [];

// Buat pembelian acak untuk setiap barang
for ($i = 0; $i < count($kode_barang); $i++) {
    $jumlah_beli = rand(1, 5); // random 1–5
    $beli[] = $jumlah_beli;
    $total[] = $harga_barang[$i] * $jumlah_beli;
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fc;
            margin: 0;
            padding: 20px;
        }
        .header {
            text-align: center;
            font-weight: bold;
            font-size: 22px;
            margin-bottom: 20px;
        }
        table {
            width: 60%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4e73df;
            color: white;
        }
      
    </style>
</head>
<body>

    <div class="header">-- POLGAN MART --</div>
    <h3 style="text-align:center;">Daftar pembelian dibuat secara acak tiap kali halaman dimuat<?php echo $_SESSION['username']; ?>!</h3>

    <table>
    <tr><th colspan="5">-- POLGAN MART --</th></tr>
    <tr>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
    </tr>
    <?php
    for ($i = 0; $i < count($kode_barang); $i++) {
        echo "<tr>
                <td>{$kode_barang[$i]}</td>
                <td>{$nama_barang[$i]}</td>
                <td>Rp " . number_format($harga_barang[$i], 0, ',', '.') . "</td>
                <td>{$beli[$i]}</td>
                <td>Rp " . number_format($total[$i], 0, ',', '.') . "</td>
              </tr>";
    }
    ?>
</table>
            
 
</body>
</html>