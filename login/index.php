<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="card">
        </div>
        <br>
        <h1>Silahkan Login</h1>
        <div class="card-body">
            <form method="post" action="progres_login.php">
                <div class="form-group">
                    <label>Username : </label>
                    <input type="text" name="username" placeholder="Username Anda" required="" class="form-control">
                    <br>
                    <div class="form-group">
                        <label>Password : </label>
                        <input type="password" name="username" placeholder="Password Anda" required="" class="form-control">
                    </div>
                    <a href="registrasi.php">Belum Punya Akun?</a>
                    <br>
                    <br>
                    <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
                    <a href="halaman.php"> <button type="submit" class="btn btn-primary" name="submit" value="simpan">Login</button> </a>
                </div>



</body>

</html>