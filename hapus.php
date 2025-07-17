<?php
include 'config.php';
$id = $_GET['id'];
$koneksi->query("DELETE FROM barang WHERE id_barang=$id");
header("Location: index.php");
