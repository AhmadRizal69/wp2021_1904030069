<?php
require 'function.php';
$camaba = query("SELECT * FROM tbl_agt");

if (isset($_POST['cari'])){
  $cmb = cari($_POST['keyword']);
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
      <a class="navbar-brand page-scroll" href="#page-top">Santucuary</a>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Anggota</a></li>
        <li><a href="#portfolio" class="page-scroll">Pilihan Buku</a></li>
        <li><a href="tabel.php" class="page-scroll">Tabel Buku</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>

    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>Selamat Datang Di Perpustakaan Santucuary</h1>
            <p>Perpustakaan Santucuary menyediakan pilihan berbagai macam buku belajar Programing bagi pemula, Selamat membaca dan Menikmati.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Lanjutkan!</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Get Touch Section -->
<div id="get-touch">
  <p>----- (Pemberitahuan) Mohon maaf pak Background Tidak Bisa Diubah Error di CSS nama File Foto dan Penempatan sudah Betul :) </p>
  <div class="container">

  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="img/bg.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Tentang Perpustakaan Santucuary</h2>
          <p>Perpustakaan Santucuary dibangun pada tahun 2008 di Bandung, di dirikan oleh 3 pemuda mahasiswa ITB dengan nama Sahrul Ahmad, Rojak Futtaloh, Maesari Kusnaeti. Perpustakaan ini adalah perpustakaan yang menyediakan berbagai macam buku tentang pelajaran programing yang mendasar atau bagi pemula yang ini belajar menjadi programming, perpustakaan ini cukup terkesan modern dan tidak terlalu kecil karna penyusunan buku yang rapi dan aestethic modern sehingga pengunjungnya betah membaca dan nyaman.</p>
          <h3>Fasilitas apa saja yang ada di Perpustakaan Santucuary?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Wifi Gratis (Membership)</li>
                <li>Full Ac</li>
                <li>Tersedia PC kekinian (untuk Mencari Refensi buku)</li>
                <li>Berlangganan membership Gratis Coffe Morning</li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Free Konsultasi Buku</li>
                <li>Ada Kursus Untuk belajar Programming</li>
                <li>Project Management yang lengkap</li>
                <li>Affordable Pricing</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="services">
  <div class="container">
    <div class="section-title">
      <h2>Daftar Anggota</h2>
    </div>

<table class="table table-dark table-striped">
  <form action ="" method="POST">
        <input type="text" id="keyword" size="50" name="keyword" placeholder="Silakan masukan keyword" autocomplete="">
        <button type="submit" class="btn btn-primary" name="cari">Cari</button>
      </form>

        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Foto</th>
            <th scope="col">Pilihan </th>
          </tr>
        </thead>

        <?php if (empty($cmb)) : ?>
        <tr>

            <p><b>
            </b>
            </p>
          </td>
        </tr>
      <?php endif; ?>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ((array)$camaba as $cmb) : ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $cmb['nama']; ?></td>
              <td><img src="Image/<?php echo $cmb['foto']; ?>" width="100px"></td>
              <td><a href="detail_agt.php?id_agt=<?= $cmb['id_agt']; ?>" class="btn btn-info" role="button">Detail</a></td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>


<!-- Services Section -->

<div id="portfolio">
  <div class="container">
    <div class="section-title">
      <h2>Pilihan Buku</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/1.jpg" width="200px"alt=" "> </div>
        <div class="service-desc">
          <h3><a href="detail_buku.php?id_buku=11503">Pemograman Logika Python</a></h3>
          <p>Panduan untuk Memahami Logika Pemograman dalam Menyelesaikan Aneka Ragam Masalah</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/2.png" width="200px"alt=""> </div>
        <div class="service-desc">
          <h3><a href="detail_buku.php?id_buku=11504">Petunjuk Memulai UX dari NOL</a></h3>
          <p>Roadmap untuk kamu yang belajar sendiri agar tidak overwhelmed dan hilang arah.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/3.jpg" width="200px" alt=""> </div>
        <div class="service-desc">
          <h3><a href="detail_buku.php?id_buku=11505">Logika Pemograman Menggunakan C++</a></h3>
          <p>Panduan untuk Memahami Logika Pemograman dalam Menyelesaikan Aneka Ragam Masalah.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/4.jpg" width="200px" alt=" "> </div>
        <div class="service-desc">
          <h3><a href="detail_buku.php?id_buku=11506">Belajar Pemograman ANDROID untuk semua kebutuhan</a></h3>
          <p>Mempelajari Pemograman tentang Android untuk semua kebutuhan dan berbagai masalah program pada android.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/5.jpg" width="200px" alt=" "> </div>
        <div class="service-desc">
          <h3><a href="detail_buku.php?id_buku=11507">Belajar Pemograman Fortran</a></h3>
          <p>Membahas Instalasi dan Konfigurasi gforntran, Sintaks Dasar dan Kerangka Program Frontran dll.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-media"> <img src="img/services/6.jpg" width="200px" alt=" "> </div>
        <div class="service-desc">
          <h3><a href="detail_buku.php?id_buku=11508">7 IN 1 Pemograman WEB untuk Pemula</a></h3>
          <p>Cara cepat dan efektif menjadi WEB Programmer.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials Section -->

<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Alamat</span>Jl, Pos Giro Serpong<br>
          Tangerang Selatan, Banten</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span>0896096256</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> rizalahmad1721@gmail.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2017 INNOVA. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>