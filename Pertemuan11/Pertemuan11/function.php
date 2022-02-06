<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030069');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan elemen data dengan rapih
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  global $conn;

  $nama = htmlspecialchars($data['nama']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat_rumah = htmlspecialchars($data['alamat_rumah']);
  $agama = htmlspecialchars($data['agama']);
  $foto = htmlspecialchars($data['foto']);

  $query = "INSERT INTO tbl_agt
  VALUES
  ('','$nama','$jenis_kelamin','$alamat_rumah','$agama','$foto');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapus($id_agt)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM tbl_agt WHERE id_agt=$id_agt") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function edit($data)
{
  global $conn;

  $id_agt = $data['id_agt'];
  $nama = htmlspecialchars($data['nama']);
  $jenis_kelamin = htmlspecialchars($data['jenis_kelamin']);
  $alamat_rumah = htmlspecialchars($data['alamat_rumah']);
  $agama = htmlspecialchars($data['agama']);
  $foto = htmlspecialchars($data['foto']);

  $query = "UPDATE tbl_agt SET
  nama ='$nama',
  jenis_kelamin ='$jenis_kelamin',
  alamat_rumah ='$alamat_rumah',
  agama ='$agama',
  foto ='$foto'
  WHERE id_agt =$id_agt;";
  
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  global $conn;

  $query = "SELECT * FROM tbl_agt WHERE nama LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows =[];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $row;
}