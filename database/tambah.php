<!DOCTYPE html>
<html>

<head>
    <title>TAMBAHKAN DATA SISWA</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <div class="container col-md-6 mt-4">

        <br>
        <br>
        <h1>Tambahkan Data Siswa</h1>
        <div class="card">
            <div class="card-header bg-dark text-white">
            </div>
            <br>
            <div class="card-body">
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>NIS : </label>
                        <input type="text" name="nis" placeholder="NIS" required="" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Nama : </label>
                        <input type="text" name="nama" placeholder="Nama" required="" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Kelas : </label>
                        <select name="kelas">
                            <option>X</option>
                            <option>XI</option>
                            <option>XII</option>
                            required="" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Jurusan : </label>
                        <select name="jurusan">
                            <option>Rekayasa Perangkat Lunak</option>
                            <option>Teknologi Komputer Jaringan</option>
                            <option>Multimedia</option>
                            required="" class="form-control">
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Alamat : </label>
                        <input type="text" name="alamat" placeholder="Alamat" required="" class="form-control">
                    </div>
                    <br>

                    <a href="tampilan.php" class="btn btn-primary">Batalkan</a>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
                </form>

                <?php
                include('koneksi.php');

                if (isset($_POST['submit'])) {
                    // $id = $_POST;
                    $id = $_POST;
                    $nis = $_POST['nis'];
                    $nama = $_POST['nama'];
                    $kelas = $_POST['kelas'];
                    $jurusan = $_POST['jurusan'];
                    $alamat = $_POST['alamat'];

                    mysqli_query($conn, "INSERT INTO siswa(nis,nama,kelas,jurusan,alamat) VALUES ('$nis','$nama','$kelas','$jurusan','$alamat')") or die(mysqli_error($conn));



                    echo "<script>alert('Data Berhasil Disimpan.');window.location='tampilan.php';</script>";
                }
                ?>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>