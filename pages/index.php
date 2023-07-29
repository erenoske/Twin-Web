<?php
// tr
if(!isset($_GET['lang'])) {
  $baslik = 'Twin Baby Spa - Bebek Masajı, Floating, Hidroterapi';
  include_once ("./headers/main-type-tr.php");
  include_once ("./languages/main-tr.php");
  include_once ("./footer/footer-tr.php");
}
// eng
if (@$_GET['lang'] == 'eng') {
  $baslik = 'Twin Baby Spa - Bebek Masajı, Floating, Hidroterapi';
  include_once ("./headers/main-type-en.php");
  include_once ("./languages/main-en.php");
  include_once ("./footer/footer-en.php");
 } 
?>


