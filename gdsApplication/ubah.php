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
    <title>Edit Data</title>
    <style>
        html {
            display: flex;
            align-items: center;
            background-image: url("img/2658503.jpg");
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


        .btn {
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
            color: #fff;
            background-color: #F78CA2;
            transform: scale(1.05);
        }

    </style>
</head>

<body>

    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <h1>Ubah data siswa</h1><br>

                <form action="" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="id" value="<?= $siswas["id"]; ?>">
                    <div class="mb-3">
                        <label for="nama">Nama </label>
                        <input type="text" class="form-control" name="nama" id="nama" required value="<?= $siswas["nama"]; ?>"> 
                    </div>
                    <div class="mb-3">
                        <label for="nis">Nis </label>
                        <input type="text" class="form-control" name="nis" id="nis" required value="<?= $siswas["nis"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="rombel">Rombel </label>
                        <input type="text" class="form-control" name="rombel" id="rombel" required value="<?= $siswas["rombel"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="rayon">Rayon </label>
                        <input type="text" class="form-control" name="rayon" id="rayon" required value="<?= $siswas["rayon"]; ?>">  
                    </div>
                    <div class="mb-3">
                        <label for="">Keterangan</label>
                        <select class="form-select form-select-sm mb-3" aria-label="Small select example" name="keterangan" id="keterangan">
                            <option value="Tidak Memakai NameTag">Tidak Memakai NameTag</option>
                            <option value="Kaos Kaki Tidak Sesuai">Kaos Kaki Tidak Sesuai</option>
                            <option value="Tidak Mengenakan Sabuk">Tidak Mengenakan Sabuk</option>
                            <option value="Telat Hadir">Telat Hadir </option>
                            <option value="Bet Sekolah Tidak Menyesuaikan Aturan">Bet Sekolah Tidak Menyesuaikan Aturan</option>
                            <option value="BEtc.">Etc.</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="date">Tanggal </label>
                        <input type="date" class="form-control" name="date" id="date" required value="<?= $siswas["date"]; ?>">
                        <br>
                    </div>



                    <br>
                    <button type="submit" name="submit" class="btn">Update</button>


                </form>
            </div>
        </div>
    </div>

</body>

</html>