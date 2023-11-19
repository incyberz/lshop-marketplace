<section id="tokoKami" class="section">
  <div class="section-title">
    <h2>Checkout</h2>
    <p>Silahkan Anda Checkout!</p>
  </div>
  <div>
    <div class="alert alert-success"> 
      <?php
      echo '<pre>';
      var_dump($_POST);
      echo '</pre>';


      ?>
      Checkout Berhasil.<hr>Silahkan lakukan Pembayaran sesuai dengan invoice berikut:
      <div class="wadah bg-white">
        <ul>
          <li>Cara bayar: transfer</li>
          <li>No rek: 4178998767</li>
          <li>Bank: BRI cabang Bandung Kota</li>
          <li>Atas nama: LShop Bandung</li>
          <li>Paling lambat: 1 Januari 2024</li>
        </ul>
        <div class="mt-2 tengah btn btn-primary w-100" onclick="window.print()">Cetak Invoice</div>
      </div>
    </div>
  </div>
</section>