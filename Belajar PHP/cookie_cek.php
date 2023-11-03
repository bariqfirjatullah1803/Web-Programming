<?php
    if (isset($_COOKIE['kunjungan_terakhir'])) {
        echo "Anda terakhir membuka file cookie.php jam " . $_COOKIE['kunjungan_terakhir'];
    } else {
        echo "Anda terakhir membuka file cookie.php lebih dari 30 yang lalu";
    }
?>