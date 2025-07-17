<?php
$koneksi = new mysqli("localhost", "root", "", "jual_beli");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
