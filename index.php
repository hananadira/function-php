<?php 
   echo date( "l, d-M-Y" );
   //1 = hari
   //d = tanggal 
   //M = bulan (kalo kapital akan tampil nama bulan, jika huruf nya kecil maka muncul angka bulan)
   //Y = tahun
   echo "<br>";

   //epho time
   //detik yang berlalu sejak januari 1970
   echo time ();
   echo "<br>";

   //mencari tahu 3 hari kedepan 
   echo date("l", time()+(60*60*24*3));
   echo "<br>";

   //var_dump bisa munculin detail" yg berada di tipe data 

   //isi nya disebut paramet,bisa dibilang nama lain dari wadah 
   function register( $name ) { 
        return "Hallo, selamat siang $name";
   }

   echo register("Satya");
   echo "<br>";
?>
<?php 
function penjumlahan( $angkapertama, $angkakedua) {
    $hasil = $angkapertama + $angkakedua;
    return $hasil;
   }

   $a = penjumlahan ( 5, 5 );
   echo $result = $a + 50;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= register("Satya")?></h1> 
</body>
</html>

