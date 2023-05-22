<?php

include '../koneksi.php';

// Tangkap data dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Mendapatkan value dari form tambah karyawan
    $kd_aset = $_POST['kd-aset'];
    $nama_aset = $_POST['nama-aset'];
    $kategori = $_POST['kategori'];
    $tgl_beli = $_POST['tgl-beli'];
    $harga = $_POST['harga'];
    $lokasi = $_POST['lokasi'];

    // Query untuk mengupdate data
    $update = "UPDATE aset SET kd_aset='$kd_aset', nama_aset='$nama_aset', kategori='$kategori', tgl_beli='$tgl_beli', harga='$harga', lokasi='$lokasi' WHERE kd_aset=$kd_aset";

    // Eksekusi query
    if (mysqli_query($conn, $update)) {
        // Redirect ke halaman sukses atau halaman lainnya
        header('Location: ../../index.php');
        exit();
    } else {
        // Menampilkan pesan kesalahan jika terjadi error saat mengupdate data
        echo "Error: " . mysqli_error($conn);
        die();
    }
}