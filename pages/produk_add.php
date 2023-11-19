<h3><span class='kecil abu'>Fitur Admin</span> | <span id=judul_fitur>Tambah Produk</span></h3>
<?php if($_POST) include 'produk_add_handler.php'; ?>
<form method="post" enctype="multipart/form-data">
  <input type="hidden" name="id_produk" id="id_produk">
  <div class="form-group mb-2">
    <label for="nama_produk">Nama Produk</label>
    <input
      type="text"
      id="nama_produk"
      name="nama_produk"
      class="form-control"
      required
      minlength="10"
      maxlength="30"
      value = "<?=$nama_produk?>"
    />
    <div class="kecil miring abu mt-1" id="namaKet">
      masukan 10 s.d 30 huruf atau angka tanpa special karakter
    </div>
    <script>
      $(function () {
        let imgCheck =
          "<img src='img/icons/check.png' height=20px>";
        let namaKet =
          "masukan 10 s.d 30 huruf atau angka tanpa special karakter";
        $("#nama_produk").keyup(function () {
          let val = $(this).val();
          // console.log(val);
          if (val.length >= 10) {
            $("#namaKet").html(imgCheck);
          } else {
            $("#namaKet").text(namaKet);
          }
        });
      });
    </script>
  </div>
  <div class="form-group mb-2">
    <label for="harga">Harga</label>
    <input
      type="number"
      id="harga"
      name="harga"
      class="form-control"
      min="1000"
      max="999999"
      required 
      value="<?=$harga?>"
    />
  </div>
  <div class="form-group mb-2">
    <label for="gender">Untuk Gender</label>
    <div>
      <input
        type="radio"
        name="gender"
        id="genderP"
        value="P"
        required
        <?php echo $gender=='P' ? 'checked' : ''; ?>
      />
      <label for="genderP">Pria</label>
    </div>
    <div>
      <input
        type="radio"
        name="gender"
        id="genderW"
        value="W"
        required
        <?php echo $gender=='W' ? 'checked' : ''; ?>
      />
      <label for="genderW">Wanita</label>
    </div>
  </div>
  <div class="form-group mb-2">
    <label for="image_produk">Image Produk</label>
    <?=$image_produk ?>
    <input
      type="file"
      id="image_produk"
      name="image_produk"
      class="form-control"
      required
      accept=".jpg"
    />
  </div>
  <div class="form-group">
    <button class="btn btn-primary w-100" name=btn_simpan>Simpan</button>
  </div>
</form>