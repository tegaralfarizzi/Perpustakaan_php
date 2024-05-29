<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit=$unit WHERE id=$id");
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <div class="container w-75">

        <h1 class="my-4">Form Edit Buku</h1>

        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input value="<?php echo $buku['nama'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ISBN</label>
                <input  value="<?php echo $buku['isbn'] ?>" type="text" class="form-control" id="exampleInputPassword1" name="isbn">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Unit</label>
                <input value="<?php echo $buku['unit'] ?>" type="text" class="form-control" id="exampleInputPassword1" name="unit">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        <a class="btn btn-secondary"href="./buku.php">Kembali ke halaman daftar buku</a>

    </div>


    

    <!-- <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $buku['nama'] ?>" type="text" id="nama" name="nama">

        <br><br>

        <label for="isbn">ISBN</label>
        <input value="<?php echo $buku['isbn'] ?>" type="text" id="isbn" name="isbn">

        <br><br>

        <label for="unit">Unit</label>
        <input value="<?php echo $buku['unit'] ?>" type="number" id="unit" name="unit">

        <br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <br>
    <a href="./buku.php">Kembali ke halaman daftar buku</a> -->
</body>
</html>