<!DOCTYPE html>
<html >
<head>
    <h3>Mencari Bilangan Prima antara 1-50</h3>
</head>
<body>
    <?php   
    echo "Hasil Prncarian : <br>";
        function bilangan_prima(){
            for($i=0;$i<50;$i++){ 
                $I= 0; 
                for($j=1;$j<=$i;$j++){ 
                   
                 if($i % $j == 0){ 
                        $I++; }
                }
            if($I == 2){ 
                echo $i."<br>" ;
             } }
            }
        $bilangan_prima = bilangan_prima();
    ?>
    
</body>
</html>