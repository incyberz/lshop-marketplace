<?php 
switch ($parameter){
  case '':
  case 'home': $konten = 'pages/home.php'; break;
  // case 'sections': $konten = 'pages/sections.php'; break;
  default: $konten = $parameter;
}

if(!file_exists($konten)) $konten="pages/$konten.php";
if(!file_exists($konten)){
  include 'na.php';
}else{
  include $konten;
}