<?php
include '../koneksi.php';

$nama_user = $_POST['nama_user'];
$password = $_POST['password'];
$username = $_POST['username'];
$id_level = $_POST['id_level'];

$query_daftar = mysqli_query($kon, "INSERT INTO tb_user VALUES ('$username', '$password', '$nama_user', '$id_level')");

header('location: index.php');
?>