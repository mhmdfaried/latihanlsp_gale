<!DOCTYPE html>
<html>

<head>
    <title>EDIT DATA SISWA</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <div class="container col-md-6 mt-4">
        <h1>Edit Data Siswa</h1>
        <div class="card">
            <div class="card-header bg-dark text-white ">

            </div>
            <div class="card-body">
                <?php
                include('koneksi.php');

                $id = $_GET['id'];

                $data = mysqli_query($conn, "SELECT * FROM siswa where id = '$id'");
                $row = mysqli_fetch_assoc($data);

                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>NIS : </label>
                        <input type="text" name="nis" placeholder="NIS" required="" class="form-control" value="<?= $row['nis']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nama : </label>
                        <input type="text" name="nama" placeholder="Nama" required="" class="form-control" value="<?= $row['nama']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Kelas : </label>
                        <select name="kelas">
                            <option value="X" <?php if ($row['kelas'] == 'X') echo ' selected="selected"'; ?>>X</option>
                            <option value="XI" <?php if ($row['kelas'] == 'XI') echo ' selected="selected"'; ?>>XI</option>
                            <option value="XII" <?php if ($row['kelas'] == 'XII') echo ' selected="selected"'; ?>>XII</option>
                            required="" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Jurusan : </label>
                        <select name="jurusan" value="<?= $row['jurusan']; ?>">
                            <option value="Rekayasa Perangkat Lunak" <?php if ($row['jurusan'] == 'Rekayasa Perangkat Lunak') echo ' selected="selected"'; ?>>Rekayasa Perangkat Lunak</option>
                            <option value="Teknologi Komputer Jaringan" <?php if ($row['jurusan'] == 'Teknologi Komputer Jaringan') echo ' selected="selected"'; ?>>Teknologi Komputer Jaringan</option>
                            <option value="Multimedia" <?php if ($row['jurusan'] == 'Multimedia') echo ' selected="selected"'; ?>>Multimedia</option>
                            required="" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Alamat : </label>
                        <input type="text" name="alamat" placeholder="Alamat" required="" class="form-control" value="<?= $row['alamat']; ?>">
                    </div>
                    <br>

                    <a href="tampilan.php" class="btn btn-primary">Batalkan</a>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Update Data</button>
                </form>

                <?php

                if (isset($_POST['submit'])) {

                    $id = $_GET['id'];
                    $nis = $_POST['nis'];
                    $nama = $_POST['nama'];
                    $kelas = $_POST['kelas'];
                    $jurusan = $_POST['jurusan'];
                    $alamat = $_POST['alamat'];

                    mysqli_query($conn, "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas' , jurusan='$jurusan' , alamat='$alamat' where id ='$id'") or die(mysqli_error($conn));

                    echo "<script>alert('data berhasil diupdate.');window.location='tampilan.php';</script>";
                }



                ?>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>