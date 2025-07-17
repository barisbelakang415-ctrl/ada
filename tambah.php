<?php include 'config.php';

if ($_POST) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $koneksi->query("INSERT INTO barang (nama_barang, harga, stok) VALUES ('$nama', '$harga', '$stok')");
    header("Location: index.php");
}
?>

<h2>Tambah Barang</h2>
<form method="post">
    Nama: <input type="text" name="nama"><br>
    Harga: <input type="number" name="harga"><br>
    Stok: <input type="number" name="stok"><br>
    <button type="submit">Simpan</button>
</form>
