<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tambah Produk</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<body class="container">
<h2>Tambah Produk</h2>
<form action="proses_tambah.php" method="POST">

<label>Nama Produk:</label><br>
<input type="text" name="nama_produk" required><br><br>

<label>Harga:</label><br>
<input type="number" name="harga" required><br><br>

<label>Stok:</label><br>
<input type="number" name="stok" required><br><br>

<button type="submit">Tambah Produk</button>
</form>
</body>
</html>