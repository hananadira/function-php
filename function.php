<?php
    function nama( $time, $name ) {
        return "Hallo, selamat $time $name !";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <style>
        body {
            background-color: #BDC3CB;
            margin-top: 190px;
            text-align: center;
            font-size: 30px;
        }
        h1{
            color: #747474;
            padding: 5px;
            font-family: cursive;
        }
        marquee{
            margin-left: 190px;
            margin-right: 190px;
        }
        hr {
            margin-left: 400px;
            margin-right: 400px;
            color: black;
        }
    </style>
    <marquee><h1><?= nama ("siang", "Hana")?></h1></marquee>
    <hr>

    <form action ="function.php" method="post">
        Angka : <br> <input type="int" name="angka"> <br>
        <!-- <input type="submit"><br> -->
        <input type="submit" value="submit" name="tombol"><br>
    </form>
</body>
</html>

<?php 
    // function penjumlahan( $angkasatu, $angkadua) {
    //     $hasil = $angkasatu + $angkadua;
    //     return $hasil;

    if (isset($_POST['tombol'])) {
        $angka = $_POST['angka'];
    } if ($angka % 2 == 0) {
        echo "$angka  This is an even number (<b>genap</b>) ";
    } else {
        echo "$angka This is an odd number (<b>ganjil</b>)";
    }
//    }

//    $a = penjumlahan ( 4, 5 );
//    echo $result = $a + 5 ;

   
   echo "<br>";
   echo "<br>";

   echo "Today is ";
   echo date ("<b>l</b>");
   echo "<br>";
   echo "<br>";

   echo "The next 6 days are days ";
   echo date ("<b>l</b>", time()+(60*60*24*6));
   echo "<hr>";
?>

