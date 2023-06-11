<!DOCTYPE html>
<html lang="en">

<head>
    <title>Operator</title>
    <link rel="stylesheet" type="text/css" href="style5.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <div class="wrap">
        <div class="container">
            <div class="conta">
                <a href="index.html" role="button"><i class="bi bi-house-door-fill"></i></a>
            </div>
            <h1>Operator</h1>

            <h3>Operator Aritmatika</h3>

            <?php 
$bil1=200;
$bil2=40;
$hasil=$bil1+$bil2;
echo "$bil1 + $bil2 = $hasil<br>";
$hasil = $bil1 - $bil2;
echo "$bil1 - $bil2 = $hasil<br>";
$hasil = $bil1/$bil2;
echo "$bil1 / $bil2 = $hasil<br>";
?> <br>
            <h3>Operator Logika</h3>
            <?php
$bil1=100;
$bil2=20;
$teks1="PHP";
$teks2="php";
$hasil=($bil1<>$bil2) or ($teks1==$teks2);
echo " $bil1<>$bil2 or $teks1==$teks2 adalah $hasil <br>";
$hasil=!($teks1==$teks2);
echo "!($teks1==$teks2) adalah $hasil <br>";
?> <br>
            <h3>Operator Perbandingan</h3>
            <?php
$bil1=200;
$bil2=40;
$teks1="PHP";
$teks2="php";
$hasil=$bil1==$bil2;
echo "$bil1==$bil2 = $hasil <br>";
$hasil=$bil1!=$bil2;
echo "$bil1!=$bil2 = $hasil <br>";
$hasil=$bil1>=$bil2;
echo "$bil1>=$bil2 = $hasil <br>";
$hasil=$teks1==$teks2;
echo "$teks1==$teks2 = $hasil <br>";
$hasil=$teks1!= $teks2;
echo "$teks1!=$teks2 = $hasil <br>";
?> <br>
            <h3>Operator String</h3>
            <?php
$teks1="Aku Sedang belajar ";
$teks2="Pemrograman Web ";
$teks3="Menggunakan bahasa script PHP ";
$hasil=$teks1 . $teks2 . $teks3;
echo "$hasil ";
?> <br>
            <h3>Hitung Volume Kubus</h3>
            <?php
$sisi=15;
$teks1="Belajar Menghitung";
$teks2="Volume Kubus";
$volume = $sisi*$sisi*$sisi;
echo"$teks1 . $teks2<br>";
echo"Panjang Sisi Kubus =
$sisi<br>";
echo"Volume Kubus = $volume
cm3";
?>
        </div>

    </div>
</body>

</html>