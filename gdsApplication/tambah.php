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
    <title>Tambah Data</title>
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

        .aa {
            color: #fff;
            text-decoration: none;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);

        }

        .btn-bac {
            margin-top: 10px;
            margin-left: 328px;
            display: inline-block;
            padding: 10px 40px;
            background-color: #D80032;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-bac:hover {
            background-color: #F78CA2;
            transform: scale(1.05);
        }
        
    </style>

</head>

<body>

    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 35rem;">
            <div class="card-body">

                <form action="" method="post" enctype="multipart/form-data">

                    <h1>Tambah Data Siswa</h1><br>
                    <div class="mb-3">
                        <label for="" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan">
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Nis</label>
                        <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukan">
                    </div>

                    <div class="mb-3">
                        <label for="rayon" class="form-label">Rayon</label>
                        <select class="form-select" name="rombel" id="rombel" required>
                            <option value="">...</option>
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
                        <label for="" class="form-label">Rombel</label>
                        <input type="text" class="form-control" name="rayon" id="rayon" placeholder="Masukan">
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="from-label">Keterangan</label>
                        <select class="form-select form-select-sm mb-3" aria-label="Small select example" name="keterangan" id="keterangan">
                            <option value="">...</option>
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
                        <label for="" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div><br><br>




                    <button type="submit" name="submit" class="btn-bac">Kirim</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>