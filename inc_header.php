<?php
session_start();
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-UA-Compatible".content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Desa</title>


	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>

	<link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
</head>
<!-- navigasi -->
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo url_dasar()?>#">Desa Nelayan Tanjung Leidong</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo url_dasar()?>#Home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo url_dasar()?>#Profil Desa">Profil Desa</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo url_dasar()?>#Berita Desa">Berita Desa</a></li>
            <li><a class="dropdown-item" href="<?php echo url_dasar()?>#Produk Desa">Produk Desa</a></li>
            <li><a class="dropdown-item" href="<?php echo url_dasar()?>#Kontak Kami">Kontak Kami</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      <li class="nav-item">
        <?php if (isset($_SESSION['members_Nama_Lengkap'])){
          echo $_SESSION['members_Nama_Lengkap']." | <a href='".url_dasar()."/logout.php'>logout</a>";
        }else {?>
          <a href="pendaftaran.php" class="tbl-biru">Sing Up</a>
        <?php }
?>        </li>
    </div>
  </div>
</nav>
      