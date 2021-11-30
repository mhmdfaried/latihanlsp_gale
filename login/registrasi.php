<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registrasi</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="card">
        </div>
        <br>
        <h1>Silahkan Registrasi</h1>
        <div class="card-body">
            <form method="post" action="progres_regis.php">
                <div class="form-group">
                    <label>Username : </label>
                    <input type="text" name="username" placeholder="Username Anda" required="" class="form-control">
                    <br>
                    <div class="form-group">
                        <label>Password : </label>
                        <input type="password" name="password" placeholder="Password Anda" required="" class="form-control">
                    </div>

                    <a class="btn btn-primary" href="index.php" role="button">Kembali</a>
                    <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
                    <button class="btn btn-primary" type="submit">Simpan</button></a>
                </div>




</body>

</html>