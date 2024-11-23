<?php
include 'koneksi.php';

$query = "SELECT * FROM produk";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Daftar Produk</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<body class="container">

<h2>Daftar Produk</h2>
<a href="tambah_produk.php">Tambah Produk</a>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
<th>ID</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>
<?php while ($row = mysqli_fetch_assoc($result)): ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['nama_produk']; ?></td>
<td><?php echo $row['harga']; ?></td>
<td><?php echo $row['stok']; ?></td>
<td>
<a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> |
<a href="hapus_produk.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>