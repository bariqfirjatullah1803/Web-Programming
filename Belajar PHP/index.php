<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    # ini adalah komentar
    // ini adalah komentar
    /* ini adalah komentar
    jika lebih dari satu baris */
    echo "<h2>PHP itu mudah</h2>";
    echo "Saya senang belajar \"PHP\" <br>";

    print 'Jika terus belajar, ';
    print('saya pasti bisa menguasai "PHP"<br>');

    $kata = "Selamat pagi kawan";
    $angka = 210;

    var_dump($kata);
    var_dump($angka);
    echo '<br>';
    define("SALAM", "Selamat belajar PHP!");

    echo SALAM;

    $bulan = array(
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember"
    );

    echo "Bulan ke 3 adalah " . $bulan[2];

    $profil = [
        "nama" => "Bariq",
        "alamat" => "Malang",
        "usia" => 22
    ];

    echo "<br>Nama saya $profil[nama], saya berasal dari kota $profil[alamat], usia saya $profil[usia] tahun.";

    // cara 2
    $profil['nama'] = "Baktiar";
    $profil['alamat'] = "Malang";
    $profil['usia'] = 22;

    echo '<br>Nama saya ' . $profil['nama'] . ', saya berasal dari kota ' . $profil['alamat'] . ', usia saya ' . $profil['usia'] . ' tahun.';
    ?>
</body>

</html>