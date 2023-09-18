<?php

require 'controler.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "<script> alert('Data berhasil ditambahkan!'); document.location.href ='index.php'</script>";
    } else {
        echo  "<script> alert('Data data gagal ditambahkan!'); document.location.href ='index.php'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
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
            height: 150vh;

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

                <form action="" method="post" enctype="multipart/form-data">

                    <h1>Tambah Data Siswa</h1>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama :</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Nis :</label>
                        <input type="text" class="form-control" name="nis" id="nis">
                    </div>

                    <div class="mb-3">
                        <label for="rayon" class="form-label">Rayon</label>
                        <select class="form-select" name="rombel" id="rombel" required>
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

                    <div class="mb-3">
                        <label for="" class="form-label">Rombel :</label>
                        <input type="text" class="form-control" name="rayon" id="rayon">
                    </div>

                    <div class="mb-3">
                        <select class="form-select form-select-sm mb-3" aria-label="Small select example" name="keterangan" id="keterangan">
                            <label for="" class="form-select form-select-sm mb-3">Keterangan :</label>
                            <!-- <option selected>Keterangan</option> -->
                            <option value="Telat">Telat </option>
                            <option value="Tidak Memakai NameTag">Tidak Memakai NameTag</option>
                            <option value="Kaos Kaki Tidak Sesuai">Kaos Kaki Tidak Sesuai</option>
                            <option value="Tidak Mengenakan Sabuk">Tidak Mengenakan Sabuk</option>
                            <option value="Telat Hadir">Telat Hadir </option>
                            <option value="Bet Sekolah Tidak Menyesuaikan Aturan">Bet Sekolah Tidak Menyesuaikan Aturan</option>
                            <option value="BEtc.">Etc.</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Date:</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>




                    <button type="submit" name="submit" class="text-white btn bg-secondary bg-gradient">Kirim</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>