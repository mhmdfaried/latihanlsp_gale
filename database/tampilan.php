<!DOCTYPE html>
<html>

<head>
    <title>Tampilan Data Siswa</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <div class="container">
        <h1>Data Siswa</h1>
        <a href="tambah.php" class="btn btn-sm btn-success">+ Tambahkan Data Siswa</a>
        <br></br>
        <table class="table table-bordered table-dark">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php
            include('koneksi.php');
            $data = mysqli_query($conn, "SELECT * FROM siswa");
            $no = 1;
            while ($siswa = mysqli_fetch_array($data)) {
            ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $siswa['nis'] ?></td>
                    <td><?php echo $siswa['nama'] ?></td>
                    <td><?php echo $siswa['kelas'] ?></td>
                    <td><?php echo $siswa['jurusan'] ?></td>
                    <td><?php echo $siswa['alamat'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $siswa['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="hapus.php?id=<?= $siswa['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>