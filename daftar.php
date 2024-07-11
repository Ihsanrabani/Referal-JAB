<?php
    require 'functions.php';

    if (isset($_POST["login"])) {

        if (!empty($_POST["referal_code"])) {

            if(daftarYR($_POST) > 0) {
                echo '<script>
                    alert("Daftar berhasil!")
                </script>';
                header("Location: masuk.php");
            }
            else {
                echo '<script>
                    alert("Daftar gagal!")
                </script>';
            }

        } 
        else {

            if(daftarNR($_POST) > 0) {
                echo '<script>
                    alert("Daftar berhasil!")
                </script>';
                header("Location: masuk.php");
            }
            else {
                echo '<script>
                    alert("Daftar gagal!")
                </script>';
            }

        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="css/daftar.css">
</head>
<body>

<div class="container">
    <h1>Daftar Sekarang</h1>
    <form id="registrationForm" method="post">

        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" id="nama_lengkap" name="nama_lengkap" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="contoh@domain.com" required>

        <label for="no_telp">Nomor Telepon</label>
        <input type="text" id="no_telp" name="no_telp" placeholder="+62-xxx-xxxx-xxxx" required>

        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Pilih username Anda" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Buat password Anda" required>

        <label for="password2">Konfirmasi Password</label>
        <input type="password" id="password2" name="password2" placeholder="Masukkan ulang password Anda" required>

        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" placeholder="Jl. Nama Jalan, Kota, Provinsi" required>

        <label for="referral_code">Referal Code (Optional)</label>
        <input type="text" id="referral_code" name="referal_code" placeholder="Masukkan kode referensi jika ada">

        <div>
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">Saya setuju dengan Syarat dan Ketentuan</label>
        </div>

        <button type="submit" name="login">Daftar Sekarang</button>

        <div class="footer">
            Sudah memiliki akun? <a href="masuk.php">Login di sini</a>
        </div>
    </form>
</div>
</body>
</html>
