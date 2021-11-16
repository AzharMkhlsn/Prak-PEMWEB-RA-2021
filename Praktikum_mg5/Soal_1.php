<!DOCTYPE html>
<html>

 <body>   
    <?php
    $bil1=10;
    $bil2=5;
     echo "Bilangan 1 = $bil1 <br>";
     echo "Bilangan 2 = $bil2 <br>";
     echo "<br> Berikut merupakan hasil dari setiap operasi <br>";
     
     PENJUMLAHAN($bil1,$bil2);
    PENGURANGAN($bil1,$bil2);
     PERKALIAN($bil1,$bil2);
     PEMBAGIAN($bil1,$bil2);
     MODULUS($bil1,$bil2);

    function PENJUMLAHAN($b1,$b2){
    $hsl = $b1 + $b2;
    echo "<br>PENJUMLAHAN <br>";
    echo "Operator : + <br>";
    echo "Hasil : $hsl <br>";}
    function PENGURANGAN($b1,$b2){
    $hsl = $b1 - $b2;
    echo "<br> PENGURANGAN <br>";
    echo "Operator : - <br>";
    echo "Hasil : $hsl <br>";}
    function PERKALIAN($b1,$b2){
    $hsl = $b1 * $b2;
    echo "<br> PERKALIAN <br>";
    echo "Operator : * <br>";
    echo "Hasil : $hsl <br>"; }
    function PEMBAGIAN($b1,$b2){
    $hsl = $b1 / $b2;
    echo "<br> PEMBAGIAN <br>";
    echo "Operator : / <br>";
    echo "Hasil : $hsl <br>";}
    function MODULUS($b1,$b2){
    $hsl = $b1 % $b2;
    echo "<br> MODULUS <br>";
    echo "Operator : % <br>";
    echo "Hasil : $hsl <br>";}

    ?>
    
 </body>
</html>