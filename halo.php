<?php echo 'Halo PHP!'; ?>
<p>Halo juga dari HTML!</p>
<?php
echo '<p style="color:blue">Halo juga dari CSS in PHP!</p>';
echo '<button onclick="alert(\'Halo JS-PHP!\')">Halo juga dari JS in PHP!</button>';

echo '<hr>Percabangan: if-else<br>';

# ===============================================
# IF ELSE
# ===============================================
$a = 7;
echo "<br>nilai a = $a ";

if($a % 2 == 0){
  echo "<br>nilai a termasuk genap.";
}else{
  echo "<br>nilai a termasuk ganjil.";
}

# ===============================================
# TERNARY
# ===============================================
echo '<hr>Ternary (if-else simplifier)<br>';

$b = 24;
echo "<br>nilai b = $b ";
echo $b % 2 == 0 ? "<br>nilai b termasuk genap." : "<br>nilai b termasuk ganjil.";

$gg = $b % 2 == 0 ? 'genap' : 'ganjil';
echo "<br>nilai b termasuk $gg (cara 2)";


# ===============================================
# FORM IN PHP
# ===============================================
$angka = $_GET['angka'] ?? '';
echo "
  <hr>
  Simple Form in PHP
  <br>
  <br>
  <form>
    Angka 
    <input name=angka value='$angka'> 
    <button>Cek</button>
  </form>
";

if(intval($angka)==0){
  echo "bukan angka atau bernilai 0";
}elseif($angka != ''){
  $gg = $angka % 2 == 0 ? 'genap' : 'ganjil';
  echo "angka yang Anda input termasuk $gg";
}
