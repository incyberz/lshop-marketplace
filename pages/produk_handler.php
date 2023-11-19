<?php
echo '<pre>';
var_dump($_POST);
echo '</pre>';

if(isset($_POST['btn_simpan'])){
  echo "Anda mengklik btn_simpan.<hr>Proses siap dilanjutkan ke penyimpanan database.<hr>";
  
  $nama_produk = $_POST['nama_produk'];
  $harga = $_POST['harga'];
  $gender = $_POST['gender'];
  // $image_produk = $_POST['image_produk'];
  
  echo "<hr>PHP Upload File aktif. Proses siap dilanjutkan ke penyimpanan File Upload.<hr>";
  echo '<pre>';
  var_dump($_FILES);
  echo '</pre>';

  $path_upload = 'uploads';
  if(!file_exists($path_upload)) mkdir($path_upload);

  $nama_file = $_FILES['image_produk']['name'];

  $file_asal = $_FILES['image_produk']['tmp_name'];
  $file_tujuan = "$path_upload/$nama_file";

  if(move_uploaded_file($file_asal,$file_tujuan)){
    $image_produk = "
      <div class='wadah tengah'>
        <div class='alert alert-success'>Upload Sukses</div>
        <div class='p-2'>
          <a href='$file_tujuan' target=_blank>
            <img src='$file_tujuan' style='max-width:300px'>
          </a>
        </div>
      </div>
    ";
  }

}