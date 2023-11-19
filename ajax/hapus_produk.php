<?php
include '../conn.php';

$id_produk = $_GET['id_produk'] ?? die(erid('id_produk'));
$s = "DELETE FROM tb_produk WHERE id='$id_produk'";
// die($s);
$q = mysqli_query($cn,$s) or die(mysqli_error($cn));
echo 'sukses';