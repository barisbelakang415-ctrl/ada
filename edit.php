<?php
include 'config.php';
$id = $_GET['id'];
$data = $koneksi->query("SELECT * FROM barang WHERE id_barang=$id")->fetch_assoc();

if ($_POST) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $koneksi->query("UPDATE barang SET nama_barang='$nama', harga='$harga', stok='$stok' WHERE id_barang=$id");
    header("Location: index.php");
}
?>

<h2>Edit Barang</h2>
<form method="post">
    Nama: <input type="text" name="nama" value="<?= $data['nama_barang'] ?>"><br>
    Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>"><br>
    Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>"><br>
    <button type="submit">Update</button>
</form>
