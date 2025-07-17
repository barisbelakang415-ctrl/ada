<?php include 'config.php'; ?>
<h2>Daftar Barang</h2>
<a href="tambah.php">+ Tambah Barang</a>
<table border="1" cellpadding="8">
<tr><th>No</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr>

<?php
$no = 1;
$data = $koneksi->query("SELECT * FROM barang");
while ($row = $data->fetch_assoc()):
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama_barang'] ?></td>
    <td><?= $row['harga'] ?></td>
    <td><?= $row['stok'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id_barang'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id_barang'] ?>" onclick="return confirm('Yakin?')">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
