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
      foreach ($_POST as $key => $value) {
        if(strpos("salt$key",'qty__')){
          $rkey = explode('__',$key);
          $id_keranjang = $rkey[1];
          $s = "UPDATE tb_keranjang SET sudah_checkout=1, tanggal_checkout=CURRENT_TIMESTAMP, qty=$value WHERE id=$id_keranjang";
          echo "<pre>$s</pre>";
          $q = mysqli_query($cn,$s) or die(mysqli_error($cn));
        }
      }

      $nominal = number_format($_POST['total_hidden'],0);


      ?>
      Checkout Berhasil.<hr>
      <div class="mb-2">Silahkan lakukan Pembayaran sesuai dengan invoice berikut:</div>
      <div class="wadah bg-white">
        <ul>
          <li>Cara bayar: transfer</li>
          <li>No rek: 4178998767</li>
          <li>Bank: BRI cabang Bandung Kota</li>
          <li>Atas nama: LShop Bandung</li>
          <li>Nominal: Rp <?=$nominal?></li>
          <li>Paling lambat: 1 Januari 2024</li>
        </ul>
        <div class="wadah tengah">
          Verifikasi bukti bayar maksimal 1 x 24jam. Untuk mempercepat proses silahkan kirim Bukti Bayar via whatsApp ke 081223432567 (LShop Customer Service)
          <hr>
          <h4 class='darkblue'>Terikasih sudah berbelanja !!</h4>

        </div>
        <div class="mt-2 tengah btn btn-primary w-100" onclick="window.print()">Cetak Invoice</div>
      </div>
    </div>
  </div>
</section>