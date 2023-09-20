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
    <title>GDSapp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        /* Tambahkan CSS sesuai kebutuhan Anda */

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

        .aa {
            color: #3085C3;
            text-decoration: none;
            font-weight: bold;
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
        }

        .card-body {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .btn {
            display: inline-block;
            padding: 10px 210px;
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
        }

        .btn-logout {
            margin-top: 50px;
            margin-left: 380px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #fff;
            color: #191717;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-logout:hover {
            background-color: #B4B4B3;
            transform: scale(1.05);
        }

    </style>
</head>

<body>
    <section class="hero">
        <div class="content">
            <h1>Register<span></span></h1>
            <p>
               GDSapp Adalah Sebuah Software Yang Dikembangkan Untuk Membantu Kesiswaan Membuat Laporan Terkait Kedisipilan Siswa 
            </p>
        </div>
        <div class="halaman">
            <div class="container">
                <div class="card" style="width: 35rem;">
                    <div class="card-body">
                        <h1 class="card-title" style="text-align: center;">Registrasi</h1>
                        <br>
                        <form action="" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="username" id="username" required placeholder="Username">
                            </div><br>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="nama" id="nama"  placeholder="Name">
                            </div><br>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" id="password" required  placeholder="Password">
                            </div><br>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password2" id="password2" required  placeholder="Konfirmasi Password">
                            </div><br>
                            <div class="mb-3">
                                <select class="form-select" name="rayon" id="rayon" required>
                                    <option value="">Rayon</option>
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
                            </div><br>
                                <button type="submit" class="btn"  name="register">Register</button>
                                <button type="button" class="btn-logout"><a class="aa" href="Login.php">Kembali</a></button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>