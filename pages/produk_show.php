<link rel="stylesheet" href="css/produk_show.css">
<?php
include 'include/insho_functions.php';
$item_produk = div_alert('danger', "Belum ada data produk.");;

$s = "SELECT * FROM tb_produk";
$q = mysqli_query($cn,$s) or die(mysqli_error($cn));
$jumlah_produk = mysqli_num_rows($q);

if($jumlah_produk){
  $item_produk = '';
  while($d=mysqli_fetch_assoc($q)){
    $id = $d['id'];
    $gender = strtolower($d['gender']);

    if($gender=='p') $path_gender = 'pria';
    if($gender=='w') $path_gender = 'wanita';

    $harga = number_format($d['harga'],0);

    $item_produk .= "
      <div class='item_produk item_produk-$gender'>
        <img src='img/pakaian/$path_gender/$d[img_produk]' class='img-thumbnail img_produk'>
        <div>
          <span class=nama_produk>$d[nama_produk]</span> ~ 
          <span class=harga_rp>Rp$harga</span>
        </div>
        <button class='btn btn-success btn-sm w-100 btn_keranjang'>Tambah ke Keranjang</button>
      </div>
    ";
  }
}

// jika ada produk maka tampilkan
echo !$jumlah_produk ? $item_produk : "<div class='produk_show wadah'>$item_produk</div>";
