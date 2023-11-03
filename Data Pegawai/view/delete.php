<?php
$id_pegawai = $_GET['id'];

$sql_pegawai = "SELECT * FROM pegawai WHERE id_pegawai = $id_pegawai";
$query_pegawai = mysqli_query($con, $sql_pegawai);
$data_pegawai = mysqli_fetch_assoc($query_pegawai);

if(mysqli_num_rows($query_pegawai) == 0){
  header("location: index.php");
}

$sql = "DELETE FROM pegawai WHERE id_pegawai = $id_pegawai";

$result = mysqli_query($con, $sql);

if ($result) {
    header("location: index.php");
} else {
    header("location");
}
?>