<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <title>my website</title>
        <style>
            body{
    
                text-align: center;
                font-family: Georgia, 'Times New Roman', Times, serif;
            }
           .black {background-color: rgb(5, 5, 5);}
           .black {color: white;}
        </style>
</head>
<header>
<center>
        <p><h3>
             <img src="Logo_ITERA.png" alt="ITERA" 
            style="width:75px;height:75px;"> <br>
            SELAMAT DATANG di TOKO BUAH ITERA
        </h3>
        </p></center>
</header>

<body>  <center>

   
    <section>
    </section>
    <section>
      
        <div>
            <h4> Silahkan Isi Form Belanjaan</h4>
            <p>note : form harus diisi, jika buah tidak ingin dibeli silahkan masukan angka "0"</p>
            <form method="POST" action="buah.php"  id="buah" name="buah" enctype="multipart/form">
       <table>
           <tr>
                <td><label for="">Jambu : Rp 13.000 </label></td>
                <td><input type="number" id="jambu" onchange="setValue()" name="jambu"> <br></td>
            </tr>    
            <tr>  
                <td><label for="">Mangga : Rp 15.000 </label> </td>
                <td><input type="number" id="mangga" onchange="setValue()" name="mangga"> <br></td>
            </tr> 
                <td><label for="">Salak : Rp 10.000 </label></td>  
                <td><input type="number" id="salak" onchange="setValue()" name="salak"> <br></td> 
            <tr>    
               <td><label for="">Total Harga : </label></td>
                <td><input type="text" id="total" name="total" readonly> <br></td>
            </tr>
            <td><input type="submit" value="bayar"></td>
        </table>
            </form>
            
        </div>
    </section>
    <center>
</body>
<script>
    function setValue(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>
</html>