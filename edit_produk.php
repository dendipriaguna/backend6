<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM produk WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Produk</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<body class="container">
<h2>Edit Produk</h2>
<form action="proses_edit.php" method="POST">
<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

<label>Nama Produk:</label><br>
<input type="text" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" required><br><br>

<label>Harga:</label><br>
<input type="number" name="harga" value="<?php echo $data['harga']; ?>" required><br><br>

<label>Stok:</label><br>
<input type="number" name="stok" value="<?php echo $data['stok']; ?>" required><br><br>

<button type="submit">Simpan Perubahan</button>
</form>
</body>
</html>