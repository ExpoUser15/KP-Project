<?php
session_start();
    include "../config/config.php";
    $kj = @$_SESSION['username'];
    $wqw = mysqli_query($conn,  "SELECT * FROM tb_admin WHERE username = '$kj'");
    if(isset($_SESSION['username']) && mysqli_num_rows($wqw) == 1){
        echo "<script>location.href = 'index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Administrator</title>
    <link rel="stylesheet" href="assets//dist/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh; width: 100%;">
        <div class="p-5 shadow-lg" style="width: 400px;">
            <header class="d-flex">
                <img src="assets/img/123.png" alt="" style="width: 60px; height: 60px;">
                <div class="ms-2 text-secondary pt-2">
                    <h6>Kelurahan Pal Putih</h6>
                    <h6>Distrik Sorong Barat</h6>
                </div>
            </header>
            <main class="mt-4">
                <h4>Log In</h4>
                <form action="login/log.php" method="POST">
                    <div class="mt-3">
                        <input type="text" placeholder="Username" class="form-control" name="username">
                    </div>
                    <div class="mt-3">
                        <input type="password" placeholder="Password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="login">Login</button>
                </form>
            </main>
        </div>
    </div>
</body>
</html>