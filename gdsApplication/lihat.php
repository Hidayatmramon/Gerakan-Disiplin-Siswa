<?php

require 'controler.php';
$id = $_GET["id"];
$student = query("SELECT * FROM siswas WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Data Siswa</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        html {
            background-image: url("img/header_bg.jpg");
            margin-bottom: none;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            height: 110vh;
            width: 100%;
            margin-bottom: 30px;
        }

        html,
        h1 {
            display: flex;
            justify-content: center;
        }


        .aa {
            color: #fff;
            text-decoration: none;
        }

        img {
            width: 150px;
            display: flex;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;

        }

        li {
            list-style-type: none;
        }

        .card {
            position: auto;
            height: 95vh;
        }
    </style>
</head>

<body>

    <div class="position-absolute top-50 start-50 translate-middle">


        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h1>Data Siswa</h1>



                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $student["id"]; ?>">

                    <label for="gambar"></label><br>
                    <li><img src="img/<?= $student["gambar"]; ?>"></li>


                    <label for="nama"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["nama"]; ?></li>

                    <label for="nis"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["nis"]; ?></li>

                    <label for="rombel"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["rombel"]; ?></li>

                    <label for="rayon"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["rayon"]; ?></li>

                    <label for="status"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["status"]; ?></li>

                    <label for="hobi"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["hobi"]; ?></li>

                    <label for="alamat"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["alamat"]; ?></li>

                    <label for="cita_cita"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["cita_cita"]; ?></li>

                    <label for="merk_laptop"></label>
                    <li class="list-group-item list-group-item-dark"><?= $student["merk_laptop"]; ?></li>
                    <br>



                    <br>
                    <button type="button" class="text-white btn bg-secondary bg-gradient"><a class="aa" href="index.php">Kembali</a></button>

                </form>
            </div>
        </div>
    </div>




</body>

</html>