<?php  
    session_start();
    require 'functions.php';

    //cek cookie
    if ( isset($_COOKIE['cookieService']) && isset($_COOKIE['key']) ) {
        $id = $_COOKIE['cookieService'];
        $key = $_COOKIE['key'];

        //ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        //cek cookie dan username
        if ( $key === hash('sha256', $row['email']) ) {
            $role = $row["role"];

            if ($role === "member") {
                $_SESSION["member"] = true;
            }
            elseif ($role == "admin") {
                $_SESSION["admin"] = true;
            }
        }
    }

    //==========================================================

    // if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    //     $id = $_COOKIE['id'];
    //     $key = $_COOKIE['key'];
    
    //     // Ambil user berdasarkan id
    //     $result = mysqli_query($conn, "SELECT * FROM user WHERE id = $id");
    //     $row = mysqli_fetch_assoc($result);
    
    //     // Cek cookie key
    //     if ($key === hash('sha256', $row['email'])) {
    //         if($row["role"] === "admin"){
    //             $_SESSION['admin'] = true;
    //         }

    //         elseif($row["role"] === "member") {
    //             $_SESSION['member'] = true;
    //         }
    //     }
    // }

    // if (isset($_SESSION["masuk"])) {
    //     header("Location: index.php");
    //     exit;
    // }

    // if (isset($_POST["masuk"])) {
        
    //     if(cekStatus($_POST) == "admin") {
    //         echo "hello admin";
    //     }
    //     elseif (cekStatus($_POST) == "member") {
    //         echo "hello member";
    //     }
    // }

    if(isset($_POST["masuk"])) {
        $result = masukCheck($_POST);

        if($_SESSION["member"] == true) {
            header("Location: index.php");
        }
        elseif ($_SESSION["admin"] == true) {
            header("Location: dashboardAdmin.php");
        } 
        else {
            $_SESSION["error"] = true;
        }
    }

    if (isset($_SESSION["admin"]) || isset($_SESSION["member"])) {
        header("Location: dashboardAdmin.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>masuk</title>
    <link rel="stylesheet" href="css/masuk.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex flex-column">

<div class="container">
    <h1>Login</h1>
    <?php if(isset($_SESSION["error"])) :?>
        <p class="text-danger">Useraname / Password salah!</p>
    <?php endif?>
    <form id="loginForm" action="" method="post">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="contoh@domain.com" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>

        <div>
            <input type="checkbox" id="terms" name="remember">
            <label for="terms">Ingat saya?</label>
        </div>

        <button type="submit" name="masuk">Login</button>

        <div class="footer">
            Belum memiliki akun? <a href="daftar.php">Daftar di sini</a>
        </div>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
