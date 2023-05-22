<?php

include '../koneksi.php';

// Tangkap data dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Mendapatkan value dari form tambah karyawan
    $id_karyawan = $_POST['id-karyawan'];
    $nama_karyawan = $_POST['nama-karyawan'];
    $jk = $_POST['jk'];
    $posisi = $_POST['posisi'];

    // Query untuk mengupdate data
    $update = "UPDATE karyawan SET id_karyawan = '$id_karyawan', nama = '$nama_karyawan', jk = '$jk', posisi = '$posisi' WHERE id_karyawan = $id_karyawan";

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