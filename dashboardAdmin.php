<?php
    session_start();
    require 'functions.php';
    if (!isset($_SESSION["member"]) && !isset($_SESSION["admin"])) {
        header("Location: masuk.php");
    }

    if(isset($_SESSION["member"])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

</head>
<body>
    <a href="index.php">home    </a>
    <form action="" method="post">
        <input type="text" placeholder="masukkan email">
        <button type="submit" name="cari">Cari user</button>
    </form>

    <table class="table">

    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>