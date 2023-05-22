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
        <p class="text-center title">Tambah Data Karyawan</p>
    </div>
</header>

<main>
    <div class="form-content">
        <form action="../../handler/karyawan/tambah-karyawan.php" method="post">
            <table class="table-form">
                <tr>
                    <td class="form-item">ID Karyawan</td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <label>
                            <input type="text" name="id-karyawan">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td class="form-item">Nama</td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <label>
                            <input type="text" name="nama-karyawan">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td class="form-item">
                        <label for="jk">Pilih jenis kelamin</label>
                    </td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <select name="jk" id="jk">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="form-item">Posisi</td>
                    <td class="form-item">:</td>
                    <td class="form-item">
                        <label>
                            <input type="text" name="posisi">
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