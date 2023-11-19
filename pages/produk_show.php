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

    $edit = "<img class='zoom pointer manage_produk' id='edit_produk__$id' src='img/icons/edit.png' height=20px>";
    $hapus = "<img class='zoom pointer manage_produk' id='hapus_produk__$id' src='img/icons/hapus.png' height=20px>";
    $edit_hapus = $id_role==2 ? "<div class='mb-1'>$edit | $hapus</div>" : '';

    $item_produk .= "
      <div class='item_produk item_produk-$gender' id='item_produk__$id'>
        $edit_hapus
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

echo !$jumlah_produk ? $item_produk : "<div class='produk_show wadah'>$item_produk</div>";












?><script>
  $(function(){
    let link_ajax = '';

    $('.manage_produk').click(function(){
      let tid = $(this).prop('id');
      let rid = tid.split('__');
      let aksi = rid[0];
      let id_produk = rid[1];

      console.log(aksi,id_produk);

      if(aksi=='hapus_produk'){
        let y = confirm('Yakin untuk menghapus produk ini?');
        if(!y) return;
        link_ajax = `ajax/hapus_produk.php?id_produk=${id_produk}`;
      }

      // execute AJAX JQuery
      $.ajax({
        url:link_ajax,
        success: function(hasil){
          if(hasil.trim()=='sukses'){
            $('#item_produk__'+id_produk).fadeOut();
          }else{
            console.log(hasil);
            alert('Terjadi kesalahan. Tidak bisa menghapus data.');
          }
        }
      })
      

    })
  })
</script>
