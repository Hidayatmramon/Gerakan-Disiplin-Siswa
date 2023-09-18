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

function cari($keyword)
{
    global $conn;
    $query = "SELECT * FROM siswas WHERE 
    nama LIKE '%$keyword%' OR
    nis LIKE '%$keyword%' OR
    rombel LIKE '%$keyword%' OR
    rayon LIKE '%$keyword%' OR
    date LIKE '%$keyword%' 
    ";
    return query($query);
}


function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $rayon = mysqli_real_escape_string($conn, $data["rayon"]);
    $nama = htmlspecialchars($data["nama"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE 
    username = '$username'  ");
    if (mysqli_fetch_assoc($result)) {
        echo " 
        <script>
        alert('Username sudah terpakai'); 
        </script>
        ";
        return false;
    }

    // konfirmasi password
    if ($password !== $password2) {
        echo " 
        <script>
        alert('Konfirmasi password tidak sesuai!'); 
        </script>
        ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Set peran pengguna menjadi 'user'
    $role = 'user';

    // Simpan pengguna baru ke database dengan peran 'user' dan rayon yang sesuai
    $query = "INSERT INTO users (username, password, nama, role, rayon) VALUES ('$username', '$password','$nama', '$role', '$rayon')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
