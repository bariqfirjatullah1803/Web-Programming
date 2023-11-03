<?php

$nilai = 70;
if ($nilai >= 80) {
    echo "Sangat baik";
} else if ($nilai >= 60) {
    echo "Cukup baik<br>";
} else {
    echo "<br> tidak lulus";
}

$kota = "Surabaya";
switch ($kota) {
    case "Bandung":
        echo "Ibukota Jawa Barat";
        break;
    case "Surabaya":
        echo "Ibukota Jawa Timur<br>";
        break;
    case "Semarang":
        echo "Ibukota Jawa Tengah";
        break;
    default:
        echo "Ibukota provinsi lain";
        break;
}

$no = 1;
while ($no <= 10) {
    echo "Baris $no <br>";
    $no++;
}

$no = 1;
do {
    echo "Baris $no <br>";
    $no++;
} while ($no <= 10);

for ($no = 1; $no <= 10; $no++) {
    echo "Bariq $no <br>";
}

$nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");

echo "Nama hari: ";
foreach ($nama_hari as $hari) {
    echo "$hari, ";
}

$profil = [
    "nama" => "Bariq",
    "alamat" => "Malang",
    "usia" => 22
];
echo '<br>';
foreach ($profil as $key => $value) {
    echo "$key: $value<br>";
}

include "include.php";
echo '<br>';

function ucap_salam($nama)
{
    echo "Halo, apa kabar <b>$nama</b>?";
}

ucap_salam("Bariq");

echo "<p>Kita dapat menggunakannya lagi seperti berikut:</p>";

ucap_salam("Baktiar");

function hitung_luas($panjang, $lebar = 10)
{
    $luas = $panjang * $lebar;
    return $luas;
}
echo '<br>';
echo "Luas ruangan adalah " . hitung_luas(12);

echo "<p>Kita dapat menggunakan lagi seperti berikut:</p>";

$p = 15;
$l = 11;
$luas = hitung_luas($p, $l);
echo "Luas ruangan adalah $luas <br>";

$text = "Saya senang belajar PHP";
echo substr($text, 0, 11) . " (hasil substr()) <br>";
echo substr($text, 12) . " (hasil substr()) <br>";
echo strtoupper($text) . " (hasil strtoupper()) <br>";
echo ucwords($text) . " (hasil ucwords()) <br>";
echo str_replace("senang", "suka", $text) . "(hasil str_replace()) <br>";
echo strpos($text, "p") . "(hasil strpos()) <br>";
$kata = explode(' ', $text);
echo $kata[1] . " (hasil dari explode())<br>";


echo '<br>';
echo date('Y/m/d');
echo "<br>";
echo date('d-m-Y H:i:s a');
echo "<br>";
echo date('d F Y');

$sekarang = mktime(12, 13, 40, date('m'), date('d'), date('Y'));
echo "<br>Sekarang tanggal " . date('d F Y', $sekarang);
$bulanlalu = mktime(0, 0, 0, date('m') - 1, date('d'), date('Y'));
echo "<br>Satu bulan yang lalu adalah tanggal " . date('d F Y', $bulanlalu);
$lusa = mktime(0, 0, 0, date('m'), date('d') + 2, date('Y'));
echo "<br>Lusa adalah tanggal " . date('d F Y', $lusa);
$tahun = mktime(0, 0, 0, date('m'), date('d'), date('Y') - 2);
echo "<br>Dua tahun yang lalu adalah tanggal " . date('d F Y', $tahun);

echo "<br>" . abs(-200) . "<br>";
echo cos(60) . "<br>";
echo bindec(10001111011) . "<br>";
echo ceil(12.123) . "<br>";
echo floor(12.123) . "<br>";
echo round(12.123, 2) . "<br>";
echo deg2rad(90) . "<br>";
echo pow(4, 2) . "<br>";
echo sqrt(16) . "<br>";
echo rand(10, 1000) . "<br>";
echo max(10, 11, 17, 13) . "<br>";
echo max(array(10, 11, 17, 13)) . "<br>";

$x = 75;
$y = 25;

function penambahan()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

penambahan();
echo 'Hasil penambahan menggunakan varibael global ' . $z;

echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['HTTP_HOST'];
echo '<br>';
// echo $_SERVER['HTTP_REFERER'];
// echo '<br>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '<br>';
echo $_SERVER['SCRIPT_NAME'];