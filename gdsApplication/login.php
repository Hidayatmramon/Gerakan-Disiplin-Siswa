<?php
session_start();

// Cek apakah pengguna sudah login, jika ya, arahkan ke halaman index
if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require 'controler.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query untuk mendapatkan data pengguna berdasarkan username
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if ($result) {
        // Periksa apakah ada data pengguna dengan username yang dimasukkan
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if (password_verify($password, $row["password"])) {

                // Setel sesi untuk menyimpan peran dan rayon pengguna
                $_SESSION["username"] = $row['nama'];
                $_SESSION["login"] = true; // Anda bisa gunakan ini untuk menandai bahwa pengguna sudah login
                $_SESSION["role"] = $row["role"];
                $_SESSION["rayon"] = $row["rayon"];

                // Tentukan halaman yang akan diarahkan berdasarkan peran
                if ($row["role"] === "admin") {
                    // Pengguna adalah admin, arahkan ke halaman admin
                    header("Location: index.php");
                    exit;
                } else if ($row["role"] === "user") {
                    // Pengguna adalah user, arahkan ke halaman user
                    header("Location: user.php");
                    exit;
                }
                // cek remember me
                if (isset($_POST['remember'])) {
                    // buat cookie

                    setcookie('id', $row['id'], time() + 60);
                    setcookie(
                        'key',
                        hash('sha256', $row['username']),
                        time() + 60
                    );
                }
            }
        }
    } else {
        // Handle error database jika query tidak berhasil
        die("Error: " . mysqli_error($conn));
    }

    // Jika username atau password tidak sesuai, tandai error
    $error = true;
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDSapp</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
    <style>
        .hero {
            display: flex;
            align-items: center;
            background-image: url("img/9307771.png");
            margin-bottom: none;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            height: 100vh;

        }

        .hero .content {
            padding: 1.4rem 7%;
            max-width: 70rem;
        }

        .hero .content h1 {
            font-size: 3.5em;
            color: #191717;
            text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
            line-height: 1.2;
        }

        .hero .content p {
            color: #191717;
            font-size: 1.6rem;
            margin-top: 1rem;
            line-height: 1.4;
            font-weight: 400;
            text-shadow: 10px 10px 30px rgba(1, 1, 3, 0.5);
            /* mix-blend-mode: difference; */
        }   

        .card-body {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .btn {
            margin-top: 10px;
            margin-bottom: 5px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #D80032;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background-color: #F78CA2;
            transform: scale(1.05);
            color: #fff;
        }

        .bt {
            margin-top: 5px;
        }


    </style>
</head>

<body>

        <section class="hero">
            <div class="content">
            <h1>Gerakan Disiplin Siswa<span></span></h1>
            <p>Silahkan Login Dahulu... Lalu Buat Laporan Ke Kesiswaan Tetang Kedisipilan Sekolah</p>
        </div>
        <div class="halaman">
            <div class="container">
                <br>
                <div class="card" style="width: 35rem;">
                    <div class="card-body">
                        <h1 class="card-title" style="text-align: center;">Login</h1>
                        <br>
                        <?php if (isset($error)) : ?>
                            <p style="color: red; font-style:italic;">username/password salah!</p>
                        <?php endif; ?>



                        <form action="" method="post">

                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div><br>

                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>

                            <br>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn" name="login">Sign in</button>
                        
                              <p>Untuk Bantuan, Hubungi CS Kami <u><a class="bt" href="https://api.whatsapp.com/send/?phone=6285770537160&text&type=phone_number&app_absent=0">Di Sini!</a></u</p> 
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


</body>

</html>