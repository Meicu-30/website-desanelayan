<?php include("inc_header.php")?>
<style>
    .error {
    padding: 20px;
    background-color: #fc5185;
    color: #FFFFFF;
    margin-bottom: 15px;
  }

  .sukses {
    padding: 20px;
    background-color: #2196f3;
    color: #FFFFFF;
    margin-bottom: 15px;
  }
</style>
<?php 
$err        ="";
$sukses     ="";

if(isset($_GET['Email']) or !isset($_GET['kode'])){
    $err    = "Data yang di perlukan untuk verifikasi tidak tersedia.";
}else{
    $Email  = $_GET['Email'];
    $kode   = $_GET['kode'];

    $sql1   = "select * from members where email = '$Email'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    if($r1['status'] == $kode){
        $sql2   ="update members set status = '1' where email = '$Email'";
        mysqli_query($koneksi,$sql2);
        $sukses ="akun telah aktif. silahkan login di halaman login";
        }else{
            $err  = "kode tidak valid";
        }
}
?>
<h3>Halaman verivikasi</h3>
<?php if($err) {echo "<div class='error'>$err</div>";}?>
<?php if($sukses) {echo "<div class='sukses'>$sukses</div>";}?>
<?php include("inc_footer.php")?>