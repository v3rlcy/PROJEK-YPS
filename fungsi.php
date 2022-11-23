<?php

$conn = mysqli_connect("localhost", "root", "", "rumah_sakit");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $id_dokter = htmlspecialchars($data["id_dokter"]);
    $nama_dokter = htmlspecialchars($data["nama_dokter"]);
    $spesialis = htmlspecialchars($data["spesialis"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"])

    $query = "INSERT INTO rekam_medis VALUES ('', '$id_dokter','$nama_dokter','$spesialis','$alamat','$no_telp)";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM rekam_medis WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $id_dokter = htmlspecialchars($data["id_dokter"]);
    $nama_dokter = htmlspecialchars($data["nama_dokter"]);
    $spesialis = htmlspecialchars($data["spesialis"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);

    $query = "UPDATE rekam_medis SET 
    id_dokter = '$id_dokter',
    nama_dokter = '$nama_dokter',
    spesialis = '$spesialis',
    alamat = '$alamat',
    no_telp = '$no_telp'
    WHERE id = '$id'
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM rekam_medis WHERE 
    id_dokter LIKE '%$keyword%' OR
    nama_dokter LIKE '%$keyword%' OR
    spesialis LIKE '%$keyword%' OR
    alamat LIKE '%$keyword%' OR
    no_telp LIKE '%$keyword%'
    ";
    return query($query);
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);


    // cek username
    $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE 
    username = '$username'");

    if ( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah terdaftar!')
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}

?>