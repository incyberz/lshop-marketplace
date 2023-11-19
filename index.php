<?php
session_start();
# ================================================
# PHP INDEX
# ================================================

// set auto login
// $_SESSION['lshop_username'] = 'admin';

// set logout
// unset($_SESSION['lshop_username']);


// include 'pages/login.php';


# ================================================
# DATA SESSION
# ================================================
$id_user = '';
$is_login = 0;
$id_role = 0; // pengunjung
$sebagai = 'Pengunjung';
$username = '';
$nama_user = ''; 
$email = ''; 
$no_wa = ''; 
$jumlah_item_keranjang = 0;

if(isset($_SESSION['lshop_username'])){
  $is_login = 1;
  $username = $_SESSION['lshop_username'];
}


# ================================================
# KONEKSI KE MYSQL SERVER
# ================================================
include 'conn.php';

# ================================================
# USER DATA IF LOGIN
# ================================================
include 'data_user.php';
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';
// echo "<hr>Anda login sebagai $nama_user dg id-role : $id_role<hr>";

# ================================================
# INCLUDES
# ================================================
include 'include/insho_functions.php';

# ================================================
# PARAMETER PARSER
# ================================================
// echo var_dump($_GET);
$parameter = '';
if($_GET){
  foreach ($_GET as $key => $value) {
    $parameter = $key;
    break;
  }
}
// echo "p: $parameter";


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LShop | The Best Fashion on Earth!</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

    <!-- memanggil external CSS -->
    <link rel="stylesheet" href="css/layout.css" />
    <link rel="stylesheet" href="css/simpelindo.css" />

    <!-- memanggil external JS -->

    <!-- CSS Framework Bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />

    <!-- JS Framework JQuery -->
    <script src="vendor/jquery/jquery-3.7.1.min.js"></script>
  </head>
  <body>
    <div class="container">
      <?php include 'pages/header.php'; ?>
      <main>
        <?php include 'routing.php'; ?>
      </main>
    </div>
  </body>
</html>
