<style>
  .item_keranjang{
    display: grid;
    grid-template-columns: 20px auto 100px 100px 100px;
    grid-gap: 10px
  }
</style>
<section id="keranjang" class="section section-bg">
  <div class="section-title">
    <h2>Keranjang Belanja</h2>
    <p>Halo <?=$nama_user?>! Ini adalah keranjang belanja kamu.</p>
    <div><a href="?produk">Lanjutkan Belanja</a></div>
  </div>
  <div>
    <?php
    $keranjang = '';
    $s = "SELECT *  
    FROM tb_keranjang a 
    JOIN tb_produk b ON a.id_produk=b.id 
    WHERE id_user='$id_user' 
    AND sudah_checkout is null
    ";
    $q = mysqli_query($cn,$s) or die(mysqli_error($cn));
    if(mysqli_num_rows($q)==0){
      echo div_alert('danger', "Keranjang kamu masih kosong.");
    }else{
      $keranjang = '';
      $i=0;
      while($d=mysqli_fetch_assoc($q)){
        $i++;
        $id=$d['id'];

        $jumlah = $d['harga']*$d['qty'];
        $harga_show = number_format($d['harga'],0);
        $jumlah_show = number_format($jumlah,0);

        $hapus = "<img src='img/icons/delete.png' height=20px class='zoom pointer hapus_item' id=hapus__$id >";

        $keranjang .= "
          <div id=item_keranjang__$id class=item_keranjang>
            <div>$i</div>
            <div>
              $d[nama_produk] $hapus 
            </div>
            <div class=kanan>$harga_show x <span class=hidden id=harga__$id>$d[harga]</span></div>
            <div class=kanan>
              <input type=number class='qty form-control' id=qty__$id name=qty__$id value='$d[qty]'>
            </div>
            <div class=kanan>
              <span id=jumlah_show__$id>$jumlah_show</span> 
              <span class='hidden jumlah' id=jumlah__$id>$jumlah</span>
            </div>
          </div>
        ";
      }
      echo "
        <form action='?checkout' method=post>
          $keranjang
          <hr>
          <div class=hidden>
            $d[nama_produk] $hapus 
          </div>
          <div class='kanan mb-2 tebal'>
            Total Rp : <span id=total>000</span>
          </div>
          <button class='btn btn-primary w-100'>Checkout</button>
        </form>
      ";
    }





    ?>
  </div>
</section>
<script>
  $(function(){
    let qty = 0;
    let harga = 0;
    let jumlah = 0;
    let total = 0;

    $('.qty').change(function(){
      let tid = $(this).prop('id');
      let rid = tid.split('__');
      let aksi = rid[0];
      let id_keranjang = rid[1];

      harga = parseInt($('#harga__'+id_keranjang).text());
      qty = parseInt($('#qty__'+id_keranjang).val());
      if(qty<1){
        qty = 1;
        $('#qty__'+id_keranjang).val(1);
      }

      console.log(harga,qty);

      jumlah = harga * qty;
      $('#jumlah__'+id_keranjang).text(jumlah);
      $('#jumlah_show__'+id_keranjang).text(jumlah);

      let class_jumlah = document.getElementsByClassName('jumlah');
      total = 0;
      for (let i = 0; i < class_jumlah.length; i++) {
        total += parseInt(class_jumlah[i].innerHTML);
      }
      $('#total').text(total);

    });
    $('.qty').change();
  })
</script>