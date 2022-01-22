<?php 
require "function.php";


if (!isset($_GET['Nama'])) {
  header("location: dosen.php");
  exit;
}
$nidn = $_GET['nidn'];
if(hapus($nidn) > 0){
  echo
    "<script>
    alert('data berhasil di hapus');
    document.location.herf = 'dosen.php';
    </script>";
  } else {
    echo
    "<script>
    alert('data gagal di hapus');
    </script>";
  }

