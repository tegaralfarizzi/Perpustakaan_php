<?php

// memulai interaksi SESSION
session_start();

// cek apakah ada SESSION["email"]
// ! : not (tidak)
if(!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit;
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container w-75">
        <h1 class="my-4">Aplikasi Perpustakaan</h1>

        <a class="btn btn-info" href="./buku.php">Lihat Daftar Buku</a>
        <a class="btn btn-warning" href="./staff.php">Lihat Daftar Staff</a>

        <form action="logout_proccess.php" method="POST">
        <button class="btn btn-danger mt-5" type="submit">Logout</button>
    </form>
    </div>
    
</body>
</html>