<?php include "koneksi.php"; ?>
<?php
$id = $_GET['id'];
$hapus = mysqli_query($mysqli, "DELETE FROM register WHERE id='$id'");
header("Location: akun_terdaftar.php");
?>