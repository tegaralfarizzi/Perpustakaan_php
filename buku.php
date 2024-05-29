<?php
include_once ("./connect.php");

$query = mysqli_query($db, "SELECT * FROM buku");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="container w-75">

        <h1 class="my-4">Daftar Buku</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($query as $buku) { ?>
                    <tr>
                        <td><?php echo $buku["nama"] ?></td>
                        <td><?php echo $buku["isbn"] ?></td>
                        <td><?php echo $buku["unit"] ?></td>
                        <td>
                            <a class="btn btn-info" href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>HAPUS</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <a class="btn btn-primary" href="./tambah-buku.php">Tambah data buku</a>
        <a class="btn btn-secondary" href="./index.php">Kembali ke halaman utama</a>

    </div>

    <!-- <table border="1">
        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>ACTION</td>
        </tr>

        <?php foreach ($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["nama"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td>
                    <a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a>
                </td>
                <td>
                    <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <a href="./tambah-buku.php">Tambah data buku</a>
    <a href="./index.php">Kembali ke halaman utama</a> -->
</body>

</html>