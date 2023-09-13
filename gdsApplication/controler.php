<?php
$conn = mysqli_connect("localhost", "root", "", "db_gds");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $wadah = [];
    while ($baju = mysqli_fetch_assoc($result)) {
        $wadah[] = $baju;
    }
    return $wadah;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $rombel = htmlspecialchars($data["rombel"]);
    $rayon =  htmlspecialchars($data["rayon"]);
    $keterangan =  htmlspecialchars($data["keterangan"]);
    $date =  htmlspecialchars($data["date"]);

    $query = "INSERT INTO siswas VALUES ('', '$nama', '$nis', '$rombel', '$rayon', '$keterangan', '$date') ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM siswas WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $rombel = htmlspecialchars($data["rombel"]);
    $rayon =  htmlspecialchars($data["rayon"]);
    $keterangan = htmlspecialchars($data["keterangan"]);
    $date = htmlspecialchars($data["date"]);



    $query = "UPDATE siswas SET 
    nama = '$nama',
    nis = '$nis',
    rombel = '$rombel',
    rayon = '$rayon',
    keterangan = '$keterangan',
    date = '$date'
    
    WHERE id = $id

    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE 
    username = '$username'  ");
    if (mysqli_fetch_assoc($result)) {
        echo " 
        <script>
        alert('username sudah terpakai'); 
        </script>
        ";
        return false;
    }

    // konfirmasi password
    if ($password !== $password2) {
        echo " 
        <script>
        alert('konfirmasi password tidak sesuai!'); 
        </script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO users VALUES ('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}
