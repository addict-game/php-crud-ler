<?php

include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Mendapatkan value dari form tambah karyawan
    $id_karyawan = $_POST['id-karyawan'];
    $nama_karyawan = $_POST['nama-karyawan'];
    $jk = $_POST['jk'];
    $posisi = $_POST['posisi'];

    // Query untuk menyimpan data ke dalam tabel
    $insert = "INSERT INTO karyawan (id_karyawan, nama, jk, posisi) VALUES ('$id_karyawan', '$nama_karyawan', '$jk', '$posisi')";

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
