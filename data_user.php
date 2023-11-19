<?php
if($username!=''){
  $s = "SELECT * FROM tb_user WHERE username='$username'";
  $q = mysqli_query($cn,$s) or die(mysqli_error($cn));
  if(mysqli_num_rows($q)==0) die('Data user tidak ada.');
  
  $d = mysqli_fetch_assoc($q);
  
  $nama_user = $d['nama_user'];
  $email = $d['email'];
  $no_wa = $d['no_wa'];
  $id_role = $d['id_role'];
}
