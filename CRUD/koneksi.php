<?php
$koneksi = new mysqli('localhost', 'root', '','mnc_test');

if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
} 
?>