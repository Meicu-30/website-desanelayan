<?php
session_start();
?>
<?php include("inc_header.php")?>
<div class="container-fluid pt-5 pb-5 bg-light">
  <div class="container text-center">
    <h2 class="display-3" id="Login">Login</h2>
    <?php
$Email      ="";
$password   ="";
$err        ="";

if (isset($_POST['login'])) {
  $Email    = $_POST['Email'];
  $password = $_POST['password'];

  if ($Email == '' or $password == '') {
    $err    .= "<li>Silahkan masukan isian</li>";
  }else{
    $sql1   = "select * from members where Email = '$Email'";
    $q1     = mysqli_query($koneksi,$sql1);
    $r1     = mysqli_fetch_array($q1);
    $n1     = mysqli_num_rows($q1);

    if ($r1['Status'] != '1' && $n1 > 0) {
      $err    ="<li>Akun yang kamu miliki belum aktif</li>";
    }
    $Nama_Lengkap = $r1['Nama_Lengkap'];

    if ($r1['password'] != md5($password) && $n1 >0 && $r1['Status'] == '1'){
      $err    .="<li>password tidak sesuai</li>";
    }

    if ($n1 < 1) {
      $err  .="<li>Akun tidak di temukan</li>";
    }

    if (empty($err)) {
      $_SESSION['members_Email'] = $Email;
      $_SESSION['members_Nama_Lengkap'] = $r1['Nama_Lengkap'];
      header("location:rahasia.php");
      exit();
    }
  }
}
?>
<?php if($err){ echo "<div class='error'><ul class='pesan'>$err</ul></div>";}?>
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
    padding: 5x;
  }
  td.table { width:40%;}
  .input {
    border: 1x solid #CCCCCC;
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

  .copyright {
  text-align: center;
  width: 100px;
  padding: 50px 0px 50px 0px;
  margin-top: 50px;
}

</style>
<form action="" method="POST">
	<table>
		<tr>
			<td class="label">Email</td>
			<td><input type="text" name="Email" class="input" value="<?php echo $Email?>"/></td>
		</tr>
		<tr>
			<td class="label">Password</td>
			<td><input type="password" name="password" class="input"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="login" value="Login" class="tbl-biru" /></td>
		</tr>
	</table>
</form>
<?php include("inc_footer.php")?>