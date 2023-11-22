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


# ===============================================
# LOOPING FOR
# ===============================================
echo '<hr>Looping PHP | For <br>';

echo '<br>Deret 10 bilangan asli dengan looping for';
for ($i=1; $i <= 10 ; $i++) { 
  echo "<br>$i";
}

echo '<br><br>Deret 10 bilangan random dengan looping for';
for ($i=1; $i <= 10 ; $i++) { 
  $random = rand(1,99);
  echo "<br>$random";
}

echo '<br><br>Deret Fibbonaci dengan looping for';
$a = 1;
$b = 1;
$c = 0;
echo "<br>$a";
echo "<br>$b";
for ($i=1; $i <= 10 ; $i++) {
  $c = $a + $b; 
  echo "<br>$c";
  $a = $b;
  $b = $c;
}



# ===============================================
# LOOPING WHILE FOR ARRAY
# ===============================================
echo '<hr>Looping PHP | Foreach <br>';
$arr_nama_hari = ['Ahad', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

echo "<br>Memunculkan isi array nama_hari dengan perintah var_dump()";
echo '<pre>';
echo var_dump($arr_nama_hari);
echo '</pre>';



$weekday = date('w');

echo "<br>Output foreach array nama_hari :";
foreach ($arr_nama_hari as $key => $hari) {
  $hari_ini = $weekday==$key ? '<-- hari ini' : '';
  $style_hari_ini = $weekday==$key ? 'color:blue; font-weight:bold' : '';
  echo "<div style='$style_hari_ini'>~ hari $hari $hari_ini</div>";
}




