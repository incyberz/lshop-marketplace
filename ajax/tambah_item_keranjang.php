<?php
include '../conn.php';

$id_produk = $_GET['id_produk'] ?? die(erid('id_produk'));
$id_user = $_GET['id_user'] ?? die(erid('id_user'));
$mode = $_GET['mode'] ?? die(erid('mode'));

if($mode=='add'){
  $s = "INSERT into tb_keranjang (id_produk,id_user) VALUES ('$id_produk','$id_user')";
}else{
  $s = "DELETE FROM tb_keranjang WHERE id_produk='$id_produk' AND id_user='$id_user'";
}
// die($s);
$q = mysqli_query($cn,$s) or die(mysqli_error($cn));
echo 'sukses';