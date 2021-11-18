<?php

include "index.php";
$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];

class harga_buah
{
    var $totalMangga, $totalJambu, $totalSalak;
   
    public function __construct($mangga, $jambu, $salak){
        $this->mangga = $mangga;
        $this->jambu = $jambu;
        $this->salak = $salak;
    }

    public function getMangga(){
        $this->totalMangga = $this->mangga * 15000;}
    public function getJambu(){
        $this->totalJambu = $this->jambu * 13000;}
    public function getSalak(){
        $this->totalSalak = $this->salak * 10000;}

    public function total(){
        $total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
       
        echo "<br>Harga Total Belanjaan = ". $total;
    }
}


$transaksi = new harga_buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
echo"<br>========================================";
echo"<br> Terima Kasih Telah Berbelanja <br>";
?>
<a href="index.php">  <input type="submit" value="Refresh/Belanja Lagi"></a>