<?php

include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Mendapatkan value dari form tambah karyawan
    $kd_aset = $_POST['kd-aset'];
    $nama_aset = $_POST['nama-aset'];
    $kategori = $_POST['kategori'];
    $tgl_beli = $_POST['tgl-beli'];
    $harga = $_POST['harga'];
    $lokasi = $_POST['lokasi'];

    // Query untuk menyimpan data ke dalam tabel
    $insert = "INSERT INTO aset (kd_aset, nama_aset, kategori, tgl_beli, harga, lokasi) VALUES ('$kd_aset', '$nama_aset', '$kategori', '$tgl_beli', '$harga', '$lokasi')";

    // Eksekusi query
    if (mysqli_query($conn, $insert)) {
        // Redirect ke halaman sukses atau halaman lainnya
        header('Location: ../../index.php');
        exit();
    } else {
        // Menampilkan pesan kesalahan jika terjadi error saat menyimpan data
        echo "Error: " . mysqli_error($conn);
        die();
    }
}
