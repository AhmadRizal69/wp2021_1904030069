<?php
$conn = mysqli_connect('localhost','root','','wpsmt5');

//pemanggilan tabel
function query($query)

{
  global $conn;

  //mengambil seluruh data pada tabel

  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) ==1){
    return mysqli_fetch_assoc($result);
  }
  //pemanggilan element data
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama = ($data['Nama']);
  $jenis_kelamin = ($data['jenis_kelamin']);
  $jenis_kelamin = ($data['alamat_rumah']);
  $email = ($data['email']);
  $agama = ($data['agama']);
  $pendidikan_s1 = ($data['pendidikan_s1']);
  $pendidikan_s2 = ($data['pendidikan_s2']);
  $pendidikan_s3 = ($data['pendidikan_s3']);
  $foto_dosen = ($data['foto_dosen']);

  $query = "INSERT INTO tb_dosen VALUES
  ('','$Nama','$jenis_kelamin','$alamat_rumah','$email','$agama','$pendidikan_s1','$pendidikan_s2','$pendidikan_s3','$foto_dosen');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
function hapus($nidn)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tb_dosen WHERE nidn=$nidn") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}