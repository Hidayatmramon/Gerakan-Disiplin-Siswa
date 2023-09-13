<?php

require 'controler.php';
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$siswas = query("SELECT * FROM siswas WHERE id = $id")[0];


if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "<script> 
        alert('Data berhasil diubah'); 
        document.location.href ='index.php'
        </script>";
    } else {

        echo  "<script> 
        alert('Data data gagal diubah'); 
        document.location.href ='index.php'
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Edit</title>
    <style>
        html {
            display: flex;
            align-items: center;
            background-image: url("img/header_bg.jpg");
            margin-bottom: none;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
            height: 160vh;

        }

        img {
            width: 100px;
        }

        .aa {
            color: #fff;
            text-decoration: none;
        }

        .card {
            /* padding-top:100px; */
            background-color: #fff;
            display: flex;
            justify-content: center;
            width: 1400px;

        }
    </style>
</head>

<body>

    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h1>Ubah data siswa</h1>

                <form action="" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $siswas["id"]; ?>">
                    <div class="mb-3">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $siswas["nama"]; ?>">
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="nis">Nis :</label>
                        <input type="text" class="form-control" name="nis" id="nis" required value="<?= $siswas["nis"]; ?>">
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="rombel">Rombel :</label>
                        <input type="text" class="form-control" name="rombel" id="rombel" required value="<?= $siswas["rombel"]; ?>">
                        <br>
                    </div>
                    <div class="mb-3">
                        <label for="rayon">Rayon :</label>
                        <input type="text" class="form-control" name="rayon" id="rayon" required value="<?= $siswas["rayon"]; ?>">
                        <br>
                    </div>
                    <div class="mb-3">
                        <select class="form-select form-select-sm mb-3" aria-label="Small select example" name="keterangan" id="keterangan">
                            <label for="" class="form-select form-select-sm mb-3">Keterangan :</label>
                            <!-- <option selected>Keterangan</option> -->
                            <option value="Telat">Telat </option>
                            <option value="Tidak Memakai NameTag">Tidak Memakai NameTag</option>
                            <option value="etc.">etc.</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date">Date :</label>
                        <input type="date" class="form-control" name="date" id="date" required value="<?= $siswas["date"]; ?>">
                        <br>
                    </div>



                    <br>
                    <br>
                    <button type="submit" name="submit" class="text-white btn bg-secondary  bg-gradient">Updet</button>


                </form>
            </div>
        </div>
    </div>

</body>

</html>