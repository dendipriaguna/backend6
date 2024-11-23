<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id=$id";

if (mysqli_query($conn, $query)) {
echo "Produk berhasil dihapus";
} else {
echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>