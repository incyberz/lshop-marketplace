<section id="produk" class="section">
  <div class="section-title">
    <h2>Produk kami</h2>
    <p>Sub Judul</p>
  </div>
  <div class="mb-4">Tampil Produk 1</div>
  <div class="mb-4">Tampil Produk 2</div>
  <div class="mb-4">Tampil Produk 3</div>
  <div class="p-2 fitur-admin">
    <h3>Fitur Admin | Tambah Produk</h3>
    <form method="post">
      <div class="form-group mb-2">
        <label for="namaProduk">Nama Produk</label>
        <input
          type="text"
          id="namaProduk"
          name="namaProduk"
          class="form-control"
          required
          minlength="10"
          maxlength="30"
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
            $("#namaProduk").keyup(function () {
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
        />
      </div>
      <div class="form-group mb-2">
        <label for="gender">Untuk Gender</label>
        <div>
          <input
            type="radio"
            name="gender"
            id="genderL"
            value="L"
            required
          />
          <label for="genderL">Pria</label>
        </div>
        <div>
          <input
            type="radio"
            name="gender"
            id="genderP"
            value="P"
            required
          />
          <label for="genderP">Wanita</label>
        </div>
      </div>
      <div class="form-group mb-2">
        <label for="imageProduk">Image Produk</label>
        <input
          type="file"
          id="imageProduk"
          name="imageProduk"
          class="form-control"
          required
          accept=".jpg"
        />
      </div>
      <div class="form-group">
        <button class="btn btn-primary w-100">Simpan</button>
      </div>
    </form>
  </div>
</section>