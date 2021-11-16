<!DOCTYPE html>
<html >

<body>

    <?php 
     echo "Data sebelum pengurutan : <br>";
     echo "larine, aduh, qifuat, toda, anevi, samid, kifuat <br><br>";
    function urut(&$data){
            sort($data);
        }

    $data = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    echo "Data terurut berdasarkan 'abjad' : <br> <br>";
    urut($data);

        $i = 0;
        foreach($data as $nama){
            if($i > count($data)-1){
                echo $nama;
            }else if($i < count($data)){
                echo $nama."<br>";
            }
            $i++;
        }
    ?>
    
</body>
</html>