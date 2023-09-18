<?php
require 'controler.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST)) {
        echo "<script>alert('User baru berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Registrasi gagal!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Tambahkan CSS sesuai kebutuhan Anda */

        .hero {
            display: flex;
            align-items: center;
            background-image: url("img/header_bg.jpg");
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
            color: #fff;
            text-shadow: 1px 1px 3px rgba(1, 1, 3, 0.5);
            line-height: 1.2;
        }

        .hero .content p {
            color: #fff;
            font-size: 1.6rem;
            margin-top: 1rem;
            line-height: 1.4;
            font-weight: 400;
            text-shadow: 10px 10px 30px rgba(1, 1, 3, 0.5);
        }

        .aa {
            color: #fff;
            text-decoration: none;
        }

        .card {
            height: 35rem;
        }

        footer {
            background-color: grey;
            text-align: center;
            padding: 1rem 0.3rem;
            margin-top: 0;
        }

        footer .credit {
            font-size: 1rem;
        }

        footer .credit a {
            color: var(--bg);
            font-weight: 700;
        }
    </style>
</head>

<body>
    <section class="hero">
        <div class="content">
            <h1>Daftar Siswa Pengembangan Perangkat Lunak dan Gim X<span></span></h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure libero neque vero similique consequatur nemo perspiciatis? Odit non ratione fuga dolor amet officia. Libero pariatur tenetur ducimus magni? Maxime, possimus.
            </p>
        </div>
        <div class="halaman">
            <div class="container">
                <div class="card" style="width: 35rem;">
                    <div class="card-body">
                        <h1 class="card-title" style="text-align: center;">Registrasi</h1>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">nama :</label>
                                <input type="text" class="form-control" name="nama" id="nama">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password2" class="form-label">Konfirmasi Password:</label>
                                <input type="password" class="form-control" name="password2" id="password2" required>
                            </div>
                            <div class="mb-3">
                                <label for="rayon" class="form-label">Rayon</label>
                                <select class="form-select" name="rayon" id="rayon" required>
                                    <option value="Cisarua 1">Cisarua 1</option>
                                    <option value="Cisarua 2">Cisarua 2</option>
                                    <option value="Cisarua 3">Cisarua 3</option>
                                    <option value="Cisarua 4">Cisarua 4</option>
                                    <option value="Cisarua 5">Cisarua 5</option>
                                    <option value="Cisarua 6">Cisarua 6</option>
                                    <option value="Cisarua 7">Cisarua 7</option>
                                    <option value="Wikrama 1">Wikrama 1</option>
                                    <option value="Wikrama 2">Wikrama 2</option>
                                    <option value="Wikrama 3">Wikrama 3</option>
                                    <option value="Wikrama 4">Wikrama 4</option>
                                    <option value="Wikrama 5">Wikrama 5</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="text-white btn bg-secondary bg-gradient" name="register">Register</button>
                            </div>
                            <br>
                            <button type="button" class="btn bg-secondary bg-gradient"><a class="aa" href="Login.php">Login</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>