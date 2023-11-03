<?php
session_start();
$_SESSION['username'] = "Administrator";
$_SESSION['password'] = "Rahasia";

echo "Session telah dibuat, <a href='session cek.php'> Cek Session </a>";
?>