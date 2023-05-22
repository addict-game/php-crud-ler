<?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'db_midev';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('koneksi gagal : ' . $conn->connect_error);
    }

    $query_karyawan = 'SELECT * FROM karyawan';
    $total_karyawan = 'SELECT COUNT(*) as totalk FROM karyawan';
    $query_aset = 'SELECT * FROM aset';
    $total_aset = 'SELECT COUNT(*) as totala FROM aset';

?>