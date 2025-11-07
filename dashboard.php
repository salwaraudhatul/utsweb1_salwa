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
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Harga (Rp)</th>
        </tr>

        <?php for ($i = 0; $i < count($kode_barang); $i++) { ?>
            <tr>
                <td><?php echo $kode_barang[$i]; ?></td>
                <td><?php echo $nama_barang[$i]; ?></td>
                <td><?php echo number_format($harga_barang[$i], 0, ',', '.'); ?></td>
            </tr>
        <?php } ?>
    </table>

 
</body>
</html>