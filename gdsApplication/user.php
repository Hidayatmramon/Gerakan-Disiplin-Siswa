<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'controler.php';

// Ambil rayon dari pengguna yang sedang login
$rayon_pengguna = $_SESSION["rayon"];

// Query untuk mendapatkan data siswa berdasarkan rayon pengguna
$siswas = query("SELECT * FROM siswas WHERE rayon = '$rayon_pengguna' ORDER BY date DESC");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        html {
            display: flex;
            align-items: center;
            background-image: url("img/6065650.jpg");
            margin-bottom: none;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            height: 100vh;

        }

        img {
            width: 100px;
        }

        .aa {
            color: #fff;
            text-decoration: none;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        span {
            color: #6D5D6E;
            font-weight: bold;
        }

        .subj {
            text-align: right;
            margin-right: 15px;
            color: #6D5D6E;
            font-weight: bold;
            background-color: #F4EEE0;


        }

        th {
            text-align: center;
            font-size: 30px;
        }
        
        td {
            font-size: 20px;
            text-align: center;
        }

        .btn-logout{
            padding: 8px 20px;
            margin-left: 1278px;
            font-size: 22px;
            margin-bottom: 0px;
            margin-top: 40px;
            background-color: #D80032;
            border: none;
            border-radius: 5px;
        }

        .btn-logout:hover {
            background-color: #F78CA2;
            transform: scale(1.05);
        }


    </style>
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <br>
        <br>
        <div class="card">
            <div class="card-body">
                <br>
                <br>
                <h1>Selamat Datang! <span><?= $_SESSION['username'] ?></span></h1>
                <br>


                <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nis</th>
                            <th>Rayon </th>
                            <th>Rombel</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($siswas as $siswa) { ?>
                            <tr>
                                <td><?= $siswa["nama"] ?></td>
                                <td><?= $siswa["nis"] ?></td>
                                <td><?= $siswa["rayon"] ?></td>
                                <td><?= $siswa["rombel"] ?></td>
                                <td><?= $siswa["keterangan"] ?></td>
                                <td><?= $siswa["date"] ?></td>
                            </tr>
                        <?php  } ?>


                    </tbody>
                </table>
                    <button type="button" class="btn-logout"><a class="aa" href="logout.php">Logout</a></button>
            </div>
        </div>
</body>

</html>