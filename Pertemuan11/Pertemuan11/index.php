<?php
date_default_timezone_get("Asia/Jakarta");

require 'function.php';
$camaba = query("SELECT * FROM tbl_agt");

if (isset($_POST['cari'])){
  $camaba = cari($_POST['keyword']);
}
?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

  <title>CRUD</title>
</head>

<body>
  <style type="text/css">
         html,body{height: 100%;}
         .bg-utama{
         background-image: url(Image/libraryy.jpg);
         background-size: cover;
         background-position: center;
         text-align: center;
         height: 100%;
         width: 100%;
         display: table;
         vertical-align: middle;
         }
         h1,p{color: white;}
         .konten-ditengah {
         display: table-cell;
         vertical-align: middle;
         }
      </style>
      <div class="bg-utama">
      <div class="konten-ditengah">
        <h1>Selamat Datang Di Perpustakaan Santucuary</h1>
            <p>Perpustakaan Santucuary menyediakan pilihan berbagai macam buku belajar Programing bagi pemula, Selamat membaca dan Menikmati.</p>
      </div>
    </div>
  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">SANTUCUARY Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
  
        <div class="text-white">
          <?php echo date('l, d-m-y'); ?>
        </div>
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Santucuary</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pilihan Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- sidebar -->

  <div class="row">
    <div class="col-md-2 pr-3 pt-4 bg-secondary">
      <!-- menu -->
      <ul class="nav flex-column">

        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-tachometer-alt"></i> About Santucuary</a>
          <hr class="bg-dark">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-users"></i> Anggota</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="tambah.php"><i class="fas fa-user-edit"></i> Daftar Anggota</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher"></i> Pilihan Buku</a>
          <hr>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#"><i class="fas fa-calendar-alt"></i> Jadwal Kuliah</a>
          <hr>
        </li>

      </ul>
    </div>

    <div class="col-md-10 p-4 pt-4">
      <!-- konten -->
      <h3><i class="fas fa-users"></i> Daftar Nama Anggota</h3>
      <hr>

      <!-- pencarian data -->
      <form action ="" method="POST">
        <input type="text" id="keyword" size="50" name= "keyword" placeholder="masukan keyword" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari">CARI</button>
      </form>

      <br>
      <hr>

      <table class="table table-dark table-striped">
        <thead>

          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Foto</th>
            <th scope="col">Opsi </th>
          </tr>

        </thead>

        <?php if (empty($camaba)); ?>
        <tr>
          <td colspan="4" class="alert alert-danger text-center" role="alert">
            <p><b></p>
            </b>
          </td>
        </tr>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($camaba as $cmb) : ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $cmb['nama']; ?></td>
              <td><img src="Image/<?php echo $cmb['foto']; ?>" width="100px"></td>
              <td><a href="detail.php?id_agt=<?= $cmb['id_agt']; ?>" class="btn btn-warning" role="button">Detail</a></td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>