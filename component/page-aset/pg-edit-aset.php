<?php

// Include file koneksi.php
include '../../handler/koneksi.php';

// Periksa apakah parameter id tersedia
if (!isset($_GET['kd_aset'])) {
    header('Location: ../../index.php');
    exit();
}

// Tangkap nilai id dari parameter URL
$id = $_GET['kd_aset'];

// Query untuk mendapatkan data berdasarkan id
$query = "SELECT * FROM aset WHERE kd_aset = $id";
$result = mysqli_query($conn, $query);

// Periksa apakah data ditemukan
if (mysqli_num_rows($result) == 0) {
    echo "Data tidak ditemukan.";
    exit();
}

// Ambil data dari hasil query
$row = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiDev Indonesia</title>

    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="../form.css">
</head>
<body>

<header>
    <nav>
        <div class="navbar text-center">
            <h1 class="logo">Mi<span>Dev</span> Indonesia</h1>
        </div>
    </nav>

    <div class="wrap-top flex">
        <a href="../../index.php" class="btn btn-kembali">&laquo; Kembali</a>
        <p class="text-center title">Edit Data Aset dan Inventaris</p>
    </div>
</header>

<main>
    <div class="form-content">
        <form action="../../handler/aset/edit-aset.php" method="post">
            <table class="table-form">
                <tr>
                    <td class="form-item">Kode Aset</td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <label>
                            <input type="text" name="kd-aset" value="<?php echo $row['kd_aset'] ?>">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td class="form-item">Nama Aset</td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <label>
                            <input type="text" name="nama-aset" value="<?php echo $row['nama_aset'] ?>">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td class="form-item">
                        <label for="kategori">Pilih jenis kategori</label>
                    </td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <select name="kategori" id="kategori">
                            <option value="Perangkat IT">Perangkat IT</option>
                            <option value="Jaringan">Jaringan</option>
                            <option value="Keamanan">Keamanan</option>
                            <option value="Perlengkapan">Perlengkapan</option>
                            <option value="Jaringan">Jaringan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="form-item">Tanggal Beli</td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <label>
                            <input type="date" name="tgl-beli" value="<?php echo $row['tgl_beli'] ?>">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td class="form-item">Harga($)</td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <label>
                            <input type="number" name="harga" step="0.01" value="<?php echo $row['harga'] ?>">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td class="form-item">Lokasi</td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <label>
                            <input type="text" name="lokasi" value="<?php echo $row['lokasi'] ?>">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td class="form-item text-center" colspan="3">
                        <input class="btn btn-simpan" type="submit" value="simpan">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</main>

</body>
</html>
