<?php
require "function.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id_agt'])) {
  header("location: index.php");
  exit;
}

$id_agt = $_GET['id_agt'];
if (hapus($id_agt) > 0) {
  echo
  "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";
} else {
  echo
  "<script>
    alert('maaf data gagal dihapus');
    </script>";
}
