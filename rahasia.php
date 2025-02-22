<?php
session_start();
var_dump($_SESSION);
?>
<?php include("inc_header.php")?>
<?php
if ($_SESSION['members_Email'] == '') { //dia belum login
	header("location:login.php");
	exit();
}
?>
<div style="background-color: red; font-size: large; padding: 50px; color: #FFFFFF; text-align:20px ;">
	Selamat datang <?php echo $_SESSION['members_Nama_Lengkap']?? 'User tidak di kenali';?> di halaman rahasia. hanya yang sudah logi yang bisa akses halaman.
</div>

<?php include("inc_footer.php")?>