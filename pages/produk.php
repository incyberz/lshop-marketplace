<?php
// inisialisasi variabel input
$nama_produk = '';
$harga = 0;
$gender = '';
$image_produk = '';

?>
<section id="produk" class="section">
  <div class="section-title">
    <h2>Produk kami</h2>
    <p>The Best Produk Fashion on Earth!</p>
  </div>

  <!-- PRODUK SHOW FOR PUBLIK -->
  <?php include 'produk_show.php'; ?>
  
  <!-- ADMIN ONLY -->
  <div class="p-2 fitur-admin">
    <?php include 'produk_add.php'; ?>
  </div>
</section>