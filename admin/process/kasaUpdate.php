<?php 
require_once '../functions.php';
require_once '../config/config.php';

if ( !isset($_SESSION['login']) ) {
	header('location:../login.php');
}

if ($_POST) {

$id = $_POST['id'];
$gelir = $_POST['gelir'];
$gider = $_POST['gider'];
$ay = $_POST['ay'];
$year = $_POST['year'];
$text = $_POST['text'];

$toplam = ($gelir - $gider);

$sql = "SELECT * FROM finances WHERE id=$id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    $geliro = $row['gelir'];
    $gidero = $row['gider'];
    $kasao = $row['kasa'];
}}

$toplamo = ($geliro - $gidero);

$fark = ($toplamo - $toplam);



$sql = "UPDATE finances SET kasa = kasa - $fark WHERE id > $id";
$result = mysqli_query($conn, $sql);

if($result) {
  $sql = "UPDATE finances SET gelir = $gelir WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    $sql = "UPDATE finances SET gider = $gider WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result) {
        $kasat = ($kasao - $fark);
        $sql = "UPDATE finances SET kasa = $kasat WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        if($result) {
          $sql = "UPDATE finances SET text = '$text' WHERE id=$id";
          $result = mysqli_query($conn, $sql);
          if($result) {
            header("location:../kasa.php?ay=$ay&yıl=$year");
            exit();
          }
        }
    }
  }
}

}
