<link rel="stylesheet" href="css/produk_show.css">

<!-- ============================================== -->
<!-- PRODUK FILTER UI-->
<!-- ============================================== -->
<div class="wadah">
  <div class="row">
    <div class="col-lg-2">
      <div class='kecil abu'>Apa yang Anda cari?</div>
    </div>
    <div class="col-lg-5">
      <input type="text" class="flex-1 form-control input-sm" id=keyword maxlength=20>
    </div>
    <div class="col-lg-5">
      <div class="row">
        <div class="col-lg-5 kanan">
          Order by:
        </div>
        <div class="col-lg-7">
          <select id="order_by" class="form-control">
            <option value="date_created">Model Terbaru</option>
            <option value="date_created desc">Model Classic</option>
            <option value="harga">Harga Terendah</option>
            <option value="harga desc">Harga Tertinggi</option>
          </select>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="hasil_pencarian"></div>
<script>
  $(function(){
    let link_ajax = '';
    let id_produk = '';
    let nama_produk = '';
    let harga = '';

    $('#keyword').keyup(function(){
      if($(this).val().length > 2){
        $('#order_by').change();
      }
    })

    $('#order_by').change(function(){
      let keyword = $('#keyword').val();
      let order_by = $('#order_by').val();

      link_ajax = `ajax/fetch_produk.php?keyword=${keyword}&order_by=${order_by}`;
      $.ajax({
        url:link_ajax,
        success:function(hasil){
          $('#hasil_pencarian').html(hasil);
        }
      })
    })

    $('#order_by').change();

    $(document).on("click",".manage_produk",function(){
      let tid = $(this).prop('id');
      let rid = tid.split('__');
      let aksi = rid[0];

      id_produk = rid[1];

      console.log(aksi,id_produk);

      if(aksi=='hapus_produk'){
        let y = confirm('Yakin untuk menghapus produk ini?');
        if(!y) return;
        link_ajax = `ajax/hapus_produk.php?id_produk=${id_produk}`;
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
      }else if(aksi=='edit_produk'){
        // console.log('handler edit produk');
        $('.produk_show').slideUp();

        // dapatkan data produk yang di klik
        nama_produk = $('#nama_produk__'+id_produk).text();
        harga = $('#harga__'+id_produk).text();
        harga = harga.replace('.', ''); //replace titik pada ribuan
        harga = harga.replace(',', ''); //replace koma pada ribuan
        harga = parseInt(harga);
        console.log(nama_produk, harga);

        // set nama, harga, dan id pada form
        $('#id_produk').val(id_produk)
        $('#nama_produk').val(nama_produk)
        $('#harga').val(harga)
        $('#judul_fitur').text('Edit Produk')


      }

      

    })
  })
</script>
