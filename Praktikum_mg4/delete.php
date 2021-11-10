<?php
include "koneksi.php";
$conn->query("delete from data_mhs where NIM='".$_GET['NIM']."'");
header("location: hal1.php")
?>
<a href="hal1.php">Lihat_Data</a>