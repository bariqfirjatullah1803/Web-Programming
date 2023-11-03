<?php
    $batas = time() + 30;
    setcookie("kunjungan_terakhir", date('H:i:s'), $batas);

    echo "COOKIE telah dibuat, buka file <a href='cookie_cek.php'>cookie_cek.php</a> sebelum dan setelah 30 detik.";
?>