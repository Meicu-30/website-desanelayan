<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
//http://localhost/UAS/halaman.php/27/Selamat%20Datang%20Di%20Webside%20Kami
//print_r($_SERVER);
$id = dapatkan_id();


$sql1 = "select * from halaman where id = '$id'";
$q1   = mysqli_query($koneksi,$sql1);
$r1   = mysqli_num_rows($q1);
$r1   = mysqli_fetch_array($q1);

$Judul_halaman = $r1['Judul'];
?>

<?php include_once("inc_header.php")?>

<?php
if ($Judul_halaman == '') {
  echo "<div><p>aaf data yang kamu maksud tidak di temukan :(</p></div>";
}else {
  ?>
  <p class="deskripsi"><?php echo $r1['Kutipan']?></p>
  <h1><?php echo $r1['Judul']?></h1>
  <?php echo set_Isi($r1['Isi'])?>
  <?php
}
?>

<?php include_once("inc_footer.php")?>
