<?php
session_start();
unset($_SESSION['members_Email']);
unset($_SESSION['members_Nama_Lengkap']);
session_destroy();
header("location:index.php");
?>