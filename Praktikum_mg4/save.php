<?php
include "koneksi.php";
$sql=$conn->query("SELECT * from data_mhs WHERE NIM='".$_POST['NIM']."'");
$jml=$sql->num_rows;
if($jml>0){
  $conn ->query("UPDATE  data_mhs set Nama = '".$_POST['Nama']."',Prodi ='".$_POST['Prodi']."',Angkatan = '".$_POST['Angkatan']."' WHERE NIM='".$_POST['NIM']."' ");

}else{
  $conn->query("insert into data_mhs (NIM,Nama,Prodi,Angkatan) values('".$_POST['NIM']."'
  ,'".$_POST['Nama']."','".$_POST['Prodi']."','".$_POST['Angkatan']."')");
}
header("location: hal1.php");
?>