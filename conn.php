<?php
# ============================================================
# DATABASE CONNECTION
# ============================================================
$db_server = "localhost";
$db_user = "root";
$db_pass = '';
$db_name = "db_marketplace";

$cn = new mysqli($db_server, $db_user, $db_pass, $db_name);
if ($cn -> connect_errno) {
  echo "Error Konfigurasi# Tidak dapat terhubung ke MySQL Server :: $db_name";
  exit();
}else{
  echo "Koneksi ke MySQL Server berhasil. db-name = $db_name";
}

date_default_timezone_set("Asia/Jakarta");