<?php
session_start();
# ==================================================
# PRODUK FILTER HANDLER
# ==================================================
$keyword = $_GET['keyword'] ?? '';
$order_by = $_GET['order_by'] ?? 'rand()';

$id_user = '';
$id_role = 0;
$username = $_SESSION['lshop_username'] ?? '';
include '../include/insho_functions.php';
include '../conn.php';
include '../data_user.php';
$item_produk = div_alert('danger', "Produk tidak ditemukan.");;

$s = "SELECT a.*,
(SELECT COUNT(1) FROM tb_keranjang WHERE id_user='$id_user' AND id_produk=a.id) sudah_di_keranjang 
FROM tb_produk a 
WHERE a.nama_produk LIKE '%$keyword%' 
ORDER BY  $order_by 
LIMIT 10 ";
// echo $s;
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

    $edit = "<img class='zoom pointer manage_produk' id='edit_produk__$id' src='img/icons/edit.png' height=20px>";
    $hapus = "<img class='zoom pointer manage_produk' id='hapus_produk__$id' src='img/icons/hapus.png' height=20px>";
    $edit_hapus = $id_role==2 ? "<div class='mb-1'>$edit | $hapus</div>" : '';

    $caption = $d['sudah_di_keranjang'] ? 'Keluarkan dari Keranjang' : 'Tambah ke Keranjang';
    $success = $d['sudah_di_keranjang'] ? 'secondary' : 'success';

    $btn_keranjang = $username=='' ? "<a href='?login' class='btn btn-success btn-sm w-100' >$caption</a>" : "<button class='btn btn-$success btn-sm w-100 btn_keranjang' id=btn_keranjang__$id>$caption</button>";

    $keranjang = $id_role==2 ? '' : $btn_keranjang;

    $item_produk .= "
      <div class='item_produk item_produk-$gender' id='item_produk__$id'>
        $edit_hapus
        <img src='img/pakaian/$path_gender/$d[img_produk]' class='img-thumbnail img_produk'>
        <div>
          <span class=nama_produk id=nama_produk__$id>$d[nama_produk]</span> ~ 
          <span class=harga_rp>
            Rp
            <span id=harga__$id>$harga</span>
          </span>
        </div>
        $keranjang
      </div>
    ";
  }
}

echo !$jumlah_produk ? $item_produk : "<div class='produk_show wadah'>$item_produk</div>";