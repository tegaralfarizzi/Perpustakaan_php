<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
    $staff = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $telp = $_POST["telp"];
        $email = $_POST["email"];

        $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id");
    }
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <div class="container w-75">
        
        <h1 class="m-4">Form Edit Staff</h1>

        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input value="<?php echo $staff['nama'] ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Telepon</label>
                <input value="<?php echo $staff['telp'] ?>" type="text" class="form-control" id="exampleInputPassword1" name="telp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input value="<?php echo $staff['email'] ?>" type="text" class="form-control" id="exampleInputPassword1" name="email">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

        <a class="btn btn-secondary" href="./staff.php">Kembali ke halaman daftar staff</a>

    </div>


    <!-- <h1>Form Edit Staff</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff['nama'] ?>" type="text" id="nama" name="nama">

        <br><br>

        <label for="telp">Telepon</label>
        <input value="<?php echo $staff['telp'] ?>" type="text" id="telp" name="telp">

        <br><br>

        <label for="email">Email</label>
        <input value="<?php echo $staff['email'] ?>" type="email" id="email" name="email">

        <br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

    <br>
    <a href="./staff.php">Kembali ke halaman daftar staff</a> -->
</body>
</html>