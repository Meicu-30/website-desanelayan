<?php include("inc_header.php")?>
<style>
  table{
    width: 600px;
  }

  @media screen and (max-width: 700px){
    table {
      width: 90%;
    }
  }
  table td {
    padding: 5px;
  }
  td.table { width:40%;}
  .input {
    border: 1px solid #CCCCCC;
    background-color: #dfdfdf;
    border-radius: 10px;
    width: 100%;
  }
  input.tbl-biru{
    border: none;
    background-color: #3f72af;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
  }
  input.tbl-biru:hover {
    background-color: #fc5185;
    text-decoration: none;
  }
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
if (isset($_SESSION['members_Email']) != '') { //sudah dalam keadaan login
  header("location:index.php");
  exit();
}
?>
<h3>Pendaftaran</h3>
<br>
<br>
<h3>Pendaftaran</h3>
<?php
$Email          = "";
$Nama_Lengkap   = "";
$err            = "";
$sukses         = "";

if (isset($_POST['simpan'])) {
   $Email               = $_POST['Email'];
   $Nama_Lengkap        = $_POST['Nama_Lengkap'];
   $password            = $_POST['password'];
   $konfirmasi_password = $_POST['konfirmasi_password'];

   if ($Email == '' or $Nama_Lengkap == '' or $konfirmasi_password == '' or $password == '') {
      $err .= "<li>Silahkan masukan semua isian</li>";
   }

   //cek di bagin db, pakah email sudah ada atau ada belum
   if ($Email != '') {
      $sql1   = "select Email from members where Email = '$Email'";
      $q1     = mysqli_query($koneksi,$sql1);
      $n1     = mysqli_num_rows($q1);
      if ($n1 > 0) {
         $err .= "<li>Email yang kau masukansudah terdaftar.</li>";
      }
      //validasi email
      if (!filter_var($Email,FILTER_VALIDATE_EMAIL)) {
         $err .= "<li>Email yang kamu massukkan tidk valid.</li>";
      }
   }

   if ($password != $konfirmasi_password) {
      $err .= "<li>password dan konfirmasi_password tidak sesuai.</li>";
   }
   if (strlen($password) < 6) {
      $err .= "<li>panjang karakter yag di iziznkan untuk password paling tidka 6 karakter.</li>";
   }
   if (empty($err)) {
      $Status         = md5(rand(0,1000));
      $judul_Email    = "Halaman konfirmasi pendaftaran";
      $isi_Email      = "Akun yang kamu miliki dengan email <b>$Email</b> telah siap di gunakan.<br/>";
      $isi_Email      .= "Sebelumnya silakan melakukan aktiasi Email di link di bawah ini:<br/>";
      $isi_Email      .= url_dasar()."/verifikasi.php?Email=$Email&kode=$Status";

      kirim_Email($Email,$Nama_Lengkap,$judul_Email,$isi_Email);

      $sql1         = "insert into members(Email,Nama_Lengkap,password,Status) values ('$Email','$Nama_Lengkap',md5($password),'$Status')";
      $q1           = mysqli_query($koneksi,$sql1);
      if($q1){
        $sukses = "proses berhasil. silahkan cek email kamu untuk verifikasi.";
      }

     
   }
}
?>
<?php if($err) {echo "<div class='error'><ul>$err</ul></div";} ?>
<?php if($sukses) {echo "<div class='sukses'><ul>$sukses</ul></div";} ?>

<form action="" method="POST">
  <table>
    <tr>
      <td class="label">Email</td>
      <td>
        <input type="text" name="Email" class="input" value="<?php echo $Email?>"/>
      </td>
    </tr>
    <tr>
      <td class="label">Nama Lengkap</td>
      <td>
        <input type="text" name="Nama_Lengkap" class="input" value="<?php echo $Nama_Lengkap?>"/>
      </td>
    </tr>
    <tr>
      <td class="label">Password</td>
      <td>
        <input type="password" name="password" class="input"/>
      </td>
    </tr>
    <tr>
      <td class="label">Konfirmasi Password</td>
      <td>
        <input type="password" name="konfirmasi_password" class="input"/>
        <br>
        sudah punya akun?. silahkan <a href='<?php echo url_dasar()?>/login.php'>login</a>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="submit" name="simpan" value="simpan" class="tbl-biru"/>
      </td>
    </tr>
  </table>
</form>
<?php include("inc_footer.php")?>