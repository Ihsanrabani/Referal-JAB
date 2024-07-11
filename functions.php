    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'referaljab');

        function query($query) {
            global $conn;
            $result = mysqli_query($conn, $query);
            $rows = [];
            while ( $row = mysqli_fetch_assoc($result) ) {
                $rows[] = $row;
            }
            return $rows;
        }

        function referalCodeGen() {
            $code1 = rand(1734,9974);
        
            function code2 () {
                $characters = 'abcdefghijklmnopqrstuvwxyz';
                $charactersLength = strlen($characters);
                $codeLength = 5;
                $code2 = '';
                for ($i = 0; $i < $codeLength; $i++) {
                    $code2 .= $characters[rand(0, $charactersLength - 1)];
                }
                return $code2;
            }
        
            return $referalCode = ($code1 . code2());
        }


        function daftarNR($data) {
            global $conn;

            $nama_lengkap = mysqli_escape_string($conn, htmlspecialchars($data["nama_lengkap"]));
            $email = mysqli_escape_string($conn, htmlspecialchars($data["email"]));
            $no_telp = mysqli_escape_string($conn, htmlspecialchars($data["no_telp"]));
            $username = mysqli_escape_string($conn, htmlspecialchars($data["username"]));
            $password = mysqli_escape_string($conn, htmlspecialchars($data["password"]));
            $password2 = mysqli_escape_string($conn, htmlspecialchars($data["password2"]));
            $alamat = mysqli_escape_string($conn, htmlspecialchars($data["alamat"]));
            $roleUser = "member";
            $referalCode = referalCodeGen();

            $resultReferalcode = mysqli_query($conn, "SELECT referal_code FROM user");
            if($referalCode === $resultReferalcode) {
                $referalCode = referalCodeGen();
            }

            if ($password !== $password2) {
                echo '<script>
                        alert("Konfirmasi password salah!")
                    </script>';
                return false;
            }

            $resultEmail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
            if (mysqli_fetch_assoc($resultEmail)) {
                echo "<script>
                        alert('Email sudah terdaftar!')
                    </script>" ;
                return false;
            }

            $resultUsername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
            if (mysqli_fetch_assoc($resultUsername)) {
                echo "<script>
                        alert('Username sudah terdaftar!')
                    </script>";
                return false;
            }

            $password = password_hash($password, PASSWORD_DEFAULT);


            mysqli_query($conn, "INSERT INTO user (nama_lengkap, email, no_telp, username, password, alamat, referal_code, role) VALUES ('$nama_lengkap', '$email', '$no_telp', '$username', '$password', '$alamat', '$referalCode', '$roleUser')");
            mysqli_query($conn, "INSERT INTO referal_sys (username, email, referal_point) VALUES ('$username', '$email', '')");
            
            return mysqli_affected_rows($conn);
        }

        function daftarYR($data) {
            global $conn;

            $nama_lengkap = mysqli_escape_string($conn, htmlspecialchars($data["nama_lengkap"]));
            $email = mysqli_escape_string($conn, htmlspecialchars($data["email"]));
            $no_telp = mysqli_escape_string($conn, htmlspecialchars($data["no_telp"]));
            $username = mysqli_escape_string($conn, htmlspecialchars($data["username"]));
            $password = mysqli_escape_string($conn, htmlspecialchars($data["password"]));
            $password2 = mysqli_escape_string($conn, htmlspecialchars($data["password2"]));
            $alamat = mysqli_escape_string($conn, htmlspecialchars($data["alamat"]));
            $referalCode = referalCodeGen();
            $referalCodeOPT = mysqli_escape_string($conn, htmlspecialchars($data["referal_code"]));

            $resultReferalcodeOPT = mysqli_query($conn, "SELECT referal_code FROM user WHERE referal_code = '$referalCodeOPT'");
            $resultReferalcodeOPT = mysqli_fetch_assoc($resultReferalcodeOPT);

            if (empty($resultReferalcodeOPT)) {
                echo '<script>
                    alert("Kode referal salah!")
                </script>';
                return false;
            }

            if ($password !== $password2) {
                echo '<script>
                        alert("Konfirmasi password salah!")
                    </script>';
                return false;
            }

            $resultEmail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");
            if (mysqli_fetch_assoc($resultEmail)) {
                echo "<script>
                        alert('Email sudah terdaftar!')
                    </script>" ;
                return false;
            }

            $resultUsername = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
            if (mysqli_fetch_assoc($resultUsername)) {
                echo "<script>
                        alert('Username sudah terdaftar!')
                    </script>";
                return false;
            }

            $password = password_hash($password, PASSWORD_DEFAULT);


            mysqli_query($conn, "INSERT INTO user (nama_lengkap, email, no_telp, username, password, alamat, referal_code) VALUES ('$nama_lengkap', '$email', '$no_telp', '$username', '$password', '$alamat', '$referalCode')");
            mysqli_query($conn, "INSERT INTO referal_sys (username, email, referal_point) VALUES ('$username', '$email', '')");
            
            return mysqli_affected_rows($conn);
        }

        // function masukCheck($data) {
        //     global $conn;

        //     $email = mysqli_escape_string($conn, htmlspecialchars($data["email"]));
        //     $password = mysqli_escape_string($conn, htmlspecialchars($data["password"]));

        //     $resultEmail = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

        //     if (mysqli_num_rows($resultUsername) === 1 && mysqli_num_rows($resultEmail) === 1) {
        
        //         $row = mysqli_fetch_assoc($resultUsername);

        //         if(password_verify($password, $row["password"])) {

        //             $_SESSION["masuk"] = true;

        //             if ( isset($_POST['remember']) ) {
        //                 //buat cookie

        //                 setcookie('id', $row['id'], time()+60);
        //                 setcookie('key', hash('sha256', $row['username']), time()+60);
        //             }



        //             header("Location: index.php");
        //             exit;
        //         }
        //     }
        //     $error = true;
        // }

        // function masukCheck($data) {
        //     global $conn;
        
        //     // Sanitasi input
        //     $email = mysqli_real_escape_string($conn, htmlspecialchars($data["email"]));
        //     $password = htmlspecialchars($data["password"]);  // Tidak perlu escape karena tidak akan digunakan dalam query
        
        //     // Query untuk mendapatkan user berdasarkan email
        //     $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");
        
        //     // Cek apakah email ditemukan
        //     if (mysqli_num_rows($result) === 1) {
        //         $row = mysqli_fetch_assoc($result);

        //         $role = $row["role"];

        //         if ($role === "admin") {
        //             if (password_verify($password, $row["password"])) {
        //                 // Set session
        //                 return $_SESSION["admin"] = true;
            
        //                 // Jika remember me dicentang
        //                 if (isset($_POST['remember'])) {
        //                     // Buat cookie
        //                     setcookie('id', $row['id'], time() + 30);
        //                     setcookie('key', hash('sha256', $row['email']), time() + 30);
        //                 }
            
        //                 // Redirect ke index.php
        //                 header("Location: dashboardAdmin.php");
        //                 exit;
        //             }
        //         }
        
        //         // Verifikasi password
        //         if (password_verify($password, $row["password"])) {
        //             // Set session
        //             $_SESSION["masuk"] = true;
        
        //             // Jika remember me dicentang
        //             if (isset($_POST['remember'])) {
        //                 // Buat cookie
        //                 setcookie('id', $row['id'], time() + 60);
        //                 setcookie('key', hash('sha256', $row['email']), time() + 60);
        //             }
        
        //             // Redirect ke index.php
        //             header("Location: index.php");
        //             exit;
        //         }
        //     }
        
        //     // Jika email atau password salah
        //     return false;
        // }

        function masukCheck($data) {
            global $conn;

            $email = mysqli_escape_string($conn, htmlspecialchars($data["email"]));
            $passsword = mysqli_escape_string($conn, htmlspecialchars($data["password"]));

            $resultEmail = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

            if (mysqli_num_rows($resultEmail) === 1) {
                $row = mysqli_fetch_assoc($resultEmail);

                $role = $row["role"];

                if(password_verify($passsword, $row["password"])) {
                    if ($role === "member") {

                        if ( isset($data['remember']) ) {
                            //buat cookie
                            setcookie('cookieService', $row["id"], time()+15);
                            setcookie('key', hash('sha256', $row['email']), time()+15);
                        }
                        $_SESSION["member"] = true;
                    }

                    elseif ($role === "admin") {
                        if ( isset($data['remember']) ) {
                            //buat cookie
                            setcookie('cookieService', $row["id"], time()+15);
                            setcookie('key', hash('sha256', $row['email']), time()+15);
                        }
                        
                        $_SESSION["admin"] = true;
                    }
                }
            }

            else {
                $_SESSION["error"] = true;
            }
        }
        


        function rupiah ($angka) {
            $hasil = 'Rp ' . number_format($angka, 2, ",", ".");
            return $hasil;
        }
    ?>