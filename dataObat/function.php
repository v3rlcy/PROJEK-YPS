<?php
$conn = mysqli_connect("localhost", "root", "", "rumah_sakit");
function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;
  $id_dokter = htmlspecialchars($data["id_dokter"]);
  $nama_dokter = htmlspecialchars($data["nama_dokter"]);
  $spesialis = htmlspecialchars($data["spesialis"]);
  $alamat = htmlspecialchars($data["alamat"]);
  $no_telp = htmlspecialchars($data["no_telp"]);

  $query = "INSERT INTO rekam_medis VALUES ('', '$id_dokter','$nama_dokter','$spesialis','$alamat','$no_telp')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM rekam_medis WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function ubah($data)
{
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

function cari($keyword)
{
  $query = "SELECT * FROM rekam_medis WHERE 
    id_dokter LIKE '%$keyword%' OR
    nama_dokter LIKE '%$keyword%' OR
    spesialis LIKE '%$keyword%' OR
    alamat LIKE '%$keyword%' OR
    no_telp LIKE '%$keyword%'
    ";
  return query($query);
}


function registrasi($data)
{
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $nama = strtolower(stripslashes($data["nama_user"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);


  // cek username
  $result = mysqli_query($conn, "SELECT username FROM tb_user WHERE 
    username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('Username sudah terdaftar!');
          </script>";
    return false;
  }

  // konfirmasi password
  if ($password !== $password2) {
    echo "<script>
            alert('Konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }

  // enkripsi password
  $hashPass = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan user baru ke database
  mysqli_query($conn, "INSERT INTO tb_user VALUES ('', '$nama', '$username', '$hashPass', 'user')");

  return mysqli_affected_rows($conn);
}


// data obat
function tambahobat($data)
{
  global $conn;
  $id_obat = htmlspecialchars($data["id_obat"]);
  $nama_obat = htmlspecialchars($data["nama_obat"]);
  $ket_obat = htmlspecialchars($data["ket_obat"]);

  $query = "INSERT INTO tb_obat VALUES ('$id_obat','$nama_obat','$ket_obat')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapusobat($id_obat)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_obat WHERE id_obat = $id_obat");
  return mysqli_affected_rows($conn);
}

function ubahobat($data)
{
  global $conn;
  $id_obat = $data["id_obat"];
  $id_obat = htmlspecialchars($data["id_obat"]);
  $nama_obat = htmlspecialchars($data["nama_obat"]);
  $ket_obat = htmlspecialchars($data["ket_obat"]);

  $query = "UPDATE tb_obat SET 
    id_obat = '$id_obat',
    nama_obat = '$nama_obat',
    ket_obat = '$ket_obat'
    WHERE id_obat = '$id_obat'
    ";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function cariobat($keyword)
{
  $query = "SELECT * FROM tb_obat WHERE 
    id_obat LIKE '%$keyword%' OR
    nama_obat LIKE '%$keyword%' OR
    ket_obat LIKE '%$keyword%'
    ";
  return query($query);
}


