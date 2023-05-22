<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiDev Indonesia</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include 'handler/koneksi.php';
    ?>

    <header>
        <nav>
            <div class="navbar flex">
                <h1 class="logo">Mi<span>Dev</span> Indonesia</h1>
                <div class="nav-menu flex">
                    <div class="nav-item active" id="tab-1">Data Karyawan</div>
                    <div class="nav-item" id="tab-2">Data Inventaris dan Aset</div>
                </div>
            </div>
        </nav>
    </header>

    <main>
<!--        kontent table karyawan -->
        <div class="content show" id="tab-1-content">
            <?php
                $res_karyawan = mysqli_query($conn, $query_karyawan);
            ?>

            <div class="wrap-title flex">
                <h2>Tabel Karyawan</h2>
                <a class="btn btn-tambah" href="component/page-karyawan/pg-add-karyawan.php">Tambah Data</a>
            </div>

            <table class="table-content">
                <thead>
                    <th class="table-item text-center">No.</th>
                    <th class="table-item text-center">ID Karyawan</th>
                    <th class="table-item text-center">Nama</th>
                    <th class="table-item text-center">Jenis Kelamin</th>
                    <th class="table-item text-center">Posisi</th>
                    <th class="table-item text-center">Aksi</th>
                </thead>
                <tbody>
                <?php
                $num_k = 1;
                while ($row_karyawan = mysqli_fetch_assoc($res_karyawan)) { ?>
                    <tr>
                        <td class="table-item text-center"><?php echo $num_k; ?></td>
                        <td class="table-item text-center"><?php echo $row_karyawan['id_karyawan']; ?></td>
                        <td class="table-item"><?php echo $row_karyawan['nama']; ?></td>
                        <td class="table-item"><?php echo $row_karyawan['jk']; ?></td>
                        <td class="table-item"><?php echo $row_karyawan['posisi']; ?></td>
                        <td class="table-item">
                            <a href="component/page-karyawan/pg-edit-karyawan.php?id_karyawan=<?php echo $row_karyawan['id_karyawan']; ?>" class="btn btn-edit">Edit</a>
                            <a href="handler/karyawan/del-karyawan.php?id_karyawan=<?php echo $row_karyawan['id_karyawan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-delete">Delete</a>
                        </td>
                    </tr>
                <?php
                $num_k++;
                } ?>
                </tbody>
            </table>
        </div>

<!--        konten tabel aset -->
        <div class="content" id="tab-2-content">
            <?php
            $res_aset = mysqli_query($conn, $query_aset);
            ?>

            <div class="wrap-title flex">
                <h2>Tabel Aset dan Inventaris</h2>
                <a class="btn btn-tambah" href="component/page-aset/pg-add-aset.php">Tambah Data</a>
            </div>

            <table class="table-content">
                <thead>
                <th class="table-item text-center">No.</th>
                <th class="table-item text-center">Kode Aset</th>
                <th class="table-item text-center">Nama Aset</th>
                <th class="table-item text-center">Kategori</th>
                <th class="table-item text-center">Tanggal Pembelian</th>
                <th class="table-item text-center">Harga</th>
                <th class="table-item text-center">Lokasi</th>
                <th class="table-item text-center">Aksi</th>
                </thead>
                <tbody>
                <?php
                $num_a = 1;
                while ($row_aset = mysqli_fetch_assoc($res_aset)) { ?>
                    <tr>
                        <td class="table-item text-center"><?php echo $num_a; ?></td>
                        <td class="table-item text-center"><?php echo $row_aset['kd_aset']; ?></td>
                        <td class="table-item"><?php echo $row_aset['nama_aset']; ?></td>
                        <td class="table-item"><?php echo $row_aset['kategori']; ?></td>
                        <td class="table-item"><?php echo $row_aset['tgl_beli']; ?></td>
                        <td class="table-item"><?php echo $row_aset['harga']; ?></td>
                        <td class="table-item"><?php echo $row_aset['lokasi']; ?></td>
                        <td class="table-item">
                            <a href="component/page-aset/pg-edit-aset.php?kd_aset=<?php echo $row_aset['kd_aset']; ?>" class="btn btn-edit">Edit</a>
                            <a href="handler/aset/del-aset.php?kd_aset=<?php echo $row_aset['kd_aset']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-delete">Delete</a>
                        </td>
                    </tr>
                    <?php
                    $num_a++;
                } ?>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <div class="footer-wrap flex">
            <p><b>MIFTACHUL HUDA</b> &copy; 2023 MiDev Indonesia. All rights reserved.</p>
        </div>
    </footer>


    <script src="main.js"></script>
</body>
</html>