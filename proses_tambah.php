<?php
include 'koneksi.php';

$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama_produk', '$harga', '$stok')";

if (mysqli_query($conn, $query)) {
echo "Produk berhasil ditambahkan";
} else {
echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>