<?php
include "koneksi.php";

if (isset ($_GET['NIM'])){
    $NIM=$_GET['NIM'];

}else{
    $NIM="";
}
$Nama="";
$Prodi="";
$Angkatan="";
$sql=$conn ->query("select * from data_mhs where NIM='".$NIM."'");
while($rs=$sql ->fetch_object()){
    $Nama=$rs->Nama;
    $Prodi=$rs->Prodi;
    $Angkatan=$rs->Angkatan;
}
?>
<a href="hal1.php">Lihat_Data</a>
<form method="post" action ="save.php">
    NIM<input type="text" name="NIM" value="<?php echo $NIM;?>"><br>
    Nama<input type="text" name="Nama" value="<?php echo $Nama;?>"><br>
    Prodi<input type="text" name="Prodi"value="<?php echo $Prodi;?>"><br>
    Angkatan<input type="text" name="Angkatan"value="<?php echo $Angkatan;?>"><br>
    <input type="submit" value="save">
</form>