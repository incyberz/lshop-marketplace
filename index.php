<?php
# ================================================
# PHP INDEX
# ================================================

# ================================================
# DATA SESSION DUMMY
# ================================================
$id_role = 0; // pengunjung 
$id_role = 1; // login as pembeli 
$id_role = 2; // login as admin 


# ================================================
# KONEKSI KE MYSQL SERVER
# ================================================
include 'conn.php';

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
