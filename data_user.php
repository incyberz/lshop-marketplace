<?php
if($username!=''){
  $s = "SELECT a.*, 
  (SELECT COUNT(1) FROM tb_keranjang WHERE id_user=a.id) jumlah_item_keranjang  
  FROM tb_user a  
  WHERE a.username='$username'";
  $q = mysqli_query($cn,$s) or die(mysqli_error($cn));
  if(mysqli_num_rows($q)==0) die('Data user tidak ada.');
  
  $d = mysqli_fetch_assoc($q);
  
  $id_user = $d['id'];
  $nama_user = $d['nama_user'];
  $email = $d['email'];
  $no_wa = $d['no_wa'];
  $id_role = $d['id_role'];
  $jumlah_item_keranjang = $d['jumlah_item_keranjang'];

  $sebagai = $id_role==1 ? 'Pembeli' : 'Admin';
}
