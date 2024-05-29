<?php

    session_start();

    if(isset($_SESSION['email'])){
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>


    <!-- methode form -->

    <div class="container w-75">
    <h2 class="my-4">Register</h2>
    <form method="POST" action="./register_proccess.php">
    <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input required type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input required type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Register</button>

            <a class="btn btn-secondary"href="./login.php">Kembali ke halaman login</a>
    </form>
    </div>


</body>
</html>