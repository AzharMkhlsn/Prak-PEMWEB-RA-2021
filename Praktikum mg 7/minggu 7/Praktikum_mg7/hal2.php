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

<nav>
            <link rel="stylesheet" href="style.css">
            <ul>
                <li><a href="index.html">Home</a></li>
           
                </ul>
     </nav>


<center>
<body>
<nav>
            <link rel="stylesheet" href="styl2.css">
        
<form method="post" action ="save.php">
    <table>
    <tr>
        <td>  NIM</td>
        <td>
       <input type="text" name="NIM" value="<?php echo $NIM;?>"><br>
        </td>
    </tr>
   <tr>
       <td> Nama </td>
       <td>
  <input type="text" name="Nama" value="<?php echo $Nama;?>"><br>
   </td></tr>
   <tr>
       <td> Prodi</td>   
   <td>
  <input type="text" name="Prodi"value="<?php echo $Prodi;?>"><br>
   </td></tr>
   <tr>
       <td>  Angkatan </td>
       <td>
      <input type="text" name="Angkatan"value="<?php echo $Angkatan;?>"><br>
       </td>
   </tr>
  
   <tr><td>
 
           <li> <input type="submit" value="save"></li>

   </td></tr>

   </table>
</form>

    
</body></center>