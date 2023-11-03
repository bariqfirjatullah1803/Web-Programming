<?php
    $con = mysqli_connect("localhost", "root", "", "pegawai");
    if (mysqli_connect_errno()) {
        die("Koneksi gagal : " . mysqli_connect_error());
    }
?>