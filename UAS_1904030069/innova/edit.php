<?php
require 'function.php';

$id_agt = $_GET['id_agt'];
$camaba = query("SELECT * FROM tbl_agt WHERE id_agt = $id_agt");
// var_dump($camaba['nama']);

if (isset($_POST['edit'])) {
  if (edit($_POST) > 0) {
    echo
    "<script>
    alert('Selamat data berhasil di Edit');
    document.location.href = 'index.php';
    </script>";
  } else {
    echo
    "<script>
    alert('maaf data gagal diedit');
    </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Perpustakaan Santucuary</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="index.php">Santucuary</a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Anggota</a></li>
        <li><a href="#portfolio" class="page-scroll">Pilihan Buku</a></li>
        <li><a href="#testimonials" class="page-scroll">Tabel Buku</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>

    <!-- /.navbar-collapse --> 
  </div>
</nav>

<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <div class="col-md-10 pd-5 pt-5">

      <h3><i class=""></i> Input Data Anggota</h3>
      
      <form method="POST" action="">

        <input type="hidden" class="form-control" value="<?= $camaba ['id_agt'] ?>"  name="id_agt">

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" value="<?= $camaba ['nama'] ?>"  placeholder="Nama Lengkap" name="nama" autofocus required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="alamat_rumah">Alamat</label>
          <input type="text" class="form-control" id="alamat_rumah" value="<?= $camaba ['alamat_rumah'] ?>" placeholder="Alamat Lengkap" name="alamat_rumah" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis kelamin</label>
          <input type="text" class="form-control" id="jenis_kelamin" value="<?= $camaba ['jenis_kelamin'] ?>" placeholder="Jenis Kelamin" name="jenis_kelamin" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="agama">Agama</label>
          <input type="text" class="form-control" id="agama" value="<?= $camaba ['agama'] ?>" placeholder="Agama" name="agama" required autocomplete="off">
        </div>
        <div class="form-group">
          <label for="foto">Foto</label>
          <input type="text" class="form-control" id="foto" value="<?= $camaba ['foto'] ?>" placeholder="Foto" name="foto" required autocomplete="off">
        </div>

        <button type="submit" class="btn btn-primary" name="edit">Simpan</button> ||
        <a href="detail_buku.php" class="btn btn-primary" role= "button">Kembali</a>
      </form>


    </div>
  </div>

</body>
</html>