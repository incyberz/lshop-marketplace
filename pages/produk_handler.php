<?php
echo '<pre>';
var_dump($_POST);
echo '</pre>';

if(isset($_POST['btn_simpan'])){
  echo "Anda mengklik btn_simpan.<hr>Proses siap dilanjutkan ke penyimpanan database.<hr>";

  $nama_produk = $_POST['nama_produk'];
  $harga = $_POST['harga'];
  $gender = $_POST['gender'];
  $image_produk = $_POST['image_produk'];
}