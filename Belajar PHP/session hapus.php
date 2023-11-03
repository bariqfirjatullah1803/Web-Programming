<?php
session_start();

session_destroy();

echo "Session telah dihapus, <a href='session cek.php'> Cek Session </a>";