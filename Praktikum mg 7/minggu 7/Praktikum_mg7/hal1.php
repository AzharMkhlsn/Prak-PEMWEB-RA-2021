<?php
include "koneksi.php";
?>

<nav>
            <link rel="stylesheet" href="style.css">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="hal2.php">Tambah_Data</a></li>
                </ul> 
</nav>


<center>
<p> <h2>Data Mahasiswa Pendaftar Vaksin</h2></p> <br>
<link rel="stylesheet" href="styl2.css">
<table width="600" border="1">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>

    </tr>
<?php
 $sql=$conn ->query("select * from data_mhs");
while($rs=$sql ->fetch_object()){
 ?>
 <tr>
    <td><?php echo $rs -> NIM;?></td>
    <td><?php echo $rs -> Nama;?></td>
    <td><?php echo $rs -> Prodi;?></td>
    <td><?php echo $rs -> Angkatan;?></td>
    <td> <a href="hal2.php?NIM=<?php echo $rs->NIM;?>">Edit</a></td>
    <td> <a href="delete.php?NIM=<?php echo $rs->NIM;?>">Hapus</a></td>
 </tr>
<?php } ?>
</table>
</center>
    
