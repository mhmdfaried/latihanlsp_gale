<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($conn, "INSERT INTO user (username, password) VALUE ('$username','$password') ");

header("location:index.php");
