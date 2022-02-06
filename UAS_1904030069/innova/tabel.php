<?php
require 'function.php';
$camaba = query("SELECT * FROM tbl_buku");

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

<!-- Get Touch Section -->
<div id="get-touch">
  <div class="container">

  </div>
</div>

<div id="testimonials">
  <div class="container">
    <div class="section-title">
      <h2>Tabel Buku</h2>
      
    </div>
<table class="table table-dark table-striped">
          <form action ="" method="POST">
        <input type="text" id="keyword" size="50" name= "keyword" placeholder="Silakan Masukan Keyword" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari"> CARI</button>
      </form>
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">ID Buku</th>
                  <th scope="col">Judul</th>
                  <th scope="col">Penulis</th>
                  <th scope="col">Pilihan</th>
                </tr>
              </thead>
              <?php if (empty($cmb)) : ?>
              <?php endif; ?>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach($camaba as $cmb) : ?>
                <tr>
                  <th scope="row"><?php echo $no; ?></th>
                  <td><?php echo $cmb ['id_buku']; ?></td>
                  <td><?php echo $cmb ['judul']; ?></td>
                  <td><?php echo $cmb ['penulis']; ?></td>
                  <td><a href="detail_buku.php?id_buku=<?= $cmb['id_buku']?>" class="btn btn-warning" role= "button">Detail</a>
                  </td>
                </tr>

                <?php $no++ ?>
              <?php endforeach ?>
              </tbody>
            </table>
          </table>
          <a href="index.php" class="btn btn-primary" role= "button">Kembali</a>
        </div>
      </div>
    </body>

<!-- Contact Section -->

<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>