<?php

// Include file koneksi.php
include '../koneksi.php';

// Periksa apakah parameter id tersedia
if (!isset($_GET['kd_aset'])) {
    header('Location: ../../index.php');
    exit();
}

// Tangkap nilai id dari parameter URL
$id = $_GET['kd_aset'];

// Query untuk menghapus data berdasarkan id
$delete = "DELETE FROM aset WHERE kd_aset = $id";

// Eksekusi query
if (mysqli_query($conn, $delete)) {

    // Redirect ke halaman data setelah berhasil menghapus
    header('Location: ../../index.php');
    exit();
} else {
    // Menampilkan pesan kesalahan jika terjadi error saat menghapus data
    echo "Error: " . mysqli_error($conn);
    die();
}

?>
